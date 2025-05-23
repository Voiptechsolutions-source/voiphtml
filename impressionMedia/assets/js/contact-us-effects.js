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
    
}).from('.hero-section .banner-form', {
    x: '200%',
    duration: .5,
    
})

    gsap.from('.contact-section-2 .contact-cta', {
    scrollTrigger: {
        trigger: '.contact-section-2 .contact-cta',
        scroller:'body',
        scrub: 2,
        start: 'top 80%',
        end: 'top 30%',
    },
    x: '-200%',
   
    delay:1,
    duration: 2,
   
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
gsap.from('.section-3 .why-us-img1', {
    scrollTrigger:{
        trigger: '.section-3 .section-why-us',
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
gsap.from('.section-3 .why-us-content1', {
    scrollTrigger:{
        trigger: '.section-3 .section-why-us',
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


/*---------------------Section 5 ------------------*/
gsap.from('.section-5 .our-work-cta', {
    scrollTrigger:{
        trigger: '.section-5 .our-work-cta',
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
/*---------------------Section 5-5 ------------------*/
gsap.from('.section-5-5 .section-title', {
    scrollTrigger:{
        trigger: '.section-5-5',
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
gsap.from('.section-5-5 .time-year', {
    scrollTrigger:{
        trigger: '.section-5-5 ._line-item',
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
gsap.from('.section-5-5 .timeline-list', {
    scrollTrigger:{
        trigger: '.section-5-5 ._line-item',
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

});