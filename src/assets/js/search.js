const ajax = require('./ajax');

PortfolioTheme.Search = (function () {

    // let _httpPostsRequest = null;
    // let _httpPagesRequest = null;
    // let _httpProjectsRequest = null;

    let _timeoutInterval = null;

    const init = () => {

        const _triggers = document.querySelectorAll('[data-search-target]');
        _triggers && _triggers.length && [].forEach.call(_triggers, trigger => {
            const searchTarget = trigger.dataset.searchTarget || null;
            const searchEl = document.querySelector('[data-search="' + searchTarget + '"]');
            const closeEl = searchEl.querySelector('[data-search-close]');
            const input = searchEl.querySelector('[data-search-input]');
            const searchResultsContainer = searchEl.querySelector('[data-search-results]');
            const url = searchEl.dataset.searchUrl || null;
            const preloader = searchEl.querySelector('[data-search-preloader]');

            if (!input) throw new Error('Could not find [data-search-input] element');
            if (!searchTarget || !searchTarget.length) throw new Error('Attribute [data-search-target] is not specified');
            if (!searchEl) throw new Error('Could not found [data-search="' + searchEl + '" attribute');
            if (!url) throw new Error('Wrong value for [data-search-url] attribute');

            trigger && trigger.addEventListener('click', () => _open(searchEl, input));
            closeEl && closeEl.addEventListener('click', () => _close(searchEl, searchResultsContainer, input));
            input && input.addEventListener('input', event => _handleChange(event, searchResultsContainer, url, preloader));
            searchEl && searchEl.addEventListener('keydown', event => _handleKeyDownClose(event, searchEl, searchResultsContainer, input));
        });
    };

    const _open = (item, input) => {
        item.classList.add('open');
        input && input.focus();
    };

    const _close = (item, searchResultsContainer, input) => {
        item.classList.remove('open');
        _resetList(searchResultsContainer);
        input.value = '';
    };

    const _handleKeyDownClose = (event, item, searchResultsContainer, input) => event.key === 'Escape' && _close(item, searchResultsContainer, input);

    const _handleChange = (event, searchResultsContainer, url, preloader) => {
        const searchPhrase = event.target.value.toLowerCase();
        _resetList(searchResultsContainer);
        preloader.style.display = 'block';

        _throttle(() => {

            const postsEndpoint = `${url}/wp-json/wp/v2/posts?per_page=3&search=${searchPhrase}`;
            const pagesEndpoint = `${url}/wp-json/wp/v2/pages?per_page=3&search=${searchPhrase}`;
            const projectsEndpoint = `${url}/wp-json/wp/v2/project?per_page=3&search=${searchPhrase}`;

            Promise.all([ _fetchItems(postsEndpoint), _fetchItems(pagesEndpoint), _fetchItems(projectsEndpoint)]).then(values => {
                preloader.style.display = 'none';

                _resetList(searchResultsContainer);

                const ul = document.createElement('ul');
                const ulAttr = document.createAttribute('data-search-list');
                ul.classList.add('search__results-list');
                ul.setAttributeNode(ulAttr);

                const flatted = values && values.length && values.reduce((prev, curr) => prev.concat(curr));

                if (!flatted || !flatted.length) {
                    _renderItem(ul, 'Brak rezultatów dla tego wyszukiwania');
                    searchResultsContainer.appendChild(ul);
                } else _renderItems(flatted, ul, searchResultsContainer);

            });

        });

    };

    const _fetchItems = url => new Promise((resolve, reject) => {
        const _httpItemsRequest = ajax.create({url, async: true});
        if (_httpItemsRequest) {
            _httpItemsRequest.readyState4Callback = response => response instanceof ajax.AjaxErrorResponse ? reject(response) : resolve(response.data);
            _httpItemsRequest.exec();
        }
    });

    const _resetList = searchResultsContainer => {
        const resultsList = searchResultsContainer.querySelector('[data-search-list]');
        resultsList && resultsList.remove();
    };

    const _renderItems = (items = [], ul, searchResultsContainer, beforeLabel = '') => {
        items && items.length && items.forEach(item => _renderItem(ul, item.title.rendered, item.link, beforeLabel));
        searchResultsContainer.appendChild(ul);
    };

    const _renderItem = (ul, title, link = null, beforeLabel = null) => {
        const li = document.createElement('li');
        const anchor = document.createElement('a');

        anchor.innerHTML = beforeLabel ? `<span>${beforeLabel} - </span>` + title : title;
        link && (anchor.href = link);

        li.appendChild(anchor);
        ul.appendChild(li);
    };

    const _throttle = (cb, delay = 300) => {
        cb = cb || function () {};
        clearTimeout(_timeoutInterval);
        _timeoutInterval = setTimeout(() => cb(), delay);
    };

    return {
        init
    };

})();
