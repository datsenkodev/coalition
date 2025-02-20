document.addEventListener('DOMContentLoaded', function () {
  const burgerIcon = document.querySelector('#burger-icon');
  const navMenu = document.querySelector('#nav-menu');

  if (burgerIcon && navMenu) {
    // Toggle menu and scrolling
    function toggleMenu() {
      navMenu.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    }

    // Open/close menu when clicking the icon
    burgerIcon.addEventListener('click', function (e) {
      e.stopPropagation();
      toggleMenu();
      burgerIcon.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (e) {
      if (!navMenu.contains(e.target) && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
      }
    });

    // Handle clicks on menu links
    const menuItems = navMenu.querySelectorAll('li');

    menuItems.forEach((link) => {
      if (link.classList.contains('dropdown-only')) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();

          link.classList.contains('active')
            ? link.classList.add('active')
            : link.classList.remove('active');
        });
      } else {
        link.addEventListener('click', function () {
          toggleMenu();
        });
      }
    });
  }
});
