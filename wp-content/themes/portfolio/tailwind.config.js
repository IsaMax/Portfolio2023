/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./**/*.{html,js,php}"],
  safelist: [
    'grid-cols-1',
    'md:grid-cols-2',
    'md:col-span-2',
    'md:gap-y-14',
    'gap-y-10',
    'gap-x-10',
    'top-[50%]',
    'top-6',
    '-translate-y-1/2',
    'left-4',
    'right-7',
    'pointer-events-none',
    'group-hover:-translate-y-1/2',
    'group-hover:translate-x-2'
  ],
  theme: {
    fontFamily: {
      inter: ["Inter", ...defaultTheme.fontFamily.sans],
      barlow: ["Barlow", ...defaultTheme.fontFamily.sans],
    },
    fontSize: {
      fz12: "12px",
      fz14: "14px",
      fz16: "16px",
      fz18: "18px",
      fz20: "20px",
      fz22: "22px",
      fz24: "24px",
      fz28: "28px",
      fz36: "36px",
      fz48: "48px",
      fz60: "60px",
    },
    extend: {
      screens: {
        'xs': '500px',
      },
      transitionTimingFunction: {
        'outexpo': 'cubic-bezier(0.190, 1.000, 0.220, 1.000)',
        'out-expo': 'cubic-bezier(0.19, 1, 0.22, 1)',
       },
      colors: {
        colorText: "rgb(74, 85, 104)",
        darkerColorText: "#1a202c",
        blue: "#087de4",
        blueDarker: "#0860e4",
        lightGreen: "rgb(247, 250, 252)",
        green: "rgb(22, 163, 148)",
        hoverGreen: "rgb(24, 115, 103)",
        backgroundServices: "rgb(45 93 175)"
      },
      gridTemplateColumns: {
        'section': '1fr 40%',
      }
    },
  },
  plugins: [],
};