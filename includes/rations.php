<section class="" id="ration">
        <div class="container">
            <div class="ration-header">
                <h2 class="ration-header__h2">
                    Рационы ZOOOV
                </h2>
                <p class="ration-header__p">
                    Система питания взрослой собаки не подойдет для щенка, поэтому мы создали разные
                    по составу рационы ZOOOV. Вы сможете заказать полноценное питание исходя из возраста, веса и даже вкусовых предпочтений вашего друга. ZOOOV  заботится о каждой собаке.
                </p>
            
            </div>
            <div class="swiper swiper1">
                <div class="ration-cards swiper-wrapper">
                    
                    <?php
                        $query = $pdo->query('SELECT * FROM `ration_cards` ');
                        foreach($query as $row){
                           
                    ?>
                    
                    <div class="ration-cards__item swiper-slide">
                        <img class="ration-cards__item__mark" src=<?php echo 'img/'. $row['gost_pic']; ?> alt="">
                        <img class="ration-cards__item__img" src= <?php echo 'img/'. $row['picture']; ?> alt="">
                        <p class="ration-cards__item__for"><?php echo $row['title']; ?></p>
                        <p class="ration-cards__item__ing"><?php echo $row['comp']; ?></p>
                        <p class="ration-cards__item__desc"><?php echo $row['description']; ?></p>
                        <p class="ration-cards__item__w"><?php echo $row['weight']; ?></p>
                        <a href="#" class="button white-button ration__button">Заказать</a>
                    </div>
                    <!-- <div class="ration-cards__item swiper-slide">
                        <img class="ration-cards__item__mark" src="img/card_12.png" alt="">
                        <img class="ration-cards__item__img" src="img/card_2.png" alt="">
                        <p class="ration-cards__item__for">Для щенков</p>
                        <p class="ration-cards__item__ing">Индейка/Говядина</p>
                        <p class="ration-cards__item__desc">Подходит для ежедневного кормления. Богат животными белками и Омега-3.</p>
                        <p class="ration-cards__item__w">700г / 500г / 300г / 150г / 100г</p>
                        <a href="#" class="button white-button ration__button">Заказать</a>
                    </div>
                    <div class="ration-cards__item swiper-slide">
                        <img class="ration-cards__item__mark" src="img/card_34.png" alt="">
                        <img class="ration-cards__item__img" src="img/card_3.png" alt="">
                        <p class="ration-cards__item__for">Для взрослых собак</p>
                        <p class="ration-cards__item__ing">Баранина/Кролик</p>
                        <p class="ration-cards__item__desc">Подходит для ежедневного кормления. Богат животными белками и Омега-3.</p>
                        <p class="ration-cards__item__w">700г / 500г / 300г / 150г / 100г</p>
                        <a href="#" class="button white-button ration__button">Заказать</a>
                    </div>
                    <div class="ration-cards__item swiper-slide">
                        <img class="ration-cards__item__mark" src="img/card_34.png" alt="">
                        <img class="ration-cards__item__img" src="img/card_4.png" alt="">
                        <p class="ration-cards__item__for">Для щенков</p>
                        <p class="ration-cards__item__ing">Баранина/Кролик</p>
                        <p class="ration-cards__item__desc">Подходит для ежедневного кормления. Богат животными белками и Омега-3.</p>
                        <p class="ration-cards__item__w">700г / 500г / 300г / 150г / 100г</p>
                        <a href="#" class="button white-button ration__button">Заказать</a>
                    </div> -->

                    <?php
                        }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="ration-calculation">
                <!-- <div class="ration-calculation__"> -->
                    <p class="ration-calculation__text">Рассчитаем в каком количестве нужно кормить вашего хвостика рационами Zooov</p>
                    
                <!-- </div> -->

                <!-- <div class="ration-calculation__button"> -->
                    <a  class="button red-button calculation-button  js-modal-open" data-open="#modal-1">Рассчитать</a>
                    
                <!-- </div> -->

                <img class="ration-calculation__line" src="img/dashed_line.svg" alt="">
            </div>
        </div>
    </section>