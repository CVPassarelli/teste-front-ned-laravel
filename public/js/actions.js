var menu = document.querySelector('.options');
var icon = document.querySelector('.menu');
var mainMenuButton = document.querySelector('.main-button');
var mainMenu = document.querySelector('.main-menu');

mainMenuButton.addEventListener('click', () => {
    let checkIfHaveClass = mainMenu.classList.contains('show')
    if (checkIfHaveClass) {
        mainMenu.classList.remove('show')
        mainMenu.classList.add('hide')
    } else {
        mainMenu.classList.remove('hide')
        mainMenu.classList.add('show')
    }
})

icon.addEventListener('click', () => {
    let checkIfHaveClass = menu.classList.contains('show')
    if (checkIfHaveClass) {
        menu.classList.remove('show')
        menu.classList.add('hide')
    } else {
        menu.classList.remove('hide')
        menu.classList.add('show')
    }
})