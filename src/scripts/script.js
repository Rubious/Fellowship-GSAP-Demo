import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";

import { line } from "./modules/line.js";

/*/!* The following plugins are Club GSAP perks *!/
import { ScrollSmoother } from "../../node_modules/gsap/ScrollSmoother.js";
import { MorphSVGPlugin } from "../../node_modules/gsap/MorphSVGPlugin.js";
import { ScrollTrigger } from "../../node_modules/gsap/ScrollTrigger.js";*/

gsap.registerPlugin(ScrollSmoother,MorphSVGPlugin,ScrollTrigger);

addEventListener("DOMContentLoaded", (event) => {
    line(); //build line
});
