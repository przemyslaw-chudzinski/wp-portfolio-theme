PortfolioTheme.CookiesInfo = (function () {


    const init = () => {

        if (!window.localStorage) throw new Error('your browser does\'nt support localstorage');

        if (_confirmed()) return true;

        const tpl = document.querySelector('#cookiesTpl');
        const containerID = 'tpl-id-' + Date.now();
        tpl && _render(tpl, containerID);

        const tplContainer = document.querySelector('#' + containerID);
        const closeTrigger = tplContainer ? tplContainer.querySelector('[data-close-btn]') : null;

        closeTrigger && closeTrigger.addEventListener('click', event => {
            event.preventDefault();
            event.stopPropagation();
            _confirm(tplContainer);
        }, true);

    };

    const _render = (tpl, containerID) => {
        const currentContainer = document.querySelector('#' + containerID);
        currentContainer && currentContainer.remove();

        const tplContainer = document.createElement('div');
        tplContainer.id = containerID;
        tplContainer.innerHTML = tpl.innerHTML;
        document.body.append(tplContainer);
    };

    const _confirmed = () => !!localStorage.getItem('cookies_accepted');

    const _confirm = tplContainer => {
        localStorage.setItem('cookies_accepted', 'accepted');
        tplContainer.remove();
    };

    return {
        init
    };


})();
