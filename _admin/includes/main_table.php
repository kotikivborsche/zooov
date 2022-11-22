<?php
include 'main_modal_update.php';

if(isset($_GET['item']) && $_GET['item']== 'main'){
    if(isset($_GET['action']) && $_GET['action']== 'upd'){
        m_upd_product($_GET['id']);      
    }
}


?>

<table class="table table-hover">
    <h2>Информация на сайте</h2>
    <thead>
        <tr>
            <th scope="col">Логотип</th>
            <th scope="col">Главный заголовок</th>
            <th scope="col">Пояснение к заголовку</th>
            <th scope="col">Текст "Забота о Вас"</th>
            <th scope="col">Телефон в подвале</th>
            
            <th scope="col">Редактировать</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
            $query = $pdo->query('SELECT * FROM `main`');
            foreach($query as $row){      
        ?>
        <tr>
            <th><img width="150px" class="img-thumbnail" src=<?php echo '../img/'. $row['logo']; ?>></th>
            <th><?php echo $row['head_text_1']; ?></th>
            <td><?php echo $row['head_text_2']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td><?php echo $row['phone']; ?></td>
         
            <td><a href="?item=main&action=update&id=<?=$row['id']; ?>" class="btn btn-outline-warning m_modal-upd" >Редактировать</a></td>
               
          </tr>    
        <?php        
            }
        ?>
    </tbody>
</table>
