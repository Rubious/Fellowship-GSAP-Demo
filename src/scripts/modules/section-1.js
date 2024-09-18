import { gsap } from "gsap/dist/gsap";
import { SplitText } from "gsap/dist/SplitText";
import { config } from "./config.js";

// create the scrollSmoother before your scrollTriggers
export function section1(){
    //Split the text and add the animation
    var splitHeading = new SplitText("#section-1 h2", { type:"lines" });
    gsap.from(splitHeading.lines, config.text.heading);
}