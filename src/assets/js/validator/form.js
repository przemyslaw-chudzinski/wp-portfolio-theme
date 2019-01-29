const FormInputField = require('./formInputField');
const FormCheckboxField = require('./formCheckboxField');

class Form {

    constructor(form) {
        if (!form) throw new Error('Value "form" must be specified');
        this._form = form;
        this._formFields = [];
        this._errors = [];
        this._fields = form.querySelectorAll('[data-form-control]');
        this._fields && this._fields.length && [].forEach.call(this._fields, field => {
            field.nodeName === 'TEXTAREA' && this._formFields.push(new FormInputField(field));
            (field.nodeName === 'INPUT' && (field.type === 'text' || field.type === 'email')) && this._formFields.push(new FormInputField(field));
            (field.nodeName === 'INPUT' && field.type === 'checkbox') && this._formFields.push(new FormCheckboxField(field));
        });
        this._assignEvents();
    }

    get errors() {
        return this._errors || [];
    }

    get valid() {
        let valid = true;
        this._errors.forEach(error => error.length && (valid = false));
        return valid;
    }

    get formValue() {
        let value = {};
        this._formFields && this._formFields.length && this._formFields.forEach(formField => formField.hasNameAttr && (value[formField.nameAttrValue] = formField.value));
        return value;
    }

    _assignEvents() {
        this._form && this._form.addEventListener('submit', this._handleSubmit.bind(this));
    }

    _handleSubmit(event) {
        event.preventDefault();
        event.stopPropagation();

        this._clearValidators();

        this.validateForm();

        !this._errors.length && this._form.submit();
    }

    _clearValidators() {
        this._errors = [];
        this._formFields && this._formFields.length && this._formFields.forEach(formField => formField.clearValidator());
    }

    validateForm() {
        this._clearValidators();
        this._formFields && this._formFields.length && this._formFields.forEach(formField => {
            formField.validate();
            if (!formField.valid) this._errors.push(formField.errors);
        });
    }

    reset() {
        this._clearValidators();
        this._formFields && this._formFields.length && this._formFields.forEach(formField => formField.reset());
    }

}

module.exports = Form;
