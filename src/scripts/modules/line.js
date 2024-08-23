import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

// create the scrollSmoother before your scrollTriggers
export function line(){
    
    //Smooth scrolling for animation
    ScrollSmoother.create({
        smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
    });

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

    

}