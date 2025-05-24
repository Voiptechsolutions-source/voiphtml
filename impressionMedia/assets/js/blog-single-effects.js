gsap.registerPlugin(ScrollTrigger) ;
//responsive
let mm = gsap.matchMedia();
const tl = gsap.timeline();
/*---------------------Section 2 ------------------*/
mm.add("(min-width: 800px)", () => {

/* Hero Section Home Banner */
tl.from('.blog-detail-section .blog-detail-left', {
    x: '-200%',
    duration: .5,
    
}).from('.blog-detail-section .blog-detail-right', {
    x: '200%',
    delay:0,
    duration: .5,
    
})

    gsap.from('.blog-listing-section .section-title', {
    scrollTrigger: {
        trigger: '.blog-listing-section',
        scroller:'body',
        scrub: 2,
        start: 'top 80%',
        end: 'top 30%',
    },
    y: -200,
   
    delay:1,
    duration: 2,
   opacity:0,
});
gsap.from('.blog-listing-section .all-blogs', {
    scrollTrigger:{
        trigger: '.blog-listing-section .all-blogs',
        scroller:'body',
        scrub: 1,
        markers: false,
        start:'top 80%',
        end: 'top 60%',
        
    },
    delay:1,
    duration: 2,
   x:'-200%',
    
}
);





/*---------------------Section 10.5 ------------------*/
gsap.from('.section10-5 .section-title', {
    scrollTrigger:{
        trigger: '.section10-5 ',
        scroller:'body',
        scrub:1,
        markers:false,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    y:'-200%',
}
);
gsap.from('.section10-5 .all-biz-locations', {
    scrollTrigger:{
        trigger: '.section10-5 .all-biz-locations',
        scroller:'body',
        scrub:1,
        markers:false,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'-200%',
}
);
/*---------------------Section 11 ------------------*/
gsap.from('.section-11 .sec-11-left', {
    scrollTrigger:{
        trigger: '.section-11 ',
        scroller:'body',
        scrub:1,
        markers:false,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'-200%',
}
);
gsap.from('.section-11 .sec-11-right', {
    scrollTrigger:{
        trigger: '.section-11',
        scroller:'body',
        scrub:1,
        markers:false,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'200%',
}
);
});