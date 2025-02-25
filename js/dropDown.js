document.addEventListener('DOMContentLoaded', () => {
  const dropdownButtons = document.querySelectorAll('.dropdown-only');

  dropdownButtons.forEach((button) => {
    button.addEventListener('click', function () {
      const isActive = this.classList.contains('active');

      closeAllDropdowns();
      if (!isActive) {
        this.classList.add('active');
      }
    });
  });

  document.addEventListener('click', (event) => {
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
