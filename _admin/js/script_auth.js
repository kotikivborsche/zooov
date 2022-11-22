
// блокируем поля ввода если < 3 символов
// const authbtn = document.querySelector(".auth__button");
// const nameIn = document.querySelector("#floatingInput");
// const passIn = document.querySelector("#floatingPassword");
// authbtn.setAttribute('disabled',true);
// nameIn.oninput = function(){
//     if (nameIn.value.length < 3 || passIn.value.length < 3) {
//         authbtn.setAttribute('disabled',true); 
//     }
//     else {
//         authbtn.removeAttribute('disabled');
//     }
// }
// passIn.oninput = function(){
//     if (nameIn.value.length < 3 || passIn.value.length < 3) {
//         authbtn.setAttribute('disabled',true);
//     }
//     else {
//         authbtn.removeAttribute('disabled');
//     }
// }

///////////////////////////////////////////////////// карточки рационов /////////////////////////////////////////////////////////////////
//// передача id удаленной записи в модальное окно
var delet_buttons = document.querySelectorAll('.modal-del');
delet_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-del');
    
    const del_b = document.querySelector('#modal-del-id');
    const del_inp = document.querySelector('#modal-del-id-out');

    del_inp.textContent = "Будет удален элемент с id = "+attrib;
    
    del_b.setAttribute("href","?item=product&action=remove&id="+attrib);

}))

//// передача id восстановленной записи в модальное окно
var restor_buttons = document.querySelectorAll('.modal-res');
restor_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-res');
    
    const res_b = document.querySelector('#modal-res-id');
    const res_inp = document.querySelector('#modal-res-id-out');

    res_inp.textContent = "Будет восстановлен элемент с id = "+attrib;
    
    res_b.setAttribute("href","?item=product&action=restore&id="+attrib);

}))

//// передача id редактируемой записи в модальное окно
const upd_buttons = document.querySelectorAll('.modal-upd');
upd_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-upd');


    const upd_b = document.querySelector('#modal-upd-button-id');
    
    upd_b.setAttribute("href","?item=product&action=update&id="+attrib);
    // alert();
}))




////блокируем кнопку, если поля формы добавления карточки пустые
const rbut = document.querySelector("#modal-add-button-id");
if (rbut) {
    const rname = document.querySelector("#ration-name");
    const rincl = document.querySelector("#ration-include");
    const rdesc = document.querySelector("#ration-description");
    const rweig = document.querySelector("#ration-weight");

    rbut.setAttribute('disabled',true);
    rname.oninput = function(){
        if (rname.value.length < 1 || rincl.value.length < 1 || rdesc.value.length < 1 || rweig.value.length < 1 ) {
            rbut.setAttribute('disabled',true); 
        }
        else {
            rbut.removeAttribute('disabled');
        }
    }
    rincl.oninput = function(){
        if (rname.value.length < 1 || rincl.value.length < 1 || rdesc.value.length < 1 || rweig.value.length < 1 ) {
            rbut.setAttribute('disabled',true); 
        }
        else {
            rbut.removeAttribute('disabled');
        }
    }
    rdesc.oninput = function(){
        if (rname.value.length < 1 || rincl.value.length < 1 || rdesc.value.length < 1 || rweig.value.length < 1 ) {
            rbut.setAttribute('disabled',true); 
        }
        else {
            rbut.removeAttribute('disabled');
        }
    }
    rweig.oninput = function(){
        if (rname.value.length < 1 || rincl.value.length < 1 || rdesc.value.length < 1 || rweig.value.length < 1 ) {
            rbut.setAttribute('disabled',true); 
        }
        else {
            rbut.removeAttribute('disabled');
        }
    }
}
// открываем модалку для редактирования + формируем адрес
let strPath = ""+self.location;
const modal = new bootstrap.Modal(document.querySelector('#update-card-modal')); 
if (strPath.indexOf('http://localhost/zooov/_admin/index.php?item=product&action=update&id=') == 0) {
    
    modal.show();
}
// возвращаемся на нужную страничку, если админ передумал что-то редактировать
var myModalUpd = document.getElementById('update-card-modal')
myModalUpd.addEventListener('hidden.bs.modal', function (event) {
    self.location='index.php?item=product';
    //myModalUpd.modal('dispose');
})
  
