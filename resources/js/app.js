import "./bootstrap";

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
    scroll(
        animate(
            ".homepage-cards ul",
            {
                transform: [
                    "none",
                    `translateX(${
                        window.innerWidth - items.length * items[0].clientWidth
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
