import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

import { line } from "./modules/line.js";

gsap.registerPlugin(ScrollSmoother, MorphSVGPlugin, ScrollTrigger, SplitText);

addEventListener("DOMContentLoaded", (event) => {
    line(); //build line
});
