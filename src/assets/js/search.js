const ajax = require('./ajax');

PortfolioTheme.Search = (function () {

    let _timeoutInterval = null;

    const init = () => {

        const _triggers = document.querySelectorAll('[data-search-tpl]');
        _triggers && _triggers.length && [].forEach.call(_triggers, trigger => {
            const searchTarget = trigger.dataset.searchTpl || null;
            const searchTpl = document.querySelector('script#' + searchTarget);
            trigger && trigger.addEventListener('click', () => _renderTpl(searchTpl));
        });
    };

    const _renderTpl = tpl => {
        // Template rendering
        const div = document.createElement('div');
        const containerID = 'search-container-' + Date.now();
        div.id = containerID;
        div.innerHTML = tpl.innerHTML;
        document.body.append(div);
        // --------------------------------------------------------------

       _setup(containerID);

    };

    const _setup = containerID => {
        const searchContainer = document.querySelector('#' + containerID);
        const searchElem = searchContainer.querySelector('[data-search]');

        const closeEl = searchElem.querySelector('[data-search-close]');
        const input = searchElem.querySelector('[data-search-input]');
        const searchResultsContainer = searchElem.querySelector('[data-search-results]');
        const preloader = searchElem.querySelector('[data-search-preloader]');

        if (!input) throw new Error('Could not find [data-search-input] element');
        if (!searchElem) throw new Error('Could not found [data-search="' + searchElem + '" attribute');

        closeEl && closeEl.addEventListener('click', () => _destroy(searchElem, searchContainer), true);
        input && input.addEventListener('input', event => _handleChange(event, searchResultsContainer, PortfolioTheme.Global.host, preloader), true);
        searchElem && searchElem.addEventListener('keydown', event => _handleEscapeKeyDown(searchElem, searchContainer, event), true);
        searchElem.addEventListener('transitionend', () => input && input.focus(), true);

        setTimeout(() => {
            searchElem.classList.add('open');
            input.focus();
        });

    };

    const _destroy = (searchElem, searchContainer) => {
        searchElem.classList.remove('open');
        searchElem.addEventListener('transitionend', () => searchContainer && searchContainer.remove(), true);
    };

    const _handleEscapeKeyDown = (searchElem, searchContainer, event) => event && event.key === 'Escape' && _destroy(searchElem, searchContainer);

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
                _clearNoItems(searchResultsContainer);

                const ul = document.createElement('ul');
                const ulAttr = document.createAttribute('data-search-list');
                ul.classList.add('search__results-list');
                ul.setAttributeNode(ulAttr);

                const flatted = values && values.length && values.reduce((prev, curr) => prev.concat(curr));

                if (!flatted || !flatted.length) {
                    _renderNoItems(searchResultsContainer);
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
        items && items.length && items.forEach(item => _renderItem(ul, item));
        searchResultsContainer.appendChild(ul);
    };

    const _renderItem = (ul, item) => {
        const {title, link, type, thumbnail, categories} = item;
        const li = document.createElement('li');
        const anchor = document.createElement('a');
        const renderedTitle = title ? title.rendered : null;
        const renderedType = _getRenderedType(type);
        const thumbnailUrl = thumbnail && thumbnail.medium ? thumbnail.medium : 'http://placehold.it/300x200';
        const renderedCategories = categories && categories.length ? categories.map(item => item.name).join(', ') : '';


        li.classList.add('search__results-list-item');

        anchor.classList.add('search__results-list-item-link');
        anchor.innerHTML = `
                <div class="search__result">
                    <div class="search__result-image" style="background: url('${thumbnailUrl}') no-repeat">
                     </div>
                    <div class="search__result-content">
                        <p>${renderedTitle} </p>
                        <div>${renderedType} <span class="search__result-category">${renderedCategories}</span></div>
                    </div>
                </div>
        `;


        link && (anchor.href = link);

        li.appendChild(anchor);
        ul.appendChild(li);
    };

    const _renderNoItems = (searchResultsContainer, text = 'Brak rezultatów do wyświetlenia') => {
        const div = document.createElement('div');
        div.innerText = text;
        div.classList.add('search__results-empty');
        searchResultsContainer.appendChild(div);
    };

    const _clearNoItems = searchResultsContainer => {
        const noItemsElem = searchResultsContainer.querySelector('.search__results-empty');
        noItemsElem && noItemsElem.remove();
    };

    const _getRenderedType = type => {
        switch (type) {
            case 'project': return '<span class="theme-label theme-label--primary">Projekt</span>';
            case 'page': return '<span class="theme-label theme-label--tertiary">Strona</span>';
            case 'post': return '<span class="theme-label theme-label--secondary">Wpis</span>';
            default: 'Wpis';
        }
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
