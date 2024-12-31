const dropdownMenus = document.querySelectorAll('.dropdown-menu');

dropdownMenus.forEach(menu => {
  const dropdown = menu.parentElement;

  dropdown.addEventListener('mouseover', () => {
    menu.style.display = 'block';
  });

  dropdown.addEventListener('mouseout', () => {
    menu.style.display = 'none';
  });
});