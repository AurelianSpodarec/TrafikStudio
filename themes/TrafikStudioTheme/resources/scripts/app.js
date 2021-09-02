/**
 * External Dependencies
 */
// import 'jquery';

// $(document).ready(() => {
//   // console.log('Hello world');

// });

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles



(function() {


	
	// You can also pass an optional settings object
	// below listed default settings
	AOS.init({
		duration: 1200,
	  })
	  

  	const body = document.querySelector('.js-offcanvas-container'),
        mobileMenu = document.querySelector('.js-offcanvas-menu'),
        openMenuButton = document.querySelector('.js-openMenuButton'),
        closeMenuButton = document.querySelector('.js-closeMenuButton'),
		burgerIconOpen = document.querySelector('.js-burger-icon');

        function openMenu() {
			body.classList.add("is-active");
			mobileMenu.classList.add('is-active');
			closeMenuButton.classList.add('is-active');
			burgerIconOpen.classList.add('is-active');
        }

        function closeMenu() {
			mobileMenu.classList.remove('is-active');
			closeMenuButton.classList.remove('is-active');
			burgerIconOpen.classList.remove('is-active');
			body.classList.remove('is-active');
				 
        }

        openMenuButton.addEventListener('click', openMenu);
        closeMenuButton.addEventListener('click', closeMenu);

	 
	 class LazyLoad {
			constructor(element, options) {
			  this.options = {
				selector: ['data-src'],
				rootMargin: '550px 0px',
				threshold: 0.01,
				...options,
			  };
			  this.element = element;
			  this.resources = document.querySelectorAll('[data-src]');
		   
			  this.bindEvents();
			  this.init();
			}
		   
			bindEvents() {
			  this._lazyLoadAsset = this._lazyLoadAsset.bind(this);
			}
		   
			init() {
			  const assetsObserver = new IntersectionObserver((entries, assetsObserver) => {
				entries.filter(entry => entry.isIntersecting).forEach(entry => {
				  this._lazyLoadAsset(entry.target);
				  assetsObserver.unobserve(entry.target);
				});
			  }, this.options);
			  this.resources.forEach(resource => {
				assetsObserver.observe(resource);
			  });
			}
			_lazyLoadAsset(asset) {
			  const src = asset.getAttribute(this.options.selector);
			  if (!src) {
				return;
			  }
			  asset.src = src;
			}
		   }

		   new LazyLoad();




		   
		

	// const siteHeader = document.querySelector('.js-header'),
	// 	siteHeaderHeight = siteHeader && siteHeader.offsetHeight,
	// 	prevScroll = 0;

	// 	function stickyNav() {
	// 		// if (window.scrollY >= siteHeaderHeight) {
	// 		if (window.scrollY >= 1) {
	// 			siteHeader && siteHeader.classList.add('is-sticky');
	// 		} else {
	// 			siteHeader && siteHeader.classList.remove('is-sticky');
	// 		}
	// 	}

	// 	function showNav() {
	// 		var currentScroll = window.pageYOffset;

	// 		if (currentScroll < prevScroll) {
	// 			siteHeader && siteHeader.classList.add('sticky-show');
	// 		} else {
	// 			siteHeader && siteHeader.classList.remove('sticky-show');
	// 		}
	// 		prevScroll = currentScroll;
	// 	}

	// 	window.addEventListener('scroll', showNav);
	// 	window.addEventListener('scroll', stickyNav);

 


















	 


})();