const validationTypes = require('./validationTypes');

class ValidationError {

    constructor(field, type) {
        if (!type) throw new Error('type is not specified');
        if (!field) throw new Error('formField is not specified');
        ValidationError._validateType(type);
        this._type = type;
        this.message = field.dataset[this._type] || null;
    }

    static _validateType(type) {
        const types = Object.values(validationTypes);
        if (!types.includes(type)) throw new Error('type ' + type + ' is not supported');
    }

}

module.exports = ValidationError;
