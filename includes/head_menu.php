<header class="head__menu" id="header">
        <div class="container">         
            <div class="menu">
            <?php
                $query = $pdo->query('SELECT * FROM `main`');
                foreach($query as $row){  
            ?>

                <!-- <div class="logo"><a href="#header"><img  src="img/menu_logo.png" alt=""></a></div> -->
                <div class="burger">
                    <div class="logo"><a href="#big-boop"><img  src="img/<?=$row['logo'];?>" alt=""></a></div>
                    
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
                    <div class="menu-item"><a href="main_barf.php">BARF</a></div>
                    <div class="menu-item"><a href="main_rations.php">Рационы</a></div>
                    <div class="menu-item"><a href="#zooov">ZOOOV</a></div>
                    <div class="menu-item"><a href="#about">О нас</a></div>
                    <div class="menu-item"><a href="main_delivery.php">Доставка</a></div>
                    <div class="menu-item"><a href="main_faq.php">FAQ</a></div>
                    <div class="menu-item"><a href="main_contacts.php">Контакты</a></div>
                    <a href="#ration" class="button red-button big-boop__button burger__ration-button">Выбрать рацион</a>
                </div>     
            </div>      
        </div>
    </header>