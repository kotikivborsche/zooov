<!-- head -->
<?php
    include 'includes/header.php';
?>
<?php
    include 'includes/config.php';
?>

<!-- head menu for rations -->
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
                    <!-- <div class="menu-item"><a href="#barf">BARF</a></div> -->
                    <div class="menu-item"><a href="index.php">Главная</a></div>
                    <div class="menu-item"><a href="main_barf.php">BARF</a></div>
                    <!-- <div class="menu-item"><a href="#delivery">Доставка</a></div> -->
                    <div class="menu-item"><a href="main_delivery.php">Доставка</a></div>
                    <!-- <div class="menu-item"><a href="#faq">FAQ</a></div> -->
                    <div class="menu-item"><a href="main_faq.php">FAQ</a></div>
                    <!-- <div class="menu-item"><a href="#contacts">Контакты</a></div> -->
                    <div class="menu-item"><a href="main_contacts.php">Контакты</a></div>
                    <a href="index.php#ration" class="button red-button big-boop__button burger__ration-button">Выбрать рацион</a>
                </div>  
            </div>    
        </div>
    </header>

   

<div style = "border: 45px solid #961914; background-color:#961914;"></div>
<br>
    <!-- rations -->
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
            
                <div class="ration-cards ration-cards__rat">
                    
                    <?php
                        $query = $pdo->query('SELECT * FROM `ration_cards` ');
                        foreach($query as $row){
                           if ($row['status'] == 0) {
                            
                           
                    ?>
                    
                    <div class="ration-cards__item ration-cards__item__rat">
                        <img width="60px" class="ration-cards__item__mark" src=<?php echo 'img/'. $row['gost_pic']; ?> alt="">
                        <img class="ration-cards__item__img" src= <?php echo 'img/'. $row['picture']; ?> alt="">
                        <p class="ration-cards__item__for"><?php echo $row['title']; ?></p>
                        <p class="ration-cards__item__ing"><?php echo $row['comp']; ?></p>
                        <p class="ration-cards__item__desc"><?php echo $row['description']; ?></p>
                        <p class="ration-cards__item__w"><?php echo $row['weight']; ?></p>
                        <a href="#" class="button white-button ration__button">Заказать</a>
                    </div>

                    <?php
                        }}
                    ?>
                </div>
               
            <div class="ration-calculation">
               
                    <p class="ration-calculation__text">Рассчитаем в каком количестве нужно кормить вашего хвостика рационами Zooov</p>
                    
               
                    <a class="button red-button calculation-button  js-modal-open" data-open="#modal-1">Рассчитать</a>
                    
               

                <img class="ration-calculation__line" src="img/dashed_line.svg" alt="">
            </div>
        </div>
    </section>

 <!-- footer-->
<?php
    include 'includes/footer.php';
?> 