gsap.registerPlugin(ScrollTrigger) ;
//responsive
let mm = gsap.matchMedia();
/*---------------------Section 2 ------------------*/
mm.add("(min-width: 800px)", () => {

/* Hero Section Home Banner */
gsap.from('.hero-section .banner-text-cont', {
    x: '-200%',
    delay:.5,
    duration: 1,
    
});
gsap.from('.hero-section .banner-img', {
    x: '200%',
    delay:.5,
    duration: 1,
    
});

    gsap.from('.section-2 .section-title', {
    scrollTrigger: {
        trigger: '.section-2 .section-title',
        scroller:'body',
        scrub: 2,
        start: 'top 60%',
        end: 'top 30%',
    },
    y: -200,
   
    delay:1,
    duration: 2,
    scale:0
});
gsap.from('.section-2 .feats-list', {
    scrollTrigger:{
        trigger: '.section-2 .feats-list',
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
/*---------------------Section 3 ------------------*/
gsap.from('.section-3 .why-us-img', {
    scrollTrigger:{
        trigger: '.section-3',
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
gsap.from('.section-3 .content_img', {
    scrollTrigger:{
        trigger: '.section-3',
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
gsap.from('.section-3 ._content', {
    scrollTrigger:{
        trigger: '.section-3',
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
/*---------------------Section 3.5 ------------------*/
gsap.from('.section-3-5 .vimi-left', {
    scrollTrigger:{
        trigger: '.section-3-5',
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
gsap.from('.section-3-5 .vimi-right', {
    scrollTrigger:{
        trigger: '.section-3-5',
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
// gsap.from('.section-3 .stories-tabs', {
//     scrollTrigger:{
//         trigger: '.section-3 .stories-tabs',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 60%',
//         end: 'top 40%',
        
//     },
//     delay:1,
//     duration: 2,
//     x:'-200%'
// }
// )
// gsap.from('.section-3 .stories-content', {
//     scrollTrigger:{
//         trigger: '.section-3 .stories-content',
//         scroller:'body',
//         scrub:2,
//         markers:false,
//         start: 'top 70%',
//         end: 'top 50%',
        
//     },
//     delay:1,
//     duration: 2,
//     x:'150%'
// }
// )
/*---------------------Section 4 ------------------*/
gsap.from('.section-4 .section-title', {
    scrollTrigger:{
        trigger: '.section-4',
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
gsap.from('.section-4 .all-chalanges', {
    scrollTrigger:{
        trigger: '.section-4 .all-chalanges',
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
// gsap.from('.section-4 .why-us-right', {
//     scrollTrigger:{
//         trigger: '.section-4 .why-us-right',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 90%',
//         end: 'top 30%',
        
//     },
//     delay:1,
//     duration: 2,
//     opacity:0,
//     x:'200%',
// }
// );
/*---------------------Section 5 ------------------*/
gsap.from('.section-5 .our-features-home', {
    scrollTrigger:{
        trigger: '.section-5 .our-features-home',
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
/*---------------------Section 6 ------------------*/
gsap.from('.section-6 .cta-box', {
    scrollTrigger:{
        trigger: '.section-6 ',
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
gsap.from('.section-6 .section-title', {
    scrollTrigger:{
        trigger: '.section-6 .section-title',
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
// gsap.from('.section-6 .service-tab-pills', {
//     scrollTrigger:{
//         trigger: '.section-6 .service-tab-pills',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 90%',
//         end: 'top 30%',
        
//     },
//     delay:1,
//     duration: 2,
//     opacity:0,
//     x:'-200%',
// }
// );
// gsap.from('.section-6 .service-tabs-content', {
//     scrollTrigger:{
//         trigger: '.section-6 .service-tabs-content',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 90%',
//         end: 'top 30%',
        
//     },
//     delay:1,
//     duration: 2,
//     opacity:0,
//     x:'200%',
// }
// );
/*---------------------Section 6.5 ------------------*/
gsap.from('.section6-5 .section-title', {
    scrollTrigger:{
        trigger: '.section6-5 ',
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
gsap.from('.section6-5 .chalanges-cont', {
    scrollTrigger:{
        trigger: '.section6-5 .chalanges-cont',
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
/*---------------------Section 6.6 ------------------*/
gsap.from('.section6-6 .section-title', {
    scrollTrigger:{
        trigger: '.section6-6 ',
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
gsap.from('.section6-6 .pay-as-services-tabs', {
    scrollTrigger:{
        trigger: '.section6-6 .pay-as-services-tabs',
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
/*---------------------Section 7 ------------------*/
gsap.from('.section-7 .testi-title-section', {
    scrollTrigger:{
        trigger: '.section-7',
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
gsap.from('.section-7 .testim-carousel', {
    scrollTrigger:{
        trigger: '.section-7 .testim-carousel',
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
/*---------------------Section 8 ------------------*/
// gsap.from('.section-8 .clients-title-section', {
//     scrollTrigger:{
//         trigger: '.section-8',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 90%',
//         end: 'top 30%',
        
//     },
//     delay:1,
//     duration: 2,
//     opacity:0,
//     y:'-200%',
// }
// );
// gsap.from('.section-8 .comp-logos', {
//     scrollTrigger:{
//         trigger: '.section-8 ',
//         scroller:'body',
//         scrub:1,
//         markers:false,
//         start: 'top 90%',
//         end: 'top 30%',
        
//     },
//     delay:1,
//     duration: 2,
//     opacity:0,
//     x:'200%',
// }
// );
/*---------------------Section 9 ------------------*/
gsap.from('.section-9 .section-title', {
    scrollTrigger:{
        trigger: '.section-9',
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
gsap.from('.section-9 .blog-carousel', {
    scrollTrigger:{
        trigger: '.section-9 .blog-carousel',
        scroller:'body',
        scrub:1,
        markers:false ,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'200%',
}
);
/*---------------------Section 10 ------------------*/
gsap.from('.section-10 .section-title2', {
    scrollTrigger:{
        trigger: '.section-10 .section-title2',
        scroller:'body',
        scrub:1,
        markers:false ,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'-200%',
}
);
gsap.from('.section-10 .accordion', {
    scrollTrigger:{
        trigger: '.section-10 .accordion',
        scroller:'body',
        scrub:1,
        markers:false ,
        start: 'top 90%',
        end: 'top 30%',
        
    },
    delay:1,
    duration: 2,
    opacity:0,
    x:'200%',
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