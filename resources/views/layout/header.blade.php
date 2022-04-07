<header class="top-menu font">
    <div>
        ЛОГО
    </div>
    <div>
        <a href="/" class="top-menu__elem">Главная</a>
        <a href="/register" class="top-menu__elem">Регистрация</a>
        @guest
            <a href="/login" class="top-menu__elem">Вход</a>
        @endguest
        @auth
            <a href="/cabinet" class="top-menu__elem">Кабинет</a>
            <a href="/logout" class="top-menu__elem">Выход</a>
        @endauth
    </div>
</header>
<div class="costul">

</div>