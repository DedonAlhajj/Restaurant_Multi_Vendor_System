/* JavaScript Document */
jQuery(document).ready(function() {
    'use strict';
	
    // Get Started
    if(jQuery('.get-started').length > 0){
		var swiperGetStarted = new Swiper('.get-started', {
			speed: 500,
			parallax: true,
			slidesPerView: 1,
			spaceBetween: 10,
			loop: false,
			navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
            },
			pagination: {
                el: ".swiper-pagination",
                clickable: true,
			},
		});
	}
    
    // Team Swiper
	if(jQuery('.demo-swiper').length > 0){
		var swiper4 = new Swiper('.demo-swiper', {
			speed: 1500,
			parallax: true,
			slidesPerView: "auto",
			spaceBetween: 0,
			autoplay: true,
			loop:false,
            navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
            },
			pagination: {
                el: ".swiper-pagination",
                clickable: true,
			},
		});
	}
    
	if(jQuery('.team-swiper-4').length > 0){
		var swiper4 = new Swiper('.team-swiper-4', {
			speed: 1500,
			parallax: true,
			slidesPerView: 'auto',
			spaceBetween: 10,
			loop:false,
		});
	}
    
    if(jQuery('.team-swiper-5').length > 0){
		var swiper4 = new Swiper('.team-swiper-5', {
			speed: 1500,
			parallax: true,
			slidesPerView: 'auto',
			spaceBetween: 10,
			loop:false,
		});
	}
    
    if(jQuery('.categorie-swiper').length > 0){
		var swiper4 = new Swiper('.categorie-swiper', {
			speed: 1500,
			parallax: true,
			slidesPerView: "auto",
			spaceBetween: 15,
			loop:false,
		});
	}
	
    if(jQuery('.offer-swiper').length > 0){
		var swiperGetStarted = new Swiper('.offer-swiper', {
			speed: 500,
			parallax: true,
			slidesPerView: 'auto',
			spaceBetween: 20,
			loop: false,
		});
	}
    
	// Team Swiper 
	if(jQuery('.recomand-swiper').length > 0){
		var swiperGetStarted = new Swiper('.recomand-swiper', {
			speed: 500,
			parallax: true,
			slidesPerView: 1.2,
			spaceBetween: 10,
            centeredSlides: true,
			loop: true,
			navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
            },
			pagination: {
                el: ".swiper-pagination",
                clickable: true,
			},
		});
	}
	
    if(jQuery('.recomanded-swiper').length > 0){
		var swiperGetStarted = new Swiper('.recomanded-swiper', {
			speed: 500,
			parallax: true,
			slidesPerView: 'auto',
			spaceBetween: 20,
			loop: false,
			navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
            },
			pagination: {
                el: ".swiper-pagination",
                clickable: true,
			},
		});
	}
	
	// Team Swiper
	if(jQuery('.team-swiper-2').length > 0){
		var swiper4 = new Swiper('.team-swiper-2', {
			speed: 1500,
			parallax: true,
			slidesPerView: 4,
			spaceBetween: 30,
			loop:true,
			navigation: {
				nextEl: '.swiper-button-next4',
				prevEl: '.swiper-button-prev4',
			},
			breakpoints: {
				1191: {
					slidesPerView: 4,
				},
				991: {
					slidesPerView: 3,
				},
				591: {
					slidesPerView: 2,
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// Clients Swiper
	if(jQuery('.clients-swiper').length > 0){
		var swiper5 = new Swiper('.clients-swiper', {
			speed: 1500,
			parallax: true,
			slidesPerView: 4,
			spaceBetween: 30,
			loop:true,
			navigation: {
				nextEl: '.swiper-button-next5',
				prevEl: '.swiper-button-prev5',
			},
			breakpoints: {
				1191: {
					slidesPerView: 5,
				},
				991: {
					slidesPerView: 3,
				},
				691: {
					slidesPerView: 3,
				},
				591: {
					slidesPerView: 2,
				},
				320: {
					slidesPerView: 2,
				},
			}
		});
	}
	
});

/* Document .ready END */