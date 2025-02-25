document.addEventListener('DOMContentLoaded', () => {
  const burgerIcon = document.querySelector('#burger-icon');
  const navMenu = document.querySelector('#nav-menu');

  if (burgerIcon && navMenu) {
    // Toggle menu and scrolling
    function toggleMenu() {
      navMenu.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    }

    // Open/close menu when clicking the icon
    burgerIcon.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleMenu();
      burgerIcon.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
      }
    });

    // Handle clicks on menu links
    const menuItems = navMenu.querySelectorAll('li > a');
    console.log(menuItems);
    menuItems.forEach((link) => {
      if (link.classList.contains('dropdown-only')) {
        link.addEventListener('click', () => {
          link.classList.toggle('active');
        });
      } else {
        link.addEventListener('click', () => {
          toggleMenu();
        });
      }
    });
  }
});
