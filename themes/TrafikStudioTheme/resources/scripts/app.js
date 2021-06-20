/**
 * External Dependencies
 */
// import 'jquery';

// $(document).ready(() => {
//   // console.log('Hello world');

// });


(function() {
  

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




})();