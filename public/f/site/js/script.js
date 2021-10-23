$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
            $('.logo1').addClass('d-none');
            $('.logo2').addClass('d-block');
            $('.sticky').addClass('d-none');
            $(".sticky").removeClass("d-flex").addClass("d-none");
        } else {
            $('.logo1').removeClass('d-none');
            $('.logo2').removeClass('d-block');
            $('.navbar').removeClass('active');
            $('.sticky').removeClass('d-none');
            $(".sticky").removeClass("d-none").addClass("d-flex");
        }
    });
});

$(document).ready(function() {
    $('.home_slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplayTimeout:5000,
        dots: false,
        nav: true,
        mouseDrag: true,
        autoplay: true,
        animateOut: 'hinge',

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



    jQuery(".slidercards").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 3
            },

            1024: {
                items: 4
            },

            1366: {
                items: 4
            }
        }
    });









//resseta anum slideri jamanaky u sksuma noric hashvel
    $('.owl-carousel').on('touchstart', 'img', function(e) {
        $(this).closest('.owl-carousel').trigger('stop.owl.autoplay');
    });
    $('.owl-carousel').on('touchend', 'img', function(e) {
        $(this).closest('.owl-carousel').trigger('play.owl.autoplay');
    });
    $('.owl-carousel').on('click', '.owl-dots, .owl-nav', function(e) {
        $(this).closest('.owl-carousel').trigger('stop.owl.autoplay');
        $(this).closest('.owl-carousel').trigger('play.owl.autoplay');
    });
});

$('.map').maphilight({ fill: true,
    fillColor: '000000',
    fillOpacity: 0.2,
    stroke: true,
    strokeColor: '00000058',
    strokeOpacity:3,
    strokeWidth: 3,
    fade: true,
    alwaysOn: false,
    neverOn: false,
    groupBy: false,
    wrapClass: true,
    shadow: true,
    shadowX: 10,
    shadowY: 10,
    shadowRadius: 6,
    shadowColor: '000000',
    shadowOpacity: 0.8,
    shadowPosition: 'outside',
    shadowFrom: false});
!function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
imageMapResize();
