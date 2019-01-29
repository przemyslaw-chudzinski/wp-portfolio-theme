const Form = require('./form');

PortfolioTheme.Validator = (function () {

    const init = () => {
        const forms = document.querySelectorAll('[data-form]');
        forms && forms.length && [].forEach.call(forms, form =>  new Form(form));
    };

    return {
        init
    };

})();
