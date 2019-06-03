/*
function FormValidator(form) {
    this._form = form;
    //console.log(this._form);
    this._elem = document.querySelectorAll('.validate');
    //console.log(this._elem[0].name); //login
    // this._form.addEventListener('submit', this.some.bind(this));
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

/!*FormValidator.prototype.some = function(event){
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
};*!/

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
       /!* this.submit();*!/
    }
}
*/

// ajax
let form = document.forms.someform;

function formValid(fields) {
    for (let i=0; i<fields.length; i++){
        if (fields[i].value.length < 3){
            /*console.log(fields[i].value.length);
            console.log(fields[i].value);*/
            return false;
        }
    }
    return true;
}

form.addEventListener('submit', ajaxHandler);

function ajaxHandler(event) {
    event.preventDefault();
    elem = document.querySelectorAll('.validate');

    let errors = [];
    let validate_fields = document.querySelectorAll('.validate');
    if (!formValid(validate_fields)) {
        for(let i=0; i<elem.length; i++){
            elem[i].addEventListener('focus', removeMessage);
            errors.push(elem[i].name);
            elem[i].nextSibling.innerText = "Не все поля заполнены";
        }

        // document.getElementById('errors').innerText = 'не все поля заполнены';
        return;
    }


    let form_data = new FormData(this);

    // console.log(form_data.get('login'));
    let xhr = new XMLHttpRequest(); //обьект запроса к серверу без перезагрузки страницы
    // console.log(xhr);
    //запрос будет отправлен методом POST на обработчик формы
    //в данной случае 'form_handler.php'
    xhr.open("POST", this.action, true); //name="someForm" method="post" action="form_handler.php" true - асинхронность
    xhr.send(form_data);

    //получаем ответ с сервера
    xhr.onload = function (event) {
        //функция будет вызвана, когда придет ответ от сервера
        if (xhr.status === 200){ //код ответа от сервера, код 200 говорит о том что все ок
            responseHandler(xhr.responseText); //ответ придет сюда от echo "Пользователь: $login";
        }
    }
}

function removeMessage(event){
    event.target.nextSibling.innerText = "";
    errors = [];
}

function responseHandler(text) {
    console.log("ответ сервера: " + text);
}