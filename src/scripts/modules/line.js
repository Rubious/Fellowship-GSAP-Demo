import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";

// create the scrollSmoother before your scrollTriggers
export function line(){
    
    ScrollSmoother.create({
        smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
    });

    gsap.to("#squiggle-1", {  
        morphSVG: "#squiggle-2",
        duration: 1,
        scrollTrigger: {
            trigger: "#section-3",
            scrub: true,
            start: 'top top',
            pin:"#section-3",
        }
    });

    gsap.to('#squiggle-1', {
        morphSVG: "#squiggle-3",
        duration: 1,
        immediateRender:false,
        scrollTrigger: {
            trigger: "#section-4",
            start: 'top top',
            scrub: true,
            pin:"#section-4",
        }
    });

    gsap.to("#squiggle-1", {
        morphSVG: "#line",
        duration: 1,
        immediateRender:false,
        scrollTrigger: {
            trigger: "#section-5",
            start: 'top top',
            scrub: true,
            pin:"#section-5",
        }
    });

}