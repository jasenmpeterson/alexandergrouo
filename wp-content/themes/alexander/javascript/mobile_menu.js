define(function () {
    return function () {
        const button = document.querySelector('.hamburger--menu')
        const mobile_menu = document.querySelector('.mobile--menu')
        if (typeof (mobile_menu) !== 'undefined' && mobile_menu !== null) {
            button.addEventListener('click', function () {
                this.classList.toggle('active')
                mobile_menu.classList.toggle('active')
            })
        }
    }
})