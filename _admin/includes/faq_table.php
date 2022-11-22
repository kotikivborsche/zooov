<?php
include 'faq_modal_delete.php';
include 'faq_modal_restore.php';
include 'faq_modal_add.php';
include 'faq_modal_update.php';

if(isset($_GET['item']) && $_GET['item']== 'faq'){
    if(isset($_GET['action']) && $_GET['action']== 'remove'){
        faq_remove_product($_GET['id']);
    }
}
if(isset($_GET['item']) && $_GET['item']== 'faq'){
    if(isset($_GET['action']) && $_GET['action']== 'restore'){
        faq_restore_product($_GET['id']);
    }
}
if(isset($_GET['item']) && $_GET['item']== 'faq'){
    if(isset($_GET['action']) && $_GET['action']== 'add'){
        faq_add_product();
        
    }
}
// эта штука в faq_modal_update.php чтобы нормально обновлялся $_SESSION
// if(isset($_GET['item']) && $_GET['item']== 'faq'){
//     if(isset($_GET['action']) && $_GET['action']== 'update'){
//         faq_update_product($_GET['id']);     
//     }
// }
if(isset($_GET['item']) && $_GET['item']== 'faq'){
    if(isset($_GET['action']) && $_GET['action']== 'upd'){
        faq_upd_product($_GET['id']);      
    }
}
?>

<table class="table table-hover">
    <h2>FAQ</h2>
    <thead>
        <tr>
            <th scope="col">Вопрос</th>
            <th scope="col">Ответ</th>     
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $query = $pdo->query('SELECT * FROM `questions` WHERE `status`= 0');
            foreach($query as $row){      
        ?>
        <tr>
            
            <th><?php echo $row['question']; ?></th>
            <td><?php echo $row['answer']; ?></td>
         
            <td><a href="?item=faq&action=update&id=<?=$row['id']; ?>" class="btn btn-outline-warning faq_modal-upd" >Редактировать</a></td>
            <td><a class="btn btn-outline-danger faq_modal-del" data-bs-toggle="modal" data-bs-target="#faq_delete-card-modal" data-id-del = "<?=$row['id']; ?>">Удалить</a></td>     
          </tr>    
        <?php        
            }
        ?>
    </tbody>
</table>
<a href="#" class="btn btn-outline-primary mt-5 mb-5" type="button" data-bs-toggle="modal" data-bs-target="#faq_add-card-modal">Добавить новый вопрос/ответ</a>
<!-- Корзина -->
<table class="table table-hover">
    <h2>Корзина</h2>
    <thead>
        <tr>
            <th scope="col">Вопрос</th>
            <th scope="col">Ответ</th>     
            <th scope="col">Восстановить</th>
            
        </tr>
    </thead>
    <tbody class="opacity-75">
    <?php
            $query = $pdo->query('SELECT * FROM `questions` WHERE `status`=1');
            foreach($query as $row){
                
        ?>
        

        <tr>
            <th><?php echo $row['question']; ?></th>
            <td><?php echo $row['answer']; ?></td>

            <td><a class="btn btn-outline-secondary faq_modal-res" data-bs-toggle="modal" data-bs-target="#faq_restore-card-modal" href="#" data-id-res = "<?=$row['id']; ?>">Восстановить</a></td>
            
        </tr>
        
        <?php  
            }
        ?>
    </tbody>
</table>

<?php

?>