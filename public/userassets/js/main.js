"use strict";
window.addEventListener('load', function () {
    //Loader Scripts
    document.querySelector('.loader').style.display = 'none';
})


//Overlay Scripts
let overlayElem = document.querySelector('.overlay')

//bootstrap triggers
let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

//Cart Scripts

let additionCountBtn = document.querySelectorAll('.addition');
let decreaseCountBtn = document.querySelectorAll('.decrease');
let cartParentDiv = document.querySelector('.cartParent');
let noProductInCartElem = document.querySelector('.noProductInCart');
let countOfProductsSpan = document.querySelector('.countOfProducts');

//Increase Price
additionCountBtn.forEach(function (additionBtn) {
    let countOfProductSpan = additionBtn.nextElementSibling;
    let decreaseBtnNext = additionBtn.nextElementSibling.nextElementSibling;
    additionBtn.addEventListener('click', function (e) {
        if(countOfProductSpan.innerHTML > 0){
            decreaseBtnNext.children[0].className = 'fas fa-minus';
        }
        countOfProductSpan.innerHTML ++;
    })
})

//Decrease Price
decreaseCountBtn.forEach(function (decreaseBtn) {
    let countOfProductSpan = decreaseBtn.previousElementSibling;
    let countOfProductIcon = decreaseBtn.children[0];
    let decreaseCountBtnParent = decreaseBtn.parentElement.parentElement.parentElement;
    decreaseBtn.addEventListener('click', function (e) {
        countOfProductSpan.innerHTML --;
        if(countOfProductSpan.innerHTML < 2){
            countOfProductIcon.className = 'far fa-trash-alt';
            countOfProductSpan.innerHTML = 1;
        }
    })

    countOfProductIcon.addEventListener('click', function (e) {
        if(countOfProductSpan.innerHTML <= 1){
            decreaseCountBtnParent.remove();
            countOfProductsSpan.innerHTML--;
        }
        if(cartParentDiv.children.length < 2){
            noProductInCartElem.style.display = 'block';
        }
    })
})


//Widget Scripts
let openChatBoxBtnElem = document.querySelector('.openChatBoxBtn')
let chatWidgetBoxElem = document.querySelector('.chat-widget-box')
let closeChatWidgetBoxBtnElem = document.querySelector('.closeChatWidgetBoxBtn')
let WriteMsgInputElem = document.querySelector('.WriteMsgInput')
let chatBodyWrapperElem = document.querySelector('.ChatBodyWrapper')
let sendChatToCardBodyBtnElem = document.querySelector('.sendChatToCardBodyBtn')
let chatInfoBox = document.querySelector('.chat-info')
let chatSendFileElem = document.querySelector('.chatSendFile')
let sendFileToChatWrapperElem = document.querySelector('.send-file-to-chat-box')
let fileInputGetterElem = document.querySelector('#fileInputGetter')
let selectFileNameElem = document.querySelector('#fileName')
let sendFileBtnElem = document.querySelector('#sendFileBtn')
let closeSendFileBoxBtn = document.querySelector('#closeSendFileBoxBtn')

closeSendFileBoxBtn.addEventListener('click', function(){
    sendFileToChatWrapperElem.classList.add('d-none')
})

fileInputGetterElem.addEventListener('change', function(e){
    selectFileNameElem.innerHTML = fileInputGetterElem.files[0].name
    selectFileNameElem.lang = 'en';
    sendFileBtnElem.classList.remove('d-none')
})

openChatBoxBtnElem.addEventListener('click', function () {
    chatWidgetBoxElem.classList.add('showElem');
})

closeChatWidgetBoxBtnElem.addEventListener('click', function () {
    chatWidgetBoxElem.classList.remove('showElem');
})

WriteMsgInputElem.addEventListener('keyup', function (e) {
    if(WriteMsgInputElem.value){
        if (e.which === 13) {
            messageGenerator();
            chatInfoBox.classList.add('hidden');
        }
    }
})
sendChatToCardBodyBtnElem.addEventListener('click', function () {
    if(WriteMsgInputElem.value){
        messageGenerator();
        chatInfoBox.classList.add('hidden');
    }
})

chatSendFileElem.addEventListener('click', function () {
    sendFileToChatWrapperElem.classList.remove('d-none')
})

