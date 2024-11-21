import "./bootstrap";

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
window.Fancybox = Fancybox;

// import { Carousel } from "@fancyapps/ui/dist/carousel/carousel.esm.js";
// import "@fancyapps/ui/dist/carousel/carousel.css";

import intlTelInput from "intl-tel-input";
window.intlTelInput = intlTelInput;

import WebsiteFunctions from "./functions.js";
window.WebsiteFunctions = new WebsiteFunctions();

// import AOS from "aos";

// AOS.init();

import "youtube-background";

// import { scroll } from "motion";
// import { animate } from "motion";

import { inView, animate, scroll } from "motion";

(function () {
    const items = document.querySelectorAll(".homepage-cards li");
    // alert(items.length * (items[0].clientWidth + 55));
    scroll(
        animate(
            ".homepage-cards ul",
            {
                transform: [
                    "none",
                    `translateX(${
                        window.innerWidth -
                        items.length * (items[0].clientWidth + 49)
                    }px)`,
                ],
            },
            {
                ease: "linear",
            }
        ),
        {
            target: document.querySelector(".homepage-cards"),
        }
    );

    inView(".effect1", ({ target }) => {
        animate(
            target,
            {
                opacity: [0, 1],
                x: [40, 0],
                filter: ["blur(10px)", "blur(0px)"],
            },
            {
                duration: 0.5,
                easing: [0.17, 0.55, 0.55, 1],
            }
        );
    });

    inView(".effect2", ({ target }) => {
        animate(
            target,
            {
                opacity: [0, 1],
                y: [40, 0],
                filter: ["blur(10px)", "blur(0px)"],
            },
            {
                duration: 0.5,
                easing: [0.17, 0.55, 0.55, 1],
            }
        );
    });
})();

// CAROUSEL

// <!doctype html>
// <html lang="en">
//   <head>
//     <meta charset="UTF-8" />
//     <meta name="viewport" content="width=device-width" />
//     <link
//       rel="stylesheet"
//       href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"
//     />
//     <link
//       rel="stylesheet"
//       href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.css"
//     />
//     <style>
//       #myCarousel {
//         --f-carousel-spacing: 50px !important;
//         --f-carousel-slide-width: calc((100% - 40px) / 3) !important;
//         --f-progress-color: #ff3520;
//       }

//       #myCarousel .f-carousel__slide {
//         padding: 50px;
//         background: #eee;
//       }
//     </style>
//   </head>
//   <body>
//     <div>
//       <div class="f-carousel" id="myCarousel">
//         <div class="f-carousel__slide">1</div>
//         <div class="f-carousel__slide">2</div>
//         <div class="f-carousel__slide">3</div>
//         <div class="f-carousel__slide">4</div>
//         <div class="f-carousel__slide">5</div>
//       </div>
//     </div>
//     <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
//     <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.umd.js"></script>
//     <script>
//       const container = document.getElementById("myCarousel")
//       const options = {
//         Autoplay: {
//           timeout: 1000,
//         },
//       }

//       new Carousel(container, options, { Autoplay })
//     </script>
//   </body>
// </html>
