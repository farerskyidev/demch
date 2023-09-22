import "./app/gutenberg";
import Swiper from "swiper/swiper-bundle";
import { gsap } from "./app/gsap/gsap";
import { ScrollTrigger } from "./app/gsap/ScrollTrigger";
import { isEven, isjQuery, Coordinates, videoResize } from "./app/functions";

gsap.registerPlugin(ScrollTrigger);

(function ($) {
    
    // Sticky header
    let $header = $('.header')

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 0) {
            $header.addClass('scroll-active');
        } else {
            $header.removeClass('scroll-active');
        }
    });

    // Mobile header
 
    $(".header__burger").on('click', function () { 
        if ($(this).hasClass('active')) { 
            $('.header__wrap').removeClass('active'); 
          
            $('body').removeClass('modal-open'); 
            $(this).removeClass('active'); 
        } else { 
            $('.header__wrap').addClass('active'); 
           
            $('body').addClass('modal-open'); 
            $(this).addClass('active'); 
        } 
    });

    // Testimonials slider
    var testimonialSlider = new Swiper(".posts__items.mobile", { 
        loop: true,
        slidesPerView: "auto", 
        centeredSlides: true,
        speed: 700,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            767: {
                centeredSlides: false,
                autoplay: false,
            }
        },
    });

})(jQuery);


