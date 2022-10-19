//// scroll menu event
window.addEventListener('scroll', function() {
   let elem = this.document.querySelector('.head__menu');
   if (scrollY > 0){
        elem.classList.add('active');
   }
   else {
        elem.classList.remove('active');
   }
})
////
//// faq-questions
let elems = document.querySelectorAll('.faq-question');
elems.forEach(elem => elem.addEventListener('click', function () {
    
    elem.classList.toggle('active');
    
    
}))
////
//// Открытие модальных форм
const module_open__buttons = document.querySelectorAll('.js-modal-open');
module_open__buttons.forEach(btn => btn.addEventListener('click',function(){
    const attribute = btn.getAttribute('data-open');
    const modal__form = document.querySelector(attribute);
    modal__form.classList.add('active');
}))
////
//// закрытие на крестик модальных форм
const module_close__btns = document.querySelectorAll('.modal__close');
module_close__btns.forEach(btn => btn.addEventListener('click',function(){
    const parent = btn.closest('.modal');
    parent.classList.remove('active');
}))
////
//// закрытие модальной формы при клике на внешнюю область 
const modals = document.querySelectorAll('.modal');
modals.forEach(modal => modal.addEventListener('click', function(event){
    if(event.target.classList.contains('modal')){
        modal.classList.remove('active');
    }
}))
////
//// закрытие бургера при выборе рациона
const burger__btn__ration = document.querySelector('.big-boop__button');
burger__btn__ration.addEventListener('click',function(){
  let elem = document.querySelector('.menu-items');
  let elem_body = document.querySelector('body');
  let elem_burg = document.querySelector('.burger');
  elem.classList.toggle('active');
  elem_body.classList.toggle('noscroll');
  elem_burg.classList.toggle('active');
})
////
//// закрытие бургера при клике на лого
const burger__btn__logo = document.querySelector('.logo');
burger__btn__logo.addEventListener('click',function(){
  let elem_burg = document.querySelector('.burger');
  if (elem_burg.classList.contains('active')) {
    let elem = document.querySelector('.menu-items');
    let elem_body = document.querySelector('body');
    
    elem.classList.toggle('active');
    elem_body.classList.toggle('noscroll');
    elem_burg.classList.toggle('active');
  }
  
})
////
//// закрытие бургера при выборе пункта меню
const burger__btns = document.querySelectorAll('.menu-item');
burger__btns.forEach(btn => btn.addEventListener('click',function(){
  let elem = document.querySelector('.menu-items');
  let elem_body = document.querySelector('body');
  let elem_burg = document.querySelector('.burger');
  elem.classList.toggle('active');
  elem_body.classList.toggle('noscroll');
  elem_burg.classList.toggle('active');
}))
////



//// свайпер
const swiper1 = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView:1.2,
    //spaceBetween: 50,
    loop: false,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    breakpoints: {
        // when window width is >= 320px
        376: {
          slidesPerView: 4
          
        },
        // when window width is >= 480px
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        // // when window width is >= 640px
        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
      }
    
  });
  const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView:1,
    //spaceBetween: 50,
    loop: false,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    breakpoints: {
        // when window width is >= 320px
        376: {
          slidesPerView: 2
          
        },
        // when window width is >= 480px
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        // // when window width is >= 640px
        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
      }
    
  });




  ////
  //// выезжающий бургер
let burger__btn = document.querySelector('.burger__button-svg');
burger__btn.addEventListener('click',function(){
    let elem = document.querySelector('.menu-items');
    let elem_body = document.querySelector('body');
    let elem_burg = document.querySelector('.burger');
    elem.classList.toggle('active');
    elem_body.classList.toggle('noscroll');
    elem_burg.classList.toggle('active');
})
////
//// анимация лейблов в футере
const footer__inputs = document.querySelectorAll('.client-input input');
footer__inputs.forEach(inp => inp.addEventListener('focus',function(){
  
  let lab = inp.closest('.client-input');
  
  lab.classList.add('active');
}))
footer__inputs.forEach(inp => inp.addEventListener('blur',function(){
  
  let lab = inp.closest('.client-input');
  if (inp.value === '') {
    lab.classList.remove('active');
  } 
}))
////

