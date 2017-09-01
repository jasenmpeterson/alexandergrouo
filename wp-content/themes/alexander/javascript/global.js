const play_button = document.querySelector('button.video--poster')
play_button.addEventListener('click', function(event) {
    event.preventDefault()
    const wrapper = document.querySelector('.video--wrapper')
    videoPlay(wrapper)
})

function videoPlay(wrapper) {
    const iframe = wrapper.querySelector('.video--iframe')
    const src = iframe.getAttribute('data-src')
    wrapper.classList.add('video--wrapper--active')
    iframe.setAttribute('src', src)
}