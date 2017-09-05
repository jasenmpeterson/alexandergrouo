define(function () {
    return function () {
        const services_button = document.querySelectorAll('.services--list .button--default')
        const services_close_button = document.querySelectorAll('.services--close--button')
        var content = null;
        if (typeof (services_button) !== 'undefined' && services_button !== null) {

            services_close_button.forEach(function(button) {
                button.addEventListener('click', function() {
                    const active = document.querySelector('.services--list .services--content.active')
                    active.classList.remove('active')
                })
            })

            services_button.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault()
                    const content_name = this.dataset.name
                    content = document.querySelector('.services--list .services--content[data-name="'+content_name+'"');
                    const content_nodes = document.querySelectorAll('.services--list .services--content')
                    content_nodes.forEach(function (node) {
                        if(node.classList.contains('active')) {
                            node.classList.remove('active')
                        }
                    })
                    content.classList.add('active')
                })
            })
        }
    }
})