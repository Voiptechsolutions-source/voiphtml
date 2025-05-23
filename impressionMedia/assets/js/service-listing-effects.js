gsap.registerPlugin(ScrollTrigger) ;
//responsive
let mm = gsap.matchMedia();
const tl = gsap.timeline();
/*---------------------Section 2 ------------------*/
mm.add("(min-width: 800px)", () => {

/* Hero Section Home Banner */
tl.from('.hero-section .banner-text-cont', {
    x: '-200%',
    delay:.5,
    duration: .5,
    
}).from('.hero-section .banner-img', {
    x: '200%',
    duration: .5,
    
})

    gsap.from('.services-listing-vimi-section .vimi-cont', {
    scrollTrigger: {
        trigger: '.services-listing-vimi-section',
        scroller:'body',
        scrub: 2,
        start: 'top 80%',
        end: 'top 30%',
    },
    x: '-200%',
   
    delay:1,
    duration: 2,
   opacity:0,
});
gsap.from('.services-listing-section .section-title', {
    scrollTrigger:{
        trigger: '.services-listing-section .section-title',
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
tl.from('.services-listing-section .all-services-list .service-row-1',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-1',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-2',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-2',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-3',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-3',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-4',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-4',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-5',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-5',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-6',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-6',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})
.from('.services-listing-section .all-services-list .service-row-7',{
    scrollTrigger:{
        trigger: '.services-listing-section .all-services-list .service-row-7',
        scroller:'body',
        // scrub:1,
        markers:false,
        start: 'top 80%',
        end: 'top 30%',
        
    },
    y: 50,
    duration: 2,
    opacity:0
})





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