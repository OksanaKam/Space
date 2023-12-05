class UserInfo {
    constructor({ selectorEmail }) {
        this._selectorEmail = document.querySelector(selectorEmail);
    }
    
    setUserInfo(userData) {
        this._selectorEmail.textContent = userData.user_email;
    }
}

export { UserInfo };