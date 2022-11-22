<section class="big-boop" id="big-boop">

        <div class="container">
            <div class="big-boop__content">
                
                <h1 class="big-boop__h1">
                    <?php
                    $query = $pdo->query('SELECT * FROM `main`');
                    foreach($query as $row){
                        echo $row['head_text_1'];
                    
                    ?>
                </h1>
                <p class="big-boop__p">  
                    
                <?php
                    echo $row['head_text_2'];
                }   
                ?>
                </p>
                
                <a href="#ration" class="button red-button big-boop__button">Выбрать рацион</a>
            </div>
        </div>
        <img class="zooov-pic" src="img/menu_zooov.svg" alt="">
        
    </section>