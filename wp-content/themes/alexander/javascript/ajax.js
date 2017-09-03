define(['./axios'],function (axios) {
    return function (url) {

        const ajax_modal = document.querySelector('.ajax--modal')
        const ajax_close = document.querySelector('.ajax--close--button svg')
        const ajax_spinner = document.querySelector('.ajax--spinner')

        axios.interceptors.request.use(function (config) {
            ajax_spinner.classList.add('active')
            return config;
        }, function (error) {
            return Promise.reject(error)
        })

        // leadership profiles:
        const ajax_button_profile = document.querySelectorAll('.ajax--profile--button')
        ajax_button_profile.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault()
                // hide ajax modal :
                if(ajax_modal.classList.contains('active')){
                    ajax_modal.classList.remove('active')
                }

                const data_id = button.dataset.id
                const description = document.querySelector('.ajax--profile--content p')
                const title = document.querySelector('.ajax--profile--content h1')
                const name = document.querySelector('.ajax--profile .name h1')
                const list = document.querySelector('.ajax--profile .list ul')
                const experience_label = document.querySelector('.ajax--profile .experience--label h1')
                const image = document.querySelector('.ajax--profile--image')
                const nodes = [title,description,name,list,image]

                // clear html:
                nodes.forEach(function(node) {
                    if(node !== null){
                        node.innerHTML = ''
                    }
                })
                // ajax call:
                axios.get(url + '/wp-json/wp/v2/team_profiles/'+data_id).then(function (response) {
                    console.log(response)
                    name.innerHTML = response.data.title.rendered
                    description.innerHTML = response.data.acf.content
                    title.innerHTML = response.data.acf.label
                    experience_label.innerHTML = response.data.acf.experience_label
                    image.style.backgroundImage = 'url(' + response.data.acf.image.url + ')'
                    // experience bullets :
                    const experience_list = response.data.acf.experience_bullets
                    for (var i = 0; i < experience_list.length; i++) {
                        const label = experience_list[i].label
                        const content = experience_list[i].content
                        const list_element = 'li'
                        const bullet = document.createElement(list_element)
                        bullet.innerHTML = '<h1>' + label + '</h1>' + content
                        list.appendChild(bullet)
                    }
                    // display ajax modal :
                    ajax_modal.classList.add('active')
                    ajax_spinner.classList.remove('active')
                })
            })
        })

        // close ajax modal :
        ajax_close.addEventListener('click', function() {
            if(ajax_modal.classList.contains('active')){
                ajax_modal.classList.remove('active')
            }
        })
    }
})