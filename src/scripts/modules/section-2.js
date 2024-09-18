import { gsap } from "gsap/dist/gsap";
import { SplitText } from "gsap/dist/SplitText";

// create the scrollSmoother before your scrollTriggers
export function section2(){
    //Split the text and add the animation
    var splitHeading = new SplitText("#section-2 h2", { type:"lines" });
    gsap.from(splitHeading.lines, {
        duration: 0.8, 
        opacity: 0,
        y: 50, 
        autoAlpha: 0, 
        stagger: 0.2
    });
}