import "./bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";

import AOS from "aos";
import "aos/dist/aos.css";
import gsap from "gsap";

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
    gsap.from(".title", { duration: 1.5, opacity: 0, y: -50, ease: "bounce" });
});
