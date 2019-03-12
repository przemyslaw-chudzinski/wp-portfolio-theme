const {throttle} = require('./helpers');

PortfolioTheme.ScrollToTop = (function () {

    const init = () => {
        const btn = document.querySelector('#scrollToTop');
        btn && _showOrHide(btn);
        const _partialThrottle = throttle(_showOrHide);
        btn && addEventListener('scroll', () => _partialThrottle(btn));
        btn && btn.addEventListener('click', () => _scrollToTop());
    };

    const _showOrHide = btn => {
        if (scrollY >= 200) {
            btn.style.visibility = 'visible';
            btn.style.opacity = '1';
        } else {
            btn.style.visibility = 'hidden';
            btn.style.opacity = '0';
        }
    };

    const _scrollToTop = () => {
        scrollTo({
            behavior: "smooth",
            top: 0
        });
    };

    return {
        init
    };

})();
