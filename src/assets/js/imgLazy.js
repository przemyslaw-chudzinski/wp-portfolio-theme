const {isInViewPortY} = require('./helpers');

PortfolioTheme.ImgLazy = (function () {

    const init = () => {
        const elements = document.querySelectorAll('[data-lazy-img]');
        elements && elements.length && _loadImages(elements);
        elements && elements.length && addEventListener('scroll', () => _loadImages(elements));
    };

    const _loadImage = element => {
        const src = element.dataset.src;
        isInViewPortY(element) && !element.src && (element.src = src);
    };

    const _loadImages = elements => [].forEach.call(elements, _loadImage);

    return {
        init
    };

})();
