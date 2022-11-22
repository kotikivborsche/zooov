<section class="footer" id="contacts">

        <div class="footer-up">
            <div class="container">
                <div class="footer-content">

                    <div class="footer-contacts">
                        <h2 class="contacts__head">Контакты</h2>
                        <p class="contacts__text">Вы всегда можете с нами связаться по телефону или в мессенджерах</p>
                        <p class="contacts__phone">+7 (900)000-00-00</p>
                        <div class="pink-button"><a class="button contacts-button whatsapp">Написать в WhatsApp</a></div>
                        <div class="pink-button"><a class="button contacts-button telegram">Написать в Telegram</a></div>
                        <p class="contacts__text">Подписывайтесь на наш <a class="contacts__inst" href="https://www.instagram.com/zooov.ru">Instagram</a>
                            и следите за новостями</p>
                    </div>

                    <form class="footer-mail" action="create.php" method="post" enctype="multipart/form-data">

                        <div class="footer-mail__header">
                            <h3 class="mail__h3">Остались вопросы?</h3>
                            <p class="mail__p">Напишите нам и мы обязательно подробно на них ответим.</p>
                        </div>
                        <div class="client-data">
                            <!-- <div class="small__name">Имя</div> -->
                            <div class="client-input active">
                                <label class="name__label" for="red-input__name">Имя</label>
                                <input class="red-input red-input__name" type="text" value="Иван Иванов" name="footer_name">
                            </div>
                            <!-- <div class="small__email">Email</div> -->
                            <div class="client-input">
                                <label class="email__label" for="red-input__name">Email</label>
                                <input class="red-input red-input__email" type="text" value="" name="footer_email">
                            </div>
                        </div>
                        <div class="client-question">
                            <textarea name="footer_question" id="" placeholder="Ваш вопрос..." class="red-input big-input"></textarea>
                            
                        </div>
                        <div class="client-send">
                            <label class="form__checkbox-label">
                                
                                <input type="checkbox" name="" id="" class="form__checkbox">
                                <div class="form__fake-checkbox"></div>
                                <p>Даю согласие на обработку
                                персональных данных</p>
                            </label>

                            <button type="submit" class="button pale-button js-modal-open" data-open="#modal-2">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="footer-down">
            <div class="container">
                <div class="footer-down-content">
                    <p class="footer-down__item oferta">ИП Коваленко Евгений Геннадьевич ИНН784215731801, адрес производства г. Санкт-Петербург 17-я линия В.О 66, пом. 2/07</p>
                    <a href="#" class="footer-down__item">Публичная оферта</a>
                    <a href="#" class="footer-down__item">Политика конфеденциальности</a>
                </div>
             
            </div>
        </div>
        
    </section>
    
    <?php
    include 'includes/modal_forms.php';
    ?>  


    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script/script.js"></script>
</body>
</html>