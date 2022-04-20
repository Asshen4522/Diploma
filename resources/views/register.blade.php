@extends('layout.app')
@section('body')
    <div class="form font">
        <div class="form__header">
            Форма регистрации
        </div>
        <div class="form__text">
            Для регистрации на сайте и получения доступа к личному кабинету, пожалуйста, заполните указанные поля. Используются любые символы русского и английского алфавитов, цифры, тире и нижнее подчеркивание.
        </div>
        <form action="/registrate" name="userForms" method="POST" class="form__form" novalidate>
            @csrf
            @method('post')
            <input type="text" class="form__input font" name="login" placeholder="Логин" required>
            <span class="form__error" data-error-name="login"></span>

            <input type="password" class="form__input font" name="password" placeholder="Пароль" required>
            <span class="form__error" data-error-name="password"></span>

            <button type="button" class="form__button font">Зарегистрироваться</button>
            <button type="submit" class="form__submit"></button>
        </form>
    </div>
@endsection