const { src, dest, watch, parallel, series } = require("gulp");
const browserSync = require("browser-sync").create();
const babel = require("gulp-babel");
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const minify = require("gulp-minify");
const autoprefixer = require("gulp-autoprefixer");
const del = require("del");

const browserify = require("browserify");
const babelify = require("babelify");
const source = require("vinyl-source-stream");
const buffer = require("vinyl-buffer");

// define entry for browserify
const jsSrc = "main.js";
const jsFolder = "src/js/";

// we can add a script for front-end and script for back-end and so on
const jsFiles = [jsSrc];

const paths = {
  html: {
    src: "**/*.php",
    dest: "output/",
  },
  css: {
    src: "src/scss/**/*.scss",
    dest: "dist/css",
  },
  scripts: {
    src: "src/js/**/*.js",
    dest: "dist/js",
  },
};

function clean() {
  return del(["dist/css/*.css", "dist/js/*.js"]);
}

function css() {
  return src(paths.css.src)
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("style.css"))
    .pipe(autoprefixer())
    .pipe(minify())
    .pipe(dest(paths.css.dest));
}

async function jsTask() {
  jsFiles.map(function (entry) {
    return (
      browserify({
        entries: [jsFolder + entry],
      })
      .transform("babelify", 
      {
          presets: ["@babel/preset-env"], 
          sourceMaps: true, 
          global: true, 
          ignore: [/\/node_modules\/(?!your module folder\/)/]
      }).bundle()
        .pipe(source("bundle.js"))
        .pipe(dest('dist/js'))
        .pipe(buffer())
    );
  });
}

function watchFiles() {
  browserSync.init({
    proxy: "http://localhost:8888/portfolio/",
    ui: {
      port: 8888,
    },
    /*  */
  });
  watch(paths.css.src, css);
  watch(paths.scripts.src, jsTask);
  watch(paths.html.src).on("change", browserSync.reload); // any change in output folder, reload page
}

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
const build = series(clean, parallel(css, jsTask), watchFiles);

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.css = css;
exports.jsTask = jsTask;
exports.watch = watchFiles;
exports.build = build;
/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = build;
