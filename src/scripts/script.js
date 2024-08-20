import { gsap } from "../../node_modules/gsap/index.js";

/* The following plugins are Club GSAP perks */
import { ScrollSmoother } from "../../node_modules/gsap/ScrollSmoother.js";
import { MorphSVGPlugin } from "../../node_modules/gsap/MorphSVGPlugin.js";

gsap.registerPlugin(ScrollSmoother,MorphSVGPlugin);

var morph = gsap.to("#line", { duration: 4, ease: "power1.inOut", morphSVG: "#curve", repeat:1, yoyo:true, repeatDelay:0.2 });

document.getElementById("play").onclick = function(){
    morph.restart(true);
}