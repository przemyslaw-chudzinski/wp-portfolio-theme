const ValidationError = require('./validationError');
const validationTypes = require('./validationTypes');
const FormFieldBase = require('./formFieldBase');


class FormCheckboxField extends FormFieldBase {
    constructor(field) {
        super(field);
    }

    fieldInit() {
        this.pristine = true;
    }

    validate() {

        this.clearValidator();

        if (this.hasRequiredAttr) {
            if(!this.field.checked) this.setErrors(validationTypes.checked);
            else this._valid = true;
        }
    }

    renderErrors(error) {
        if (error instanceof ValidationError) {
            this._field.parentNode.style.color = 'red';
        }
    }

    clearValidator() {
        this._errors = [];
        this.field.parentNode.setAttribute('style', '');
    }

    handleFocus(event) {
        this.validate();
    }

    reset() {
        this.clearValidator();
        this.value = false;
        this.field.checked = false;
        this.dirty = null;
        this.touched = null;
        this.pristine = true;
    }
}

module.exports = FormCheckboxField;
