(function () {

    const ajaxMethods = {
        GET: 'GET',
        POST: 'POST'
    };


    class AjaxResponse {
        constructor(xhr) {
            this.status = xhr.status;
        }
    }

    class AjaxSuccessResponse extends AjaxResponse {
        constructor(xhr) {
            super(xhr);
            try {
                this.data = JSON.parse(xhr.response);
            } catch (e) {
                this.data = xhr.response;
            }
        }
    }

    class AjaxErrorResponse extends AjaxResponse {
        constructor(xhr, error) {
            super(xhr);
            this.error = error || xhr.statusText;
        }
    }


    class Ajax {
        constructor(url, method, async) {
            this._url = url;
            this._method = method || ajaxMethods.GET;
            this._ajax = null;
            this._async = async ? async : false;
            this._data = new FormData();

            this._readyState0Callback = this._readyState0Callback || function () {};
            this._readyState1Callback = this._readyState1Callback || function () {};
            this._readyState2Callback = this._readyState2Callback || function () {};
            this._readyState3Callback = this._readyState3Callback || function () {};
            this._readyState4Callback = this._readyState4Callback || function () {};

            this._init();
        }

        set readyState0Callback(callback) {
            callback = callback || function () {};
            if (typeof callback !== 'function') throw new Error('callback must be a function');
            this._readyState0Callback = callback;
        }

        set readyState1Callback(callback) {
            callback = callback || function () {};
            if (typeof callback !== 'function') throw new Error('callback must be a function');
            this._readyState1Callback = callback;
        }

        set readyState2Callback(callback) {
            callback = callback || function () {};
            if (typeof callback !== 'function') throw new Error('callback must be a function');
            this._readyState2Callback = callback;
        }

        set readyState3Callback(callback) {
            callback = callback || function () {};
            if (typeof callback !== 'function') throw new Error('callback must be a function');
            this._readyState3Callback = callback;
        }

        set readyState4Callback(callback) {
            callback = callback || function () {};
            if (typeof callback !== 'function') throw new Error('callback must be a function');
            this._readyState4Callback = callback;
        }

        _init() {
            if (window.XMLHttpRequest) this._ajax = new XMLHttpRequest();
            else if (window.ActiveXObject) this._ajax = new ActiveXObject("Microsoft.XMLHTTP");
            else throw new Error('Search plugin could not be initialized. Your browser doesn\'t support ajax');
            if (!this._url) throw new Error('Could not create ajax object because url is not specified');
            if (!this._method) throw new Error('Could not create ajax object because method is not specified');
            if(this._method !== ajaxMethods.GET && this._method !== ajaxMethods.POST) throw new Error('Passed method name is not supported');
            if (typeof this._async !== 'boolean') throw  new Error('async must be boolean');

            this._ajax && this._ajax.open(this._method, this._url, this._async);
            this._ajax && this._assignEvents();
        }

        _assignEvents() {
            this._ajax.addEventListener('readystatechange', () => {
                switch (this._ajax.readyState) {
                    case 0: return this._readyState0Callback();
                    case 1: return this._readyState1Callback();
                    case 2: return this._readyState2Callback();
                    case 3: return this._readyState3Callback();
                    case 4: return this._handleReadyState4();
                }
            });

            this._ajax.addEventListener('abort', event => this.handleAbort(event));
            this._ajax.addEventListener('error', event => this.handleError(event));
            this._ajax.addEventListener('timeout', event => this.handleTimeout(event));

        }

        handleAbort(event) {
            console.log('request abotred');
        }

        handleError(event) {
            console.log('request error');
        }

        handleTimeout(event) {
            console.log('request timeout');
        }

        _setDefaultHeaders() {

        }

        _protectPayloadValue(value) {
            return value;
        }

        _preparePayload(payload) {
            for (let key in payload) {
                if (payload[key]) this._data && this._data.append(key, this._protectPayloadValue(payload[key]));
            }
        }

        exec(payload = {}) {
            this._ajax && this._setDefaultHeaders();
            this._preparePayload(payload);
            this._ajax.send(this._data);
        }

        _handleReadyState4() {
            this._ajax.status >= 200 && this._ajax.status < 400 && this._readyState4Callback(new AjaxSuccessResponse(this._ajax));
            this._ajax.status >= 400 && this._ajax.status <= 500 && this._readyState4Callback(new AjaxErrorResponse(this._ajax));
        }

        abort() {
            this._ajax && this._ajax.abort();
        }

        setHeader(key, value) {
            this._ajax.setRequestHeader(key, value);
        }
    }

    const create = ({url, method, async}) => new Ajax(url, method, async);

    module.exports = {
        create,
        ajaxMethods,
        AjaxErrorResponse,
        AjaxSuccessResponse
    };


})();
