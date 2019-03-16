const ajax = require('./ajax');
const Form = require('./validator/form');

(function () {

    const _form = document.querySelector('#contactForm');
    const contactFormBtn = document.querySelector('#contactFormBtn');
    const messageContainer = _form.querySelector('[data-form-message]');
    // const {siteUrl} = _form.dataset;
    // if (!siteUrl) throw new Error('[data-url] attribute is not specified');
    // const ajaxurl = siteUrl + '/wp-admin/admin-ajax.php';
    let xhr = null;

    const form = _form ? new Form(_form) : null;

    form && contactFormBtn && contactFormBtn.addEventListener('click', event => {
        event.preventDefault();
        event.stopPropagation();

        form.validateForm();
        form.valid && _sendEmail({
            ...form.formValue,
            action: 'sendUserEmail'
        });
    });


    const _sendEmail = (payload = null) => {
        if (!payload) throw new Error('payload is not specified');

        xhr && xhr.abort();

        const currentMessage = messageContainer.querySelector('.message');
        currentMessage && currentMessage.remove();

        xhr = ajax.create({
            method: ajax.ajaxMethods.POST,
            url: PortfolioTheme.Global.ajaxurl,
            async: true
        });

        xhr.readyState4Callback = response => {
            const {data, error} = response;
            data && data.success && form.reset();
            data && data.type && data.message && _renderMessage(data.type, data.message);
            if (response instanceof ajax.AjaxErrorResponse) _renderMessage('danger', error);
        };

        xhr.exec(payload);
    };

    const _renderMessage = (type, message) => {
        if (messageContainer) {
            const msg = document.createElement('div');
            msg.classList.add('message');
            msg.classList.add('message--' + type);
            msg.innerText = message;
            messageContainer.appendChild(msg);
        }
    };




})();
