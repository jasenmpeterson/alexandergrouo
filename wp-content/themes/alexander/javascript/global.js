require.config({
    baseUrl: pageParams.javascriptDirectory,
    paths: {
        'video-embeds': 'video-embeds',
        'axios': pageParams.siteURL + '/node_modules/axios/dist/axios',
        'ajax': 'ajax',
        'services': 'services',
        'gmaps': 'gmaps',
        'locations': 'locations',
        'scroll_down': 'scroll_down',
        'smooth_scroll': 'smooth_scroll'
    }
});

const siteURL = pageParams.root
const themeURL = pageParams.siteURL

// video embeds :
require(['video-embeds'], function (videoEmbed) {
    videoEmbed()
});
// ajax :
require(['ajax'], function (ajax, url) {
    ajax(siteURL)
});
// services :
require(['services'], function (services) {
    services()
});
// scroll down :
require(['scroll_down'], function (scroll_down) {
    scroll_down()
});
// gmaps :
require(['gmaps']);
// locations :
require(['locations'], function (locations) {
    locations()
});