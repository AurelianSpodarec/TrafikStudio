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
        closeMenuButton = document.querySelector('.js-closeMenuButton');

        function openMenu() {
			body.classList.add("is-active");
			mobileMenu.classList.add('is-active');
        }

        function closeMenu() {
			body.classList.remove("is-active");
			mobileMenu.classList.remove('is-active');
        }

        openMenuButton.addEventListener('click', openMenu);
        closeMenuButton.addEventListener('click', closeMenu);




})();