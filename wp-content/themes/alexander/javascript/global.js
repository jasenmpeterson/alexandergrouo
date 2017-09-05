if (typeof jQuery === 'function') {
    define('jquery', function () {
        return jQuery;
    });
}

require.config({
    baseUrl: pageParams.javascriptDirectory,
    paths: {
        'video-embeds': 'video-embeds',
        'axios': pageParams.siteURL + '/node_modules/axios/dist/axios',
        'ajax': 'ajax',
        'services': 'services'
    }
});

const siteURL = pageParams.root

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