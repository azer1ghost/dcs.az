try {
    window.Popper = require('@popperjs/core').default;
    window.bootstrap = require('bootstrap');

    const WOW = require('wowjs');

    window.wow = new WOW.WOW({
        live: false
    });

} catch (e) {}
