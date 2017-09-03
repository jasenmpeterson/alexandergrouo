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
                const target = event.target
                wrapper = target.parentNode.className.split(" ")[0]
                videoPlay(wrapper)
            })
        })

        function videoPlay(wrapper) {
            active_wrapper = '.'+wrapper
            videoStop(active_wrapper)
            iframe = document.querySelector(active_wrapper+' .video--iframe')
            const src = iframe.getAttribute('data-src')
            console.log(iframe)
            iframe.parentNode.classList.add('video--wrapper--active')
            iframe.setAttribute('src', src)
        }

        function videoStop(wrapper) {
            if (!wrapper) {
                wrapper = document.querySelector('.js--video--wrapper')
                iframe = document.querySelector('.js--video--iframe')
            } else {
                iframe = document.querySelector(active_wrapper+' .video--iframe')
            }
            iframe.parentNode.classList.remove('videoWrapperActive');
            iframe.setAttribute('src','');
        }
    }
})