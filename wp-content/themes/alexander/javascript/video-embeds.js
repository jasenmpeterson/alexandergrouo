define(function () {
    return function () {

        // video embeds :
        const play_button = document.querySelectorAll('button.video--poster')
        var wrapper = null
        var iframe = null
        var active_wrapper = null

        play_button.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault()
                videoStop(wrapper)
                const target = event.target
                wrapper = target.parentNode.className.split(" ")[0]
                videoPlay(wrapper)
            })
        })

        function videoPlay(wrapper) {
            active_wrapper = '.'+wrapper
            iframe = document.querySelector(active_wrapper+' .video--iframe')
            const src = iframe.getAttribute('data-src')
            iframe.parentNode.classList.add('video--wrapper--active')
            iframe.setAttribute('src', src)
        }

        function videoStop(wrapper) {
            if(iframe) {
                iframe.setAttribute('src','')
            }
            if(wrapper) {
                const curr_wrapper = document.querySelector('.'+wrapper)
                if(curr_wrapper.classList.contains('video--wrapper--active')) {
                    curr_wrapper.classList.remove('video--wrapper--active')
                }
            }
        }
    }
})