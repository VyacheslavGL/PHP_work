function FormValidator(form) {
    this._form = form;
    //console.log(this._form);
    this._elem = document.querySelectorAll('.validate');
    //console.log(this._elem[0].name); //login
    this._form.addEventListener('submit', this.some.bind(this));
    for(let i=0; i<this._elem.length; i++){
        this._elem[i].addEventListener('focus', this.removeMessage.bind(this));
    }
    this._errors = [];
}

FormValidator.prototype.addRules = function(rule){
    this._rules = rule.rules; //Приходит обьект
    //console.log(this._rules.login);// /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/
    this._messages = rule.messages;
};

FormValidator.prototype.some = function(event){
    event.preventDefault();
    for (let i = 0; i < this._elem.length; i++){
        if (!this._rules[this._elem[i].name].test(this._elem[i].value)) {
            this._errors.push([this._elem[i].name]);
        }
        if (!this._rules[this._elem[i].name].test(this._elem[i].value)){
            this._elem[i].nextSibling.innerText = this._messages[this._elem[i].name];
        }
        //this.submit();
    }
};

let form = document.forms.someform;

FormValidator.prototype.isValid = function(){
    if (this._errors.length > 0){
        console.log("Количество ошибок", this._errors.length);
        return false;
    }return true;
};

FormValidator.prototype.removeMessage = function(event){
    event.target.nextSibling.innerText = "";
    this._errors = [];
};

let formValidator = new FormValidator(form);

formValidator.addRules({
    rules: {
        login: /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/,
        pwd: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/,
        email: /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
    },
    messages: {
        login: "Логин с ограничением 2-20 символов, которыми могут быть буквы и цифры, первый символ обязательно буква",
        pwd: "Пароль должен содержать строчные и прописные латинские буквы, цифры",
        email: "Неправильно введен емайл"
    },
});

form.addEventListener("submit", sendForm);

function sendForm() {
    if(formValidator.isValid()){
        //console.log("Выводим ошибок нет",formValidator.isValid());
        console.log("Ошибок нет");
        this.submit();
    }
}
