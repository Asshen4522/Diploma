@extends('layout.app')
@section('body')
    <div>
        <div class="adminPage">
            <div>
                <button class='buttonAdminPanel form__button font buttonActive' data-btn-panel='Genre' id="Genrebtn">Добавить жанр</button>
                <button class='buttonAdminPanel form__button font' data-btn-panel='Author' id="Authorbtn">Добавить автора</button>
                <button class='buttonAdminPanel form__button font' data-btn-panel='Admin' id="Adminbtn">Добавить админа</button>
            </div>
            <div class = "form addAdminPanel formDisplayFlex" id='Genre'>
                <form action="/AddGenre" class="form__form" method="POST" name="AddGenre" id="AddGenre">
                    @csrf
                    @method('post')
                    <input type="text" name="login" class="form__input font" placeholder="Жанр" required>
                    <span data-error-name="login" class="form__error"></span>
        
                    <button type="submit" class="form__button font"> Добавить жанр</button>
                </form>
            </div>
            <div class = "form addAdminPanel formDisplayNone" id='Author'>
                <form action="/AddAuthor" class="form__form" method="POST" name="AddAuthor" id="AddAuthor">
                    @csrf
                    @method('post')
                    <input type="text" class="form__input font" name="login" placeholder="Автор" required>
                    <span class="form__error" data-error-name="login"></span>

                    <button type="submit" class="form__button font"> Добавить автора</button>
                </form>
            </div>
            <div class = "form addAdminPanel formDisplayNone" id='Admin'>
                <form action="/AddAdmin" class="form__form" method="POST" name="AddAdmin" id="AddAdmin">
                    @csrf
                    @method('post')
                    <input type="text" class="form__input font" name="login" placeholder="Логин" required>
                    <span class="form__error" data-error-name="login"></span>

                    <input type="password" class="form__input font" name="password" placeholder="Пароль" required>
                    <span class="form__error" data-error-name="password"></span>

                    <button type="submit" class="form__button font"> Зарегистрировать админа</button>
                </form>
            </div>
        </div>
    </div>
@endsection