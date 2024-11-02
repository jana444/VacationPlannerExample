//used GSAP library for animation of HTML element, i.e. image of stamp on the landing page
let window_current_width = 200;
//slides image
gsap.from(".stamp",{duration:4,y:30,x: window_current_width,ease:"sine"});
//rotates image
gsap.to(".stamp", { rotation: 360, duration: 2, ease: "bounce.out" });