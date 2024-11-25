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

import { inView, animate, scroll } from "motion";

(function () {
    const items = document.querySelectorAll(".homepage-cards li");
    // alert(items.length * (items[0].clientWidth + 55));
    // alert(items[0].clientWidth);

    inView(".rtl-effect", ({ target }) => {
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

    inView(".ltr-effect", ({ target }) => {
        animate(
            target,
            {
                opacity: [0, 1],
                x: [-40, 0],
                filter: ["blur(10px)", "blur(0px)"],
            },
            {
                duration: 0.5,
                easing: [0.17, 0.55, 0.55, 1],
            }
        );
    });

    inView(".dtu-effect", ({ target }) => {
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

    inView(".utd-effect", ({ target }) => {
        animate(
            target,
            {
                opacity: [0, 1],
                y: [-40, 0],
                filter: ["blur(10px)", "blur(0px)"],
            },
            {
                duration: 0.5,
                easing: [0.17, 0.55, 0.55, 1],
            }
        );
    });
    if (items[0]) {
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
    }

    inView(".success-rotate-effect", ({ target }) => {
        animate(target, { rotateX: [-60, 0], y: [0, -700] }, { duration: 1.5 });
    });
})();
