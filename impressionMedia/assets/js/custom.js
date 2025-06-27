$(document).ready(function(){
  $('.testim-carousel').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:true,
      autoplay:true,
      autoplayTimeout:5000,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
  $('.blog-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
  $('.comp-logos').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
});
});

/* To TOP Button */
// Get the button:
let mybutton = document.getElementById("toTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

// gsap.registerPlugin(ScrollSmoother) ;
// ScrollSmoother.create({
//     smooth: 1,
//     effects: true,
//   });

/* BS Menus Dropdown */
window.addEventListener("resize", function() {
            "use strict"; 
            // window.location.reload(); 
          });
         document.addEventListener("DOMContentLoaded", function()
         {
         /////// Prevent closing from click inside dropdown
         document.querySelectorAll('.dropdown-menu').forEach(function(element)
         {
                 element.addEventListener('click', function(e)
                 {
                         e.stopPropagation();
                 });
         })
         // make it as accordion for smaller screens
         if (window.innerWidth < 992)
         {
                 // close all inner dropdowns when parent is closed
                 document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown)
                 {
                         everydropdown.addEventListener('hidden.bs.dropdown', function()
                         {
                                 // after dropdown is hidden, then find all submenus
                                 this.querySelectorAll('.submenu')
                                         .forEach(function(everysubmenu)
                                         {
                                                 // hide every submenu as well
                                                 everysubmenu
                                                         .style
                                                         .display =
                                                         'none';
                                         });
                         })
                 });
                 document.querySelectorAll('.dropdown-menu a').forEach(function(element)
                 {
                         element.addEventListener('click', function(e)
                         {
                                 let nextEl = this.nextElementSibling;
                                 if (nextEl && nextEl.classList
                                         .contains('submenu'))
                                 {
                                         // prevent opening link if link needs to open dropdown
                                         e.preventDefault();
                                         console.log(nextEl);
                                         if (nextEl.style.display ==
                                                 'block')
                                         {
                                                 nextEl.style.display =
                                                         'none';
                                         }
                                         else
                                         {
                                                 nextEl.style.display =
                                                         'block';
                                         }
                                 }
                         });
                 })
         }
         // end if innerWidth
         });
         // DOMContentLoaded  end

         //sticky-section
        //   window.onload = function() {
        //     const stickySection = document.getElementById('myStickySection');
        //     const stickyOffset = stickySection.offsetTop; // Get the initial position of the section

        //     window.onscroll = function() {
        //         if (window.pageYOffset >= stickyOffset) {
        //             stickySection.classList.add('sticky-sidebar');
        //         } else {
        //             stickySection.classList.remove('sticky-sidebar');
        //         }
        //     };
        // };
 //Scroll Spy
 document.addEventListener('DOMContentLoaded', function() {
            const sidebarLinks = document.querySelectorAll('#v-pills-tab a.nav-link');
            const sections = document.querySelectorAll('.conent-section-blog');

            // Smooth scroll functionality
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    const headerOffset = 120;
                    const targetPosition = targetSection.getBoundingClientRect().top;
                    const offsetPosition = targetPosition + window.pageYOffset - headerOffset;
                    //targetSection.scrollIntoView({ behavior: 'smooth' });
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    })
                });
            });

            // Scrollspy functionality
            window.addEventListener('scroll', function() {
                let currentSection = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (window.scrollY >= sectionTop + sectionHeight * 0.021) {
                        currentSection = section.getAttribute('id');
                    }
                });

                sidebarLinks.forEach(link => {
                    link.classList.remove('active');
                    const href = link.getAttribute('href').substring(1);
                    if (href === currentSection) {
                        link.classList.add('active');
                    }
                });
            });

            // Trigger scroll event to set initial active link
            window.dispatchEvent(new Event('scroll'));
        });