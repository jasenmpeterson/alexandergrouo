define(['./smooth_scroll'],function () {
    return function () {
        const scroll_button = document.querySelector('.scroll--down')
        if (typeof (scroll_button) !== 'undefined' && scroll_button !== null) {
            scroll_button.addEventListener('click', function() {
                document.querySelector('.hidden-anchor').scrollIntoView({
                    behavior: 'smooth'
                })
            })
        }
    }
})