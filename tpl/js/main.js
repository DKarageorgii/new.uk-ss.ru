$(document).ready(function(){
  $('.slide-clients').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    autoplay:true,
    navText: ["<img src='tpl/img2/icon/arrow-left.svg'>","<img src='tpl/img2/icon/arrow-right.svg'>"],
    navContainer: '#v-nav',
    dotsContainer: '#v-navdot',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
  })
  $('.v-slide-license').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    autoplay:true,
    navText: ["<img src='tpl/img2/icon/arrow-left.svg'>","<img src='tpl/img2/icon/arrow-right.svg'>"],
    navContainer: '#v-nav-license',
    dots:false,
    lazyLoad:true,
    autoWidth:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
  })
});