import { gsap } from "../../node_modules/gsap/index.js";

/* The following plugins are Club GSAP perks */
import { ScrollSmoother } from "../../node_modules/gsap/ScrollSmoother.js";
import { MorphSVGPlugin } from "../../node_modules/gsap/MorphSVGPlugin.js";
import { ScrollTrigger } from "../../node_modules/gsap/ScrollTrigger.js";

gsap.registerPlugin(ScrollSmoother,MorphSVGPlugin,ScrollTrigger);

// create the scrollSmoother before your scrollTriggers
ScrollSmoother.create({
    smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
    effects: true, // looks for data-speed and data-lag attributes on elements
    smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
});

gsap.to("#line", {  
    morphSVG: "#curve",
    scrollTrigger: {
        trigger: "#section-1",
        scrub: true,
        pin:true,
    }
});

gsap.fromTo("#line", { 
    morphSVG: "#curve",
    },{
        morphSVG: "#curve-2",
    scrollTrigger: {
        trigger: "#section-2",
        scrub: true,
        pin:true,
    }
});

gsap.fromTo("#line", { 
    morphSVG: "#curve-2",
    },{
        morphSVG: "#curve-3",
    scrollTrigger: {
        trigger: "#section-3",
        scrub: true,
        pin:true,
    }
});

gsap.fromTo("#line", { 
    morphSVG: "#curve-3",
    },{
        morphSVG: "#line",
    scrollTrigger: {
        trigger: "#section-4",
        scrub: true,
        pin:true,
    }
});