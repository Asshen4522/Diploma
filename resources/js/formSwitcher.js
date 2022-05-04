const buttonAdminPanel = document.querySelectorAll('.buttonAdminPanel')


buttonAdminPanel.forEach(element => {
    const x = element.dataset.btnPanel
    element.addEventListener("click", () => openCurrentForm(x))
}
);

function openCurrentForm(formType) {
    var i;
    var x = document.getElementsByClassName("addAdminPanel");
    buttonAdminPanel.forEach(element => {
        if (element.classList.contains('buttonActive')) {
            element.classList.remove('buttonActive')
        }
    });
    for (i = 0; i < x.length; i++) {
        console.log(i);
        if (x[i].classList.contains('formDisplayFlex')) {
            x[i].classList.remove('formDisplayFlex')
            x[i].classList.add('formDisplayNone')
        }
    }
    var ButtonType = formType + 'btn';
    console.log(ButtonType);
    document.getElementById(formType).classList.add('formDisplayFlex');
    document.getElementById(ButtonType).classList.add('buttonActive');
}