document.addEventListener('DOMContentLoaded', function(){
    const menuIcone = document.querySelector('.menu-icone');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    menuIcone.addEventListener('click', () =>{
        dropdownMenu.classList.toggle('menu-open');
    });

});