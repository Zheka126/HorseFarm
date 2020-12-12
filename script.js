/*Скрипты для открытия меню в мобильной версии*/
var button = document.querySelector('.main-nav__toggle');
var menu = document.querySelector('.main-nav');

if (screen.width < 768) {
    console.log(menu);
    menu.classList.add('visually-hidden');
} else if (screen.width > 768) {
    menu.classList.remove('visually-hidden');
};

button.onclick = function () {
    menu.classList.toggle('visually-hidden');
};

/*Скрипты для создания новой карточки товара*/
var NewItembtn = document.querySelector(".addnewhorsebtn");
var NewItem = document.querySelector(".NewItem");

NewItembtn.onclick = function () {
    NewItem.classList.toggle('switch');
}

/*Скрипты для открытия форм*/
var btn1 = document.querySelector(".button--Races");
var btn2 = document.querySelector(".button--education");
var btn3 = document.querySelector(".button--skrex");
var btn4 = document.querySelector(".button--farm");

var rac = document.querySelector(".Races");
var edu = document.querySelector(".Education");
var skr = document.querySelector(".Skrex");
var far = document.querySelector(".Farm");

var form1 = document.querySelector(".formRaces");
var form2 = document.querySelector(".formEducation");
var form3 = document.querySelector(".formSkrex");
var form4 = document.querySelector(".formFarm");

btn1.onclick = function () {
    form1.classList.toggle('switch');
    form2.classList.remove('switch');
    form3.classList.remove('switch');
    form4.classList.remove('switch');

    rac.classList.toggle('Races-show');
    edu.classList.remove('education-show');
    skr.classList.remove('skrex-show');
    far.classList.remove('farm-show');
};

btn2.onclick = function () {
    form1.classList.remove('switch');
    form2.classList.toggle('switch');
    form3.classList.remove('switch');
    form4.classList.remove('switch');

    rac.classList.remove('Races-show');
    edu.classList.toggle('education-show');
    skr.classList.remove('skrex-show');
    far.classList.remove('farm-show');
};

btn3.onclick = function () {
    form1.classList.remove('switch');
    form2.classList.remove('switch');
    form3.classList.toggle('switch');
    form4.classList.remove('switch');

    rac.classList.remove('Races-show');
    edu.classList.remove('education-show');
    skr.classList.toggle('skrex-show');
    far.classList.remove('farm-show');
};

btn4.onclick = function () {
    form1.classList.remove('switch');
    form2.classList.remove('switch');
    form3.classList.remove('switch');
    form4.classList.toggle('switch');

    rac.classList.remove('Races-show');
    edu.classList.remove('education-show');
    skr.classList.remove('skrex-show');
    far.classList.toggle('farm-show');
};

/*Скрипты для открытия таблиц */
var tablebutton = document.querySelector(".showDataClents-button");
var tabl = document.querySelector(".wrapperfortables");

tablebutton.onclick = function () {
    tabl.classList.toggle('switch2');
};