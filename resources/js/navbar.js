let menuToggle = document.getElementById('menu-toggle'),
	menu = document.getElementById('menu');

menuToggle.addEventListener('click', event => {
  menu.classList.toggle('hidden');
});
let closeMenu = document.getElementById('closeMenu');
closeMenu.addEventListener('click', event => {
	menu.classList.toggle('hidden');
	
});