////блокируем кнопку, если поля редактирования карточки пустые
const ubut = document.querySelector("#modal-upd-button-id");
if (ubut) {
    const uname = document.querySelector("#ration-name-u");
    const uincl = document.querySelector("#ration-include-u");
    const udesc = document.querySelector("#ration-description-u");
    const uweig = document.querySelector("#ration-weight-u");
    uname.oninput = function(){
        if (uname.value.length < 1 || uincl.value.length < 1 || udesc.value.length < 1 || uweig.value.length < 1 ) {
            ubut.setAttribute('disabled',true); 
        }
        else {
            ubut.removeAttribute('disabled');
        }
    }
    uincl.oninput = function(){
        if (uname.value.length < 1 || uincl.value.length < 1 || udesc.value.length < 1 || uweig.value.length < 1 ) {
            ubut.setAttribute('disabled',true); 
        }
        else {
            ubut.removeAttribute('disabled');
        }
    }
    udesc.oninput = function(){
        if (uname.value.length < 1 || uincl.value.length < 1 || udesc.value.length < 1 || uweig.value.length < 1 ) {
            ubut.setAttribute('disabled',true); 
        }
        else {
            ubut.removeAttribute('disabled');
        }
    }
    uweig.oninput = function(){
        if (uname.value.length < 1 || uincl.value.length < 1 || udesc.value.length < 1 || uweig.value.length < 1 ) {
            ubut.setAttribute('disabled',true); 
        }
        else {
            ubut.removeAttribute('disabled');
        }
    }
}
///////////////////////////////////////////////////// часто задаваемые вопросы /////////////////////////////////////////////////////////////////
//// передача id удаленной записи в модальное окно
var faq_delet_buttons = document.querySelectorAll('.faq_modal-del');
faq_delet_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-del');
    
    const del_b = document.querySelector('#faq_modal-del-id');
    const del_inp = document.querySelector('#faq_modal-del-id-out');

    del_inp.textContent = "Будет удален вопрос с id = "+attrib;
    
    del_b.setAttribute("href","?item=faq&action=remove&id="+attrib);

}))

//// передача id восстановленной записи в модальное окно
var faq_restor_buttons = document.querySelectorAll('.faq_modal-res');
faq_restor_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-res');
    
    const res_b = document.querySelector('#faq_modal-res-id');
    const res_inp = document.querySelector('#faq_modal-res-id-out');

    res_inp.textContent = "Будет восстановлен элемент с id = "+attrib;
    
    res_b.setAttribute("href","?item=faq&action=restore&id="+attrib);

}))

//// передача id редактируемой записи в модальное окно
const faq_upd_buttons = document.querySelectorAll('.faq_modal-upd');
faq_upd_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-upd');


    const upd_b = document.querySelector('#faq_modal-upd-button-id');
    
    upd_b.setAttribute("href","?item=faq&action=update&id="+attrib);
    // alert();
}))




////блокируем кнопку, если поля формы добавления карточки пустые
const faq_rbut = document.querySelector("#faq_modal-add-button-id");
if (faq_rbut) {
    const faq_rquest = document.querySelector("#faq_question");
    const faq_rans = document.querySelector("#faq_answer");

    faq_rbut.setAttribute('disabled',true);
    faq_rquest.oninput = function(){
        if (faq_rquest.value.length < 1 || faq_rans.value.length < 1) {
            faq_rbut.setAttribute('disabled',true); 
        }
        else {
            faq_rbut.removeAttribute('disabled');
        }
    }
    faq_rans.oninput = function(){
        if (faq_rquest.value.length < 1 || faq_rans.value.length < 1) {
            faq_rbut.setAttribute('disabled',true); 
        }
        else {
            faq_rbut.removeAttribute('disabled');
        }
    }
}

// открываем модалку для редактирования + формируем адрес
let faq_strPath = ""+self.location;
const faq_modal = new bootstrap.Modal(document.querySelector('#faq_update-card-modal')); 
if (faq_strPath.indexOf('http://localhost/zooov/_admin/index.php?item=faq&action=update&id=') == 0) {
    
    faq_modal.show();
}
// возвращаемся на нужную страничку, если админ передумал что-то редактировать
var faq_myModalUpd = document.getElementById('faq_update-card-modal')
faq_myModalUpd.addEventListener('hidden.bs.modal', function (event) {
    self.location='index.php?item=faq';
    //faq_myModalUpd.modal('dispose');
})
    
