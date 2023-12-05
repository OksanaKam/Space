class Api {
    constructor(options) {
        this._baseUrl = options.baseUrl;
        this._headers = options.headers;
    }
    
    _response(res) {
        if (res.ok) {
            return res
        }
        return Promise.reject(`${res.status}`)
    }

    postUserInfo(userData) {
        return fetch(`${this._baseUrl}`, {
            method: 'POST',
            headers: this._headers,
            body: JSON.stringify({
                user_email: userData.user_email,
            })
        })
        .then(this._response)
    }
}

export { Api }