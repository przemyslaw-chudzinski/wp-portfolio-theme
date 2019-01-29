const ValidationError = require('./validationError');

class FormFieldBase {
    constructor(field) {
        if (!field) throw new Error('field value is not specified');
        this._field = field;
        this._dirty = false;
        this._touched = false;
        this._pristine = true;
        this._valid = false;
        this._value = null;
        this._errors = [];
        this.fieldInit();
        this._assignEvents();
    }

    get dirty() {
        return this._dirty;
    }

    get touched() {
        return this._touched;
    }

    get pristine() {
        return !this._dirty && !this._touched;
    }

    get valid() {
        return this._valid;
    }

    get value() {
        return this._value;
    }

    set value(value) {
        this._value = value;
    }

    get errors() {
        return this._errors;
    }

    get field() {
        return this._field;
    }

    set dirty(isDirty) {
        const className = 'is-dirty';
        isDirty ? this.field.classList.add(className) : this.field.classList.remove(className);
        this._dirty = isDirty;
    }

    set touched(isTouched) {
        const className = 'is-touched';
        isTouched ? this.field.classList.add(className) : this.field.classList.remove(className);
        this._touched = isTouched;
    }

    set pristine(isPristine) {
        const className = 'is-pristine';
        isPristine ? this.field.classList.add(className) : this.field.classList.remove(className);
        this._pristine = isPristine;
    }

    get hasNameAttr() {
        return this._field.hasAttribute('name');
    }

    get nameAttrValue() {
        return this._field.getAttribute('name');
    }

    /**
     * Methods which check validation attributes
     */

    get hasRequiredAttr() {
        return this._field.hasAttribute('required');
    }

    get hasMaxLengthAttr() {
        return this._field.hasAttribute('maxlength');
    }

    get maxLengthAttrValue() {
        return parseInt(this._field.getAttribute('maxlength'));
    }

    get hasMinAttr() {
        return this._field.hasAttribute('min');
    }

    get minAttrValue() {
        return parseInt(this._field.getAttribute('min'));
    }

    get hasMaxAttr() {
        return this._field.hasAttribute('max');
    }

    get maxAttrValue() {
        return parseInt(this._field.getAttribute('max'));
    }

    get hasPatternAttr() {
        return this._field.hasAttribute('pattern');
    }

    get patternAttrValue() {
        return this._field.getAttribute('pattern');
    }

    // ------------------------------------------------------------------------------

    _assignEvents() {
        this._field && this._field.addEventListener('change', this.handleChange.bind(this));
        this._field && this._field.addEventListener('focus', this.handleFocus.bind(this));
        this._field && this._field.addEventListener('keyup', this.handleKeyUp.bind(this));
        this._field && this._field.addEventListener('blur', this.handleBlur.bind(this));
    }

    /**
     * Event handlers
     */

    handleChange(event) {
        this.dirty = true;
        this.pristine = false;
        this._value = event.target.value;
        this.touched = true;
        this.validate();
    }

    handleKeyUp(event) {
        this._value = event.target.value;
        this.dirty = true;
        this.pristine = false;
        this.validate();
    }

    handleFocus(event) {

    }

    handleBlur(event) {
        this._value = event.target.value;
        this.touched = true;
        this.pristine = false;
        this.validate();
    }

    // ------------------------------------------------------------------------------

    /**
     * @desc It initializes form field
     * Should be overloaded
     */
    fieldInit() {

    }

    /**
     * @desc It validates form control
     * Should be overloaded
     */
    validate() {

    }

    /**
     * @desc It resets all control and validators
     */
    reset() {
        //
    }

    /**
     * @desc It resets only validation effects
     * Should be overloaded
     */
    clearValidator() {

    }

    /**
     *
     * @param error
     * @desc It renders error
     * Should be overloaded
     */
    renderErrors(error) {

    }

    setErrors(validationType) {
        if (!this._errors.length) {
            const errorObj = new ValidationError(this.field, validationType);
            this._errors.push(errorObj);
            this._valid = false;
            this.renderErrors(errorObj);
        }
    }
}

module.exports = FormFieldBase;
