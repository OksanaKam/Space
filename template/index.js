import { FormValidator } from "./js/FormValidator.js";
import { Api } from "./js/Api.js";
import { UserInfo } from "./js/UserInfo.js";
import { PopupWithForm } from "./js/PopupWithForm.js";

const buttonSubscribe = document.querySelector('.homepage__oval-title');
const popupSubscribe = document.querySelector('.popup__subscribe');

const params = ({
    formSelector: '.popup__form',
    inputSelector: '.popup__input',
    submitButtonSelector: '.popup__button',
    inactiveButtonClass: 'popup__button_disabled',
    errorClass: 'popup__error_visible',
    invalidInputClass: 'popup__input_invalid'
});

const api = new Api({
    baseUrl: 'server/users/user.php/',
    headers: {
      'Content-Type': 'text/html; charset=UTF-8'
    },
  });

const userInfo = new UserInfo({
    selectorEmail: '.popup__input_name_email'
});

const emailFormValidator = new FormValidator(params, popupSubscribe);
emailFormValidator.enableValidation();

const openSubscribePopup = new PopupWithForm({
    selectorPopup: '.popup__subscribe',
    handleFormSubmit: (userData) => {
        return api.postUserInfo(userData)
        .then(userData => {
            userInfo.setUserInfo(userData);
        })
        .catch((err) => {
            console.log(err);
        });
    }
});

openSubscribePopup.setEventListeners();

buttonSubscribe.addEventListener("click", () => {
    openSubscribePopup.open();
    emailFormValidator.enableSubmitButton();
});