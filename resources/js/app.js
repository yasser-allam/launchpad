import "./bootstrap";

import intlTelInput from "intl-tel-input";
window.intlTelInput = intlTelInput;

import WebsiteFunctions from "./functions.js";
window.WebsiteFunctions = new WebsiteFunctions();

import AOS from "aos";

AOS.init();
