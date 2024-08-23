import { gsap } from "gsap/dist/gsap";
import { ScrollSmoother } from "gsap/dist/ScrollSmoother";
import { MorphSVGPlugin } from "gsap/dist/MorphSVGPlugin";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { SplitText } from "gsap/dist/SplitText";

// create the scrollSmoother before your scrollTriggers
export function sattelites(){

    gsap.set('#s-1', {
        position: 'absolute',
        top: 40,
        left: '50%',
        x: -25
    });

    gsap.to('#s-1', {
        top: 180,
        duration: 5,
        scrollTrigger: {
            trigger: "#section-3",
            scrub: true,
            start: 'top top',
        }
    });

    var path = MorphSVGPlugin.convertToPath("#s-1 rect");
    var pathTarget = MorphSVGPlugin.convertToPath("#s-1 ellipse");

    gsap.to(path, {
        fill: "#00a59d",
        duration: 5,
        morphSVG: pathTarget,
        scrollTrigger: {
            trigger: "#section-4",
            scrub: true,
            start: 'top top',
        }
    });
}