PortfolioTheme.CookiesInfo = (function () {


    const init = () => {

        if (!window.localStorage) throw new Error('your browser does\'nt support localstorage');

        const cookiesInfo = document.querySelector('[data-cookies-info]');
        const cookiesBtn = cookiesInfo.querySelector('[data-cookies-btn]');

        if (_confirmed()) cookiesInfo && (cookiesInfo.style.display = 'none');
        else cookiesInfo.style.display = 'block';

        cookiesInfo && cookiesInfo.addEventListener('click', event => {
            event.preventDefault();
            event.stopPropagation();
            _confirm(cookiesInfo);
        });

    };

    const _confirmed = () => !!localStorage.getItem('cookies_accepted');

    const _confirm = (cookiesInfo) => {
        localStorage.setItem('cookies_accepted', 'accepted');
        cookiesInfo.style.display = 'none';
    };

    return {
        init
    };


})();
