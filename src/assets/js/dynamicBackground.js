const helpers = require('./helpers');

PortfolioTheme.DynamicBackground = (function () {

    const init = () => {
        const elements = document.querySelectorAll('[data-background-url]');
        elements && elements.length && [].forEach.call(elements, elem => {
            const imageUrl = elem.dataset.backgroundUrl || null;
            const backgroundOverlay = elem.querySelector('[data-background-overlay]');

            imageUrl && helpers.preloadImage(imageUrl)
                .then(url => {
                    if (imageUrl) elem.style.backgroundImage = `url(${url})`;
                    backgroundOverlay && backgroundOverlay.classList.add('hidden');
                });
        });
    };

    return {
        init
    };

})();

