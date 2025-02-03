document.addEventListener('DOMContentLoaded', () => {
  const dropdownButtons = document.querySelectorAll('.dropdown-only');

  dropdownButtons.forEach((button) => {
    button.addEventListener('click', function (event) {
      event.preventDefault();

      const isActive = this.classList.contains('active');

      closeAllDropdowns();
      if (!isActive) {
        this.classList.add('active');
      }
    });
  });

  document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown-only')) {
      closeAllDropdowns();
    }
  });

  function closeAllDropdowns() {
    dropdownButtons.forEach((button) => {
      button.classList.remove('active');
    });
  }
});

// document.addEventListener('DOMContentLoaded', () => {
// const burger = document.querySelector('.burger');
// const burgerMenuContent = document.querySelector('.burger-menu-content');

// burger.addEventListener('click', () => {
//   burger.classList.toggle('active');
//   burgerMenuContent.classList.toggle('active');
//   document.body.classList.toggle('no-scroll');
// });
// });
