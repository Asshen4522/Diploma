
// получаем необходимую форму
const userForm = document.forms['userForms']


if (userForm) {
    //  выбираем кнопку подтверждения
    const submitButton = userForm.querySelector('.form__button')
    // добавляем действие на кнопку "отправить" - провести валидацию и в случае успеха  применить событие к невидимой кнопке подтверждения
    submitButton.addEventListener('click', function (evt) {
        const inputs = Array.from(userForm.querySelectorAll('.form__input'));
        validate(inputs);
        if (inputs.every(input => input.validity.valid)) {
            const btnSend = userForm.querySelector("button.form__submit");
            const event = new MouseEvent('click')

            btnSend.dispatchEvent(event)
        }
    }
    )
}







// главная функция валидации
function validate(inputs) {
    inputs.forEach(function (input) {
        validateInput(input);
        if (input.validity.valid) {
            if (input.name === 'login') {
                validateLogin(input);
            } else if (input.name === 'password') {
                validatePassword(input);
            }
        }
    }
    );
}

// Валидация логина (часть 1 - символы)
function validateLogin(input) {
    const reg = /[а-яА-Яa-zA-Z0-9\_\-]/g
    const matches = input.value.match(reg)
    if (matches) {
        if (location.pathname === '/login') {
            hideError(input)
        } else {
            loginUnique(input)
        }
    } else {
        renderError(input, "Логин содержит запрещенные символы")
    }
}

// Валидация логина (часть2 - уникальность)
function loginUnique(input) {
    const ENDPOINT = '/validation'
    const token = userForm.querySelector('[name="_token"]').value

    fetch(ENDPOINT, {
        method: "POST",
        body: JSON.stringify({
            login: input.value
        }),
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json'
        }
    }).then((response) => {
        return response.json()
    }).then(body => {
        if (body.success) {
            hideError(input)
        } else {
            renderError(input, 'Пользователь с таким логином уже есть')
        }
    })

}

// Валидация пароля
function validatePassword(input) {
    const reg = /[а-яА-Яa-zA-Z0-9\_\-]/g
    const matches = input.value.match(reg)
    if (matches) {
        hideError(input)
    } else {
        renderError(input, "Пароль содержит запрещенные символы")
    }
}

// Валидация браузера
function validateInput(input) {
    if (!input.validity.valid) {
        renderError(input, input.validationMessage);
    } else {
        hideError(input)
    }
}

//Вывод ошибки
function renderError(element, message) {
    const elementName = element.name
    const errorContainer = userForm.querySelector(`[data-error-name="${elementName}"]`)
    errorContainer.textContent = message
    errorContainer.style.height = errorContainer.scrollHeight + 'px'
}


//Уборка ошибки
function hideError(element) {
    const elementName = element.name
    const errorContainer = userForm.querySelector('[data-error-name="' + elementName + '"]')
    errorContainer.textContent = "";
    errorContainer.style.height = '0'
}