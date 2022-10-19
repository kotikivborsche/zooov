<section class="faq" id="faq">
        <div class="container">
             <div class="faq-container">
                <h2 class="faq-title">Частые вопросы</h2>
                <div class="faq-qutstions">
                    <?php
                        $query = $pdo->query('SELECT * FROM `questions` ');
                        foreach($query as $row){
                           
                    ?>
                    <div class="faq-question">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text"><?php echo $row['question']; ?></h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer"><?php echo $row['answer']; ?></div>
                    </div>

                    <?php
                        }
                           
                    ?>
                    <!-- <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Надо ли давать дополнительно витамины к рациону BARF?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>

                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">А если моя собака уже давно питается промышленным кормом и у нее нет проблем со здоровьем?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Можно ли смешивать натуральный корм и корм промышленного производства?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Могу ли я сам составить для своей собаки рацион по системе BARF?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Присутствует ли в ZOOOV рационах рыба?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Как перевести питомца на натуральное питание?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">Как готовить рацион ZOOOV?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div>
                    <div class="faq-question ">
                        <div class="faq-question__header">
                            <h2 class="faq-question__text">При переходе на рацион ZOOOV у собаки начались проблемы с ЖКТ.
                                Это нормально?</h2>
                            <svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="2" height="20" rx="1" fill="#961914"/>
                                <rect x="20" y="9" width="2" height="20" rx="1" transform="rotate(90 20 9)" fill="#961914"/>
                            </svg>
                        </div>
                        <div class="faq-question__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.</div>
                    </div> -->
                    
                </div>
             </div>
        </div>
    </section>