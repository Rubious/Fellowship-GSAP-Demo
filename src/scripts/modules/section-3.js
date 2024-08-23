import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

// create the scrollSmoother before your scrollTriggers
export function section3(){
    // Main timeline, animate squiggle to lesser squiggle at section 3
    gsap.to("#squiggle-1", {  
        morphSVG: "#squiggle-2",
        duration: 1,
        scrollTrigger: {
            trigger: "#section-3",
            scrub: true,
            start: 'top top',
            //pin:"#section-3",
        }
    });
}