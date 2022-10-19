
<form class="modal" id="modal-1" action="create_ration.php" method="post" enctype="multipart/form-data">
        <div class="modal__wrapper">
           <div class="modal__close"><img src="img/X.png"></div>
           <div class="modal__content">
               <h3 class="modal__title">Рассчет рациона</h1>
               <p class="modal__description">Заполните информацию и мы свяжемся с вами, чтобы подсказать с подбором рациона для вашего хвостика. Или напишите нам в мессендерах WhatsApp и Telegram.</p>
               <form class="order-form">
                    <div class="order-form__field-wrapper">
                        <div class="order-form__radio">
                            <input class="order-form__text" name="type" id="type1" type="radio" />
                            <label class="" for="type1">Взрослая собака</label>
                        </div>
                        <div class="order-form__radio">
                            <input class="order-form__text" name="type" id="type2" type="radio" />
                            <label class="" for="type2">Щенок</label>
                        </div>
                    </div>
                    <div class="order-form__field-wrapper">
                        <input class="text-field order-form__field" type="text" name="ration_weight"/>
                        <label class="order-form__label">Вес (кг)</label>
                    </div>
                    <div class="order-form__field-wrapper">
                        <input class="text-field order-form__field" type="text" name="ration_age"/>
                        <label class="order-form__label">Возраст</label>
                    </div>
                    <div class="order-form__field-wrapper">
                        <input class="text-field order-form__field" type="text" name="ration_phone"/>
                        <label class="order-form__label">Телефон</label>
                    </div>
                    <div class="order-form__field-wrapper">
                        <input class="text-field order-form__field" type="text" name="ration_name"/>
                        <label class="order-form__label">Ваше имя</label>
                    </div>
                    <div class="order-form__field-wrapper">
                        <textarea class="textarea-field order-form__field" type="text" name="ration_question"></textarea>
                        <label class="order-form__label">Если у вашего хвостика есть особенности здоровья - напишите об этом...</label>
                    </div>
                    <button type="submit" class="order-form__btn button red-button">Рассчитать</button>
                
                </form>
            </div>
    
        </div>
</form>