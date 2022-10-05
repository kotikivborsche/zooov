//// scroll menu event
window.addEventListener('scroll', function() {
   let elem = this.document.querySelector('.head__menu');
   if (scrollY > 0){
        elem.classList.add('active');
   }
   else {
        elem.classList.remove('active');
   }
});
////

//// faq-questions
let elems = document.querySelectorAll('.faq-question');
elems.forEach(elem => elem.addEventListener('click', function () {
    if(elem.classList.contains('active')){
        elem.classList.remove('active');
    }
    else {
        elem.classList.add('active');
    }
    
}))
////

const module_open__buttons = document.querySelectorAll('.js-modal-open');
module_open__buttons.forEach(btn => btn.addEventListener('click',function(){
    const attribute = btn.getAttribute('data-open');
    const modal__form = document.querySelector(attribute);
    modal__form.classList.add('_active');
}))

const module_close__btns = document.querySelectorAll('.modal__close');

module_close__btns.forEach(btn => btn.addEventListener('click',function(){
    const parent = btn.closest('.modal');
    parent.classList.remove('_active');
   
}))


const modals = document.querySelectorAll('.modal');
modals.forEach(modal => modal.addEventListener('click', function(event){

    if(event.target.classList.contains('modal')){
        modal.classList.remove('_active');
    }

   




}))
