@extends('layout.app')
@section('body')
    <div class="form font">
        <div class="form__header">
            Форма Авторизации
        </div>
        <div class="form__text">
            Для входа на сайт и получения доступа к личному кабинету, пожалуйста, заполните указанные поля, согласно данным, введеннм вами при регистрации.
        </div>
        <form action="/authorisate" name="userForms" method="POST" class="form__form" novalidate>
            @csrf
            @method('post')
            <input type="text" class="form__input font" name="login" placeholder="Логин" required>
            <span class="form__error font data-error-name="login"></span>

            <input type="password" class="form__input font" name="password" placeholder="Пароль" required>
            <span class="form__error font" data-error-name="password"></span>

            <button type="button" class="form__button font">Зарегистрироваться</button>
            <button type="submit" class="form__submit"></button>
        </form>
    </div>
@endsection