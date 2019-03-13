window.MaterialPlugin = {};

const MInput = require('./input');

MaterialPlugin = (function () {

    const init = () => {
        console.log('init material plugin');

        const mInput = new MInput();
        mInput.init();
    };

    return {
        init
    };

})();
