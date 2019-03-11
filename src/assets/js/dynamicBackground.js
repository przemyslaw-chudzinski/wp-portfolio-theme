const {preloadImage, isInViewPortY} = require('./helpers');

PortfolioTheme.DynamicBackground = (function () {

    const init = () => {
        const elements = document.querySelectorAll('[data-background-url]');
        elements && elements.length && _loadImages(elements);
        elements && elements.length && addEventListener('scroll', () => _loadImages(elements));
    };

    const _loadImage = async element => {
        const isLazy = element ? !element.dataset.preventLazy : true;
        if (isLazy && !isInViewPortY(element)) return;
        const imageUrl = element.dataset.backgroundUrl || null;
        const backgroundOverlay = element.querySelector('[data-background-overlay]');
        const url = await preloadImage(imageUrl);
        element.style.backgroundImage = `url(${url})`;
        backgroundOverlay && backgroundOverlay.classList.add('hidden');
        isInViewPortY(element);
    };

    const _loadImages = elements => elements && elements.length && [].forEach.call(elements, async elem => _loadImage(elem));

    return {
        init
    };

})();

