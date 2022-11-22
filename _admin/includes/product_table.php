<?php
include 'modal_delete.php';
include 'modal_restore.php';
include 'modal_add.php';
include 'modal_update.php';

if(isset($_GET['item']) && $_GET['item']== 'product'){
    if(isset($_GET['action']) && $_GET['action']== 'remove'){
        remove_product($_GET['id']);
    }
}
if(isset($_GET['item']) && $_GET['item']== 'product'){
    if(isset($_GET['action']) && $_GET['action']== 'restore'){
        restore_product($_GET['id']);
    }
}
if(isset($_GET['item']) && $_GET['item']== 'product'){
    if(isset($_GET['action']) && $_GET['action']== 'add'){
        add_product();
        
    }
}
// эта штука в modal_update.php чтобы нормально обновлялся $_SESSION
// if(isset($_GET['item']) && $_GET['item']== 'product'){
//     if(isset($_GET['action']) && $_GET['action']== 'update'){
//         update_product($_GET['id']);     
//     }
// }
if(isset($_GET['item']) && $_GET['item']== 'product'){
    if(isset($_GET['action']) && $_GET['action']== 'upd'){
        upd_product($_GET['id']);      
    }
}


?>

<table class="table table-hover">
    <h2>Карточки рационов</h2>
    <thead>
        <tr>
            <th scope="col">Пикча</th>
            <th scope="col">Название</th>
            <th scope="col">Состав</th>
            <th scope="col">Описание</th>
            <th scope="col">Вес</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $query = $pdo->query('SELECT * FROM `ration_cards` WHERE `status`= 0');
            foreach($query as $row){      
        ?>
        <tr>
            <th><img width="150px" class="img-thumbnail" src=<?php echo '../img/'. $row['picture']; ?>></th>
            <th><?php echo $row['title']; ?></th>
            <td><?php echo $row['comp']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['weight']; ?></td>
         
            <td><a href="?item=product&action=update&id=<?=$row['id']; ?>" class="btn btn-outline-warning modal-upd" >Редактировать</a></td>
            <td><a class="btn btn-outline-danger modal-del" data-bs-toggle="modal" data-bs-target="#delete-card-modal" data-id-del = "<?=$row['id']; ?>">Удалить</a></td>     
          </tr>    
        <?php        
            }
        ?>
    </tbody>
</table>
<a href="#" class="btn btn-outline-primary mt-5 mb-5" type="button" data-bs-toggle="modal" data-bs-target="#add-card-modal">Добавить новый рацион</a>
<!-- Корзина -->
<table class="table table-hover">
    <h2>Корзина</h2>
    <thead>
        <tr>
            <th scope="col">Пикча</th>
            <th scope="col">Название</th>
            <th scope="col">Состав</th>
            <th scope="col">Описание</th>
            <th scope="col">Вес</th>
            <th scope="col">Восстановить</th>
            
        </tr>
    </thead>
    <tbody class="opacity-75">
    <?php
            $query = $pdo->query('SELECT * FROM `ration_cards` WHERE `status`=1');
            foreach($query as $row){
                
        ?>
        

        <tr>
            <th><img width="100px" class="img-thumbnail" src=<?php echo '../img/'. $row['picture']; ?>></th>
            <th><?php echo $row['title']; ?></th>
            <td><?php echo $row['comp']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['weight']; ?></td>

            <td><a class="btn btn-outline-secondary modal-res" data-bs-toggle="modal" data-bs-target="#restore-card-modal" href="#" data-id-res = "<?=$row['id']; ?>">Восстановить</a></td>
            
        </tr>
        
        <?php  
            }
        ?>
    </tbody>
</table>


<?php

?>