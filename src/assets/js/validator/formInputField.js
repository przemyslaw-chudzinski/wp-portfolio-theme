const ValidationError = require('./validationError');
const validationTypes = require('./validationTypes');
const FormFieldBase = require('./formFieldBase');


class FormInputField extends FormFieldBase {
    constructor(field) {
        super(field);
    }

    fieldInit() {
        this.pristine = true;
    }

    validate() {

        this.clearValidator();

        if (this.hasRequiredAttr) {
            if (!this._value || this._value.length === 0 || this._value === '') this.setErrors(validationTypes.required);
            else this._valid = true;
        }

        if (this.hasMaxLengthAttr) {
            if (!this._value || this._value.length > this.maxLengthAttrValue) this.setErrors(validationTypes.maxLength);
            else this._valid = true;
        }

        if (this.hasMinAttr) {
            if (!this._value || this._value < this.minAttrValue ) this.setErrors(validationTypes.min);
            else this._valid = true;
        }

        if (this.hasPatternAttr) {
            const matched = this._value ? this._value.toLowerCase().match(this.patternAttrValue) : null;
            if (!matched) this.setErrors(validationTypes.pattern);
            else this._valid = true;
        }

    }

    renderErrors(error) {
        if (error instanceof  ValidationError) {
            this.field.classList.add('has-error');
            const errorLabel = document.createElement('span');
            errorLabel.classList.add('error-message');
            errorLabel.innerText = error.message;
            this.field.parentNode.append(errorLabel);
        }
    }

    clearValidator() {
        this._errors = [];
        this.field.classList.remove('has-error');
        const errorLabels = this.field.parentNode.querySelectorAll('span');
        errorLabels && errorLabels.length && [].forEach.call(errorLabels, errorLabel => errorLabel.remove());
    }

    reset() {
        this.clearValidator();
        this.value = null;
        this.field.value = this.value;
        this.dirty = null;
        this.touched = null;
        this.pristine = true;
    }
}

module.exports = FormInputField;
