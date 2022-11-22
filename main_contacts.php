<!-- head -->
<?php
    include 'includes/header.php';
?>
<?php
    include 'includes/config.php';
?>

<!-- head menu for barf -->
<header class="head__menu" id="header">
        <div class="container">         
            <div class="menu">
            <?php
                $query = $pdo->query('SELECT * FROM `main`');
                foreach($query as $row){  
            ?>

                <!-- <div class="logo"><a href="#header"><img src="img/menu_logo.png" alt=""></a></div> -->
                <div class="burger">
                    <div class="logo"><a href="index.php"><img  src="img/<?=$row['logo'];?>" alt=""></a></div>
                    
                    <svg class="burger__button-svg" width="29" height="18" viewBox="0 0 29 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="bar bar1" d="M1 9H28" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path class="bar bar2" d="M1 1H28" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path class="bar bar3" d="M1 17H28" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                <?php
                }
                ?>
                    
                </div>
                <div class="menu-items">
                    <div class="menu-item"><a href="index.php">Главная</a></div>
                    <div class="menu-item"><a href="main_barf.php">BARF</a></div>
                    <div class="menu-item"><a href="main_rations.php">Рационы</a></div>
                    <div class="menu-item"><a href="main_delivery.php">Доставка</a></div>
                    <div class="menu-item"><a href="main_faq.php">FAQ</a></div>
                    <a href="index.php#ration" class="button red-button big-boop__button burger__ration-button">Выбрать рацион</a>
                </div>

                
            </div>  

            
            
        </div>
    </header>

   

<div style = "border: 45px solid #961914; background-color:#961914;"></div>
<br>


<!-- with love and care -->
<?php
    include 'includes/about.php';
?>  


<section class="footer" id="contacts">


        <div class="footer-up">
            <div class="container">
                <div class="footer-content">

                    <div class="footer-contacts">
                        <h2 class="contacts__head">Контакты</h2>
                        <p class="contacts__text">Вы всегда можете с нами связаться по телефону или в мессенджерах</p>
                        <p class="contacts__phone">
                        <?php
                            $query = $pdo->query('SELECT * FROM `main`');
                            foreach($query as $row){
                                echo $row['phone'];
                            }
                        ?>
                        </p>
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

    

 
