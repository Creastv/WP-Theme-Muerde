jQuery(document).ready(function() {
    var owl = jQuery(".posts");
    owl.owlCarousel({

        // lazyLoad: true,
        margin: 15,
        loop: true,
        // center: true,
        // autoplay: 9000, //Set AutoPlay to 3 seconds
        nav: true,
        navContainer: '.owl-nav-cursos',
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 1,
                
            },
            1000: {
                items: 2
            },
            1400: {
                items: 2
            },
            1600: {
                items: 2
            }
        }
    });
});