function messageGenerator() {
    let chatWrapper = document.createElement('div');
    chatWrapper.className = 'chat-widget-msg mb-4 customer-msg float-start'

    let chatText = document.createElement('p');
    chatText.className = 'py-2 px-3 border-radius-3-1-br';
    chatText.innerText = WriteMsgInputElem.value;

    let breakRowElem = document.createElement('div');
    breakRowElem.className = 'clearfix'

    chatWrapper.appendChild(chatText);

    let chatResponseWrapper = document.createElement('div');
    chatResponseWrapper.className = 'chat-widget-msg mb-4 operator-msg float-end'

    let chatResponseText = document.createElement('p');
    chatResponseText.className = 'py-2 px-3 border-radius-3-1-bl'
    chatResponseText.innerText = "پاسخ آزمایشی از سرور"

    let breakRowResponseElem = document.createElement('div');
    breakRowResponseElem.className = 'clearfix'
    breakRowElem.className = 'clearfix'

    chatResponseWrapper.appendChild(chatResponseText);

    chatBodyWrapperElem.append(chatWrapper, breakRowElem);
    chatBodyWrapperElem.append(chatResponseWrapper, breakRowResponseElem);

    WriteMsgInputElem.value = '';
}

//Navbar In Mobile Scripts
let navbarOpenBtnElem = document.querySelector('.openNavbarBtn');
let navbarCloseBtnElem = document.querySelector('.navbar-items-mobile-close-btn');
let navbarItemMobileELem = document.querySelector('.navbar-items-mobile');
let navbarItemFirstAElem = document.querySelectorAll('.showSubMenu');
let backToProductCategoriesElem = document.querySelectorAll('.backToProductCategories');

navbarItemFirstAElem.forEach(function (childItem){
    childItem.addEventListener('click',function (e){
        e.preventDefault();
        childItem.nextElementSibling.classList.add('showElem');
    })
})
backToProductCategoriesElem.forEach(function (navItem){
    navItem.addEventListener('click',function (){
        navItem.parentElement.parentElement.classList.remove('showElem')
    })
})
navbarOpenBtnElem.addEventListener('click',function (){
    navbarItemMobileELem.classList.add('showElem');
    overlayElem.classList.add('showElem');
});
navbarCloseBtnElem.addEventListener('click',function (){
    navbarItemMobileELem.classList.remove('showElem');
    overlayElem.classList.remove('showElem');
});

// Navbar When Scroll Scripts
let customNavbar = document.querySelector('#customNavbar');
let mainNavbar = document.querySelector('#mainNavbar');
let topMobileNavbar = document.querySelector('#topMobileNavbar');
let lastScrollTop = 0;

document.addEventListener('scroll', function () {
    if(document.documentElement.scrollTop > 100){
        customNavbar.classList.add('fixed')
    }else{
        customNavbar.classList.remove('fixed')
    }
})

document.addEventListener('scroll', function () {
    if(window.pageYOffset > 100){
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop > lastScrollTop){
            mainNavbar.classList.add('hidden-main-navbar')
            topMobileNavbar.style.border = '0';
        }else{
            mainNavbar.classList.remove('hidden-main-navbar')
            topMobileNavbar.style.borderBottom = '1px solid #F1F2F4';
        }
        lastScrollTop = scrollTop;
    }
})

mainNavbar.addEventListener('mouseenter', function () {
    this.classList.add('is-active')
})
mainNavbar.addEventListener('mouseleave', function () {
    this.classList.remove('is-active')
})

//Search Scripts

let mainSearchWrapper = document.querySelector('.main-search');
let searchInput = document.querySelector("#mainSearchInput");
let searchResultsBox = document.querySelector(".search-results");

searchInput.addEventListener('keyup', function(e) {
    searchResultsBox.style.display = 'block';
    e.target.classList.add('search-fired');
})
searchInput.addEventListener('click', function(e) {
    searchResultsBox.style.display = 'block';
    e.target.classList.add('search-fired');
})
document.addEventListener('click', function(){
    searchResultsBox.style.display = 'none';
    searchInput.classList.remove('search-fired');
})

//To Top Scripts
let toTopElem = document.querySelector('.to-top');

window.addEventListener('scroll',function (){
    if(window.scrollY > 200){
        toTopElem.classList.add('showElem')
    }else{
        toTopElem.classList.remove('showElem')
    }
})