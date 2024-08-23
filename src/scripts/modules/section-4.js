import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

// create the scrollSmoother before your scrollTriggers
export function section4(){
// Create bespoke timeline for section 4
    //Timeline lasts for the duration of section 4 scroll
    var section4timeline = gsap.timeline({
        scrollTrigger: {
            trigger: "#section-4",
            start: 'top top',
            scrub: true,
            pin:"#section-4",
        },
        defaults:{duration:5, ease:'none'}
    });
    
    //Split the text and add the animation
    var splitHeading = new SplitText("#section-4 h2", {type:"lines"});
    section4timeline.from(splitHeading.lines, {
        duration: 1, 
        y: 100, 
        autoAlpha: 0, 
        stagger: 4
    });

    //Add the squiggle animation and offset -1.5 seconds to overlap with the text
    section4timeline.to('#squiggle-1', {
        morphSVG: "#line",
        duration: 5,
        immediateRender:false,
    }, '-=5');

    section4timeline.set("#circle",{ transformOrigin: "center" });
    section4timeline.from('#circle', {
        scale:0,
        rotation:720,
        duration: 4,
    }, '-=0.5)');
}