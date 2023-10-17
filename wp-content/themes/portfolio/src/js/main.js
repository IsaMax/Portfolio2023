import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

document.addEventListener("DOMContentLoaded", function () {
  const splideReviewsElts = document.getElementById("splide-avis");

  if (splideReviewsElts) {
    const splideReviews = new Splide("#splide-avis", {
      perPage: 1,
      padding: "2%",
      pagination: false,
      gap: "60px",
      arrows: false,
      type: "loop",
      perMove: 1,
      autoplay: true,
      mediaQuery: "min",
      breakpoints: {
      1000: {
          perPage: 2.5,
        },
        768: {
          perPage: 1.7,
          arrows: true
        },
        400: {
          perPage: 1.2,
        },
      },
    });

    splideReviews.mount();
  }

  const splideLogosElts = document.getElementById("splide-logos");
  if (splideLogosElts) {
    const splideLogos = new Splide("#splide-logos", {
      perPage: 1.5,
      padding: ".5%",
      pagination: false,
      gap: "20px",
      type: "loop",
      arrows: false,
      drag: "free",
      autoScroll: {
        speed: 0.5,
      },
      mediaQuery: "min",
      breakpoints: {
        768: {
          perPage: 4,
        },
        500: {
          perPage: 2.5,
          gap: "60px",
        },
        380: {
          perPage: 2,
          padding: "2%",
        },
      },
    });

    splideLogos.mount({ AutoScroll });
  }

  // Accordion

  const accordions = document.querySelectorAll(".js-accordion");

  if (accordions) {
    accordions.forEach((accordion) => {
      const header = accordion.querySelector(".js-accordion__header");

      header.onclick = () => {
        if (accordion.classList.contains("is-active"))
          accordion.classList.remove("is-active");
        else {
          accordions.forEach((accordion) => {
            accordion.classList.remove("is-active");
          });

          accordion.classList.add("is-active");

          window.setTimeout(() => {
            header.scrollIntoView();
          }, 300);
        }
      };
    });
  }

  // Lazy loading image projets
  const lazyImages = document.querySelectorAll(".js-lazycontainer img");

  if (lazyImages && "IntersectionObserver" in window) {
    let options = {
      root: null,
      rootMargin: "100px",
      threshold: 0.7,
    };

    let lazyImageObserver = new IntersectionObserver(function (
      entries,
      observer
    ) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          /* lazyImage.srcset = lazyImage.dataset.srcset; */
          lazyImage.classList.remove("lazy");
          lazyImageObserver.unobserve(lazyImage);
        }
      });
    },
    options);

    lazyImages.forEach(function (lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  }

  // Hamburger

  const hamburger = document.querySelector(".js-hamburger");
  if (hamburger) {
    hamburger.onclick = () =>
      document.body.classList.contains("hamburger-active")
        ? document.body.classList.remove("hamburger-active")
        : document.body.classList.add("hamburger-active");

    const links = document.querySelectorAll('.menu__mobile a')

    
    links.forEach((link, index) => {
      link.style.setProperty('--delay',`${240 + (index*50)}ms` )
    })
  }
});
