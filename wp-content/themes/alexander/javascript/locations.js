define(function () {
    return function () {

        const location_picker = document.querySelector('.locations--list')
        const location_button = document.querySelectorAll('.locations--container')
        const locations = document.querySelectorAll('.locations--map--container')
        const maps = document.querySelectorAll('.acf-map')

        if (typeof (location_picker) != 'undefined' && location_picker != null) {
            // querySelectorAll returns a node list - need to loop through the list so the below applies to all .location_buttons

            for (var i = 0; i < location_button.length; i++) {

                location_button[i].addEventListener('click', function () {

                    // remove active class from selected button

                    const current_button = document.querySelector('.locations--container.active')
                    current_button.classList.remove('active')

                    // remove active class from selected location

                    const current_location = document.querySelector('.locations--map--container.active')
                    current_location.classList.remove('active')

                    const location_id = this.getAttribute('data-location-id')

                    // add active class to clicked button

                    this.classList.add('active')

                    // add active to current location

                    for (var i = 0; i < locations.length; i++) {
                        if (locations[i].getAttribute('data-location-id') == location_id) {
                            locations[i].classList.add('active')

                            // trigger map resize so it displays correctly when a new location is selected

                            google.maps.event.trigger(maps[i], 'resize')
                            google.maps.event.trigger(maps[i], 'update')
                        }
                    }

                })
            }
        }

    }
})