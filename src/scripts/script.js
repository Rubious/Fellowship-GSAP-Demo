import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";

/*/!* The following plugins are Club GSAP perks *!/
import { ScrollSmoother } from "../../node_modules/gsap/ScrollSmoother.js";
import { MorphSVGPlugin } from "../../node_modules/gsap/MorphSVGPlugin.js";
import { ScrollTrigger } from "../../node_modules/gsap/ScrollTrigger.js";*/

gsap.registerPlugin(ScrollSmoother,MorphSVGPlugin,ScrollTrigger);

addEventListener("DOMContentLoaded", (event) => {

    // create the scrollSmoother before your scrollTriggers
    ScrollSmoother.create({
        smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
    });

    gsap.to("#line", {  
        morphSVG: "#squiggle-1",
        duration: 1,
        scrollTrigger: {
            trigger: "#section-1",
            scrub: true,
            start: 'top top',
            //pin:true,
        }
    });

    gsap.fromTo("#line", { 
        morphSVG: "#squiggle-1",
        },{
        morphSVG: "#squiggle-2",
        duration: 1,
        immediateRender:false,
        scrollTrigger: {
            trigger: "#section-2",
            start: 'top top',
            scrub: true,
            //pin:true,
        }
    });

    gsap.fromTo("#line", { 
        morphSVG: "#squiggle-2",
        },{
        morphSVG: "#squiggle-3",
        duration: 1,
        immediateRender:false,
        scrollTrigger: {
            trigger: "#section-3",
            start: 'top top',
            scrub: true,
            //pin:true,
        }
    });

    gsap.fromTo("#line", { 
        morphSVG: "#squiggle-3",
        },{
        morphSVG: "#line",
        duration: 1,
        immediateRender:false,
        scrollTrigger: {
            trigger: "#section-4",
            start: 'top top',
            scrub: true,
            //pin:true,
        }
    });

});
