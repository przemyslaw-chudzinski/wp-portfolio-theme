const _inputs = Symbol();
const _initSingleInput = Symbol();
const _createLabel = Symbol();
const _createInput = Symbol();

class MInput {

    constructor() {
        this[_inputs] = document.querySelectorAll('input.m-input');
    }

    init() {
        this[_inputs] && this[_inputs].length && [].forEach.call(this[_inputs], item => this[_initSingleInput](item));
    }

    [_initSingleInput](input) {
        const mInputContainer = document.createElement('div');
        const mInputLabel = this[_createLabel](input);
        const mInput = this[_createInput](input);

        mInputContainer.classList.add('m-input-container');
        mInputContainer.appendChild(mInput);
        mInputContainer.appendChild(mInputLabel);
        input.parentNode.append(mInputContainer);
        input.remove();
    }

    [_createLabel](input) {
        const mInputLabel = document.createElement('label');
        mInputLabel.classList.add('m-input-label');
        mInputLabel.innerText = input.placeholder;
        return mInputLabel;
    }

    [_createInput](input) {
        const mInput = document.createElement('input');
        mInput.classList.add('m-input');
        // mInput.placeholder = input.placeholder;
        mInput.type = 'text';
        return mInput;
    }

}

module.exports = MInput;
