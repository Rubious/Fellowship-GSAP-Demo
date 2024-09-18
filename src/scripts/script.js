import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

import { sattelites } from "./modules/sattelites.js";
import { section1 } from "./modules/section-1.js";
import { section3 } from "./modules/section-3.js";
import { section4 } from "./modules/section-4.js";

gsap.registerPlugin(ScrollSmoother, MorphSVGPlugin, ScrollTrigger, SplitText);

addEventListener("DOMContentLoaded", (event) => {

    //Smooth scrolling for animation
    ScrollSmoother.create({
        smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
    });

    sattelites();

    section1(); //build section 1
    section3(); //build section 3 animations
    section4(); //build section 4 animations
});
