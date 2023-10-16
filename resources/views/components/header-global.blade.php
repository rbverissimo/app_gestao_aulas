<header class="header-global">
    <div class="container-menu">
        <div class="menu-icone">
            <div class="barra"></div>
            <div class="barra"></div>
            <div class="barra"></div>
        </div>
        <div class="dropdown-menu">
            <ul>
                <li><a href="{{route('site.home')}}">Home</a></li>
                <li><a href="{{route('site.painel')}}">Painel</a></li>
            </ul>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function(){
    const menuIcone = document.querySelector('.menu-icone');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    menuIcone.addEventListener('click', () =>{
        dropdownMenu.classList.toggle('menu-open');
    });

});
</script>