////блокируем кнопку, если поля формы добавления карточки пустые
const faq_ubut = document.querySelector("#faq_modal-upd-button-id");

const faq_uquest = document.querySelector("#faq_question-u");
const faq_uans = document.querySelector("#faq_answer-u");

faq_uquest.oninput = function(){
    if (faq_uquest.value.length < 1 || faq_uans.value.length < 1) {
        faq_ubut.setAttribute('disabled',true); 
    }
    else {
        faq_ubut.removeAttribute('disabled');
    }
}
faq_uans.oninput = function(){
    if (faq_uquest.value.length < 1 || faq_uans.value.length < 1) {
        faq_ubut.setAttribute('disabled',true); 
    }
    else {
        faq_ubut.removeAttribute('disabled');
    }
}
///////////////////////////////////////////////////// заказы /////////////////////////////////////////////////////////////////
//// передача id удаленной записи в модальное окно
var ord_delet_buttons = document.querySelectorAll('.ord_modal-del');
ord_delet_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-del');
    
    const del_b = document.querySelector('#ord_modal-del-id');
    const del_inp = document.querySelector('#ord_modal-del-id-out');

    del_inp.textContent = "Будет выполнен заказ с id = "+attrib;
    
    del_b.setAttribute("href","?item=order&action=remove&id="+attrib);

}))

//// передача id восстановленной записи в модальное окно
var ord_restor_buttons = document.querySelectorAll('.ord_modal-res');
ord_restor_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-res');
    
    const res_b = document.querySelector('#ord_modal-res-id');
    const res_inp = document.querySelector('#ord_modal-res-id-out');

    res_inp.textContent = "Будет восстановлен заказ с id = "+attrib;
    
    res_b.setAttribute("href","?item=order&action=restore&id="+attrib);

}))
///////////////////////////////////////////////////// основная информация /////////////////////////////////////////////////////////////////
//// передача id редактируемой записи в модальное окно
const m_upd_buttons = document.querySelectorAll('.m_modal-upd');
m_upd_buttons.forEach(btn => btn.addEventListener('click',function(){
    const attrib = btn.getAttribute('data-id-upd');

    const upd_b = document.querySelector('#m_modal-upd-button-id');
    
    upd_b.setAttribute("href","?item=main&action=update&id="+attrib);

}))


// открываем модалку для редактирования + формируем адрес
let m_strPath = ""+self.location;
const m_modal = new bootstrap.Modal(document.querySelector('#m_update-card-modal')); 
if (m_strPath.indexOf('http://localhost/zooov/_admin/index.php?item=main&action=update&id=') == 0) {
    
    m_modal.show();
}
// возвращаемся на нужную страничку, если админ передумал что-то редактировать
var m_myModalUpd = document.getElementById('m_update-card-modal')
m_myModalUpd.addEventListener('hidden.bs.modal', function (event) {
    self.location='index.php?item=main';

})
    
////блокируем кнопку, если поля формы пустые
const m_ubut = document.querySelector("#m_modal-upd-button-id");

const m_h1 = document.querySelector("#m_h1");
const m_h2 = document.querySelector("#m_h2");
const m_text = document.querySelector("#m_text");
const m_phone = document.querySelector("#m_phone");

m_h1.oninput = function(){
    if (m_h1.value.length < 1 || m_h2.value.length < 1 || m_text.value.length < 1 || m_phone.value.length < 1) {
        m_ubut.setAttribute('disabled',true); 
    }
    else {
        m_ubut.removeAttribute('disabled');
    }
}
m_h2.oninput = function(){
    if (m_h1.value.length < 1 || m_h2.value.length < 1 || m_text.value.length < 1 || m_phone.value.length < 1) {
        m_ubut.setAttribute('disabled',true); 
    }
    else {
        m_ubut.removeAttribute('disabled');
    }
}
m_text.oninput = function(){
    if (m_h1.value.length < 1 || m_h2.value.length < 1 || m_text.value.length < 1 || m_phone.value.length < 1) {
        m_ubut.setAttribute('disabled',true); 
    }
    else {
        m_ubut.removeAttribute('disabled');
    }
}
m_phone.oninput = function(){
    if (m_h1.value.length < 1 || m_h2.value.length < 1 || m_text.value.length < 1 || m_phone.value.length < 1) {
        m_ubut.setAttribute('disabled',true); 
    }
    else {
        m_ubut.removeAttribute('disabled');
    }
}


  



