<?php
include 'ord_modal_delete.php';
include 'ord_modal_restore.php';


if(isset($_GET['item']) && $_GET['item']== 'order'){
    if(isset($_GET['action']) && $_GET['action']== 'remove'){
        ord_remove_product($_GET['id']);
    }
}
if(isset($_GET['item']) && $_GET['item']== 'order'){
    if(isset($_GET['action']) && $_GET['action']== 'restore'){
        ord_restore_product($_GET['id']);
    }
}



?>

<table class="table table-hover">
    <h2>Заказы</h2>
    <thead>
        <tr>
            
            <th scope="col">Номер заказа</th>
            <th scope="col">Владелец</th>
            <th scope="col">Телефон</th>
            <th scope="col">Вес питомца</th>
            <th scope="col">Возраст питомца</th>
            <th scope="col">Сообщение владельца</th>
            <th scope="col">Выполнить</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
            $query = $pdo->query('SELECT * FROM `ration_asks` WHERE `status`= 0');
            foreach($query as $row){      
        ?>
        <tr>
            
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['message']; ?></td>
         
              
            <td><a class="btn btn-outline-success ord_modal-del" data-bs-toggle="modal" data-bs-target="#ord_delete-card-modal" data-id-del = "<?=$row['id']; ?>">Выполнить</a></td>
        </tr>    
        <?php        
            }
        ?>
    </tbody>
</table>
<!-- Корзина -->
<table class="table table-hover">
    <h2>Выполненные заказы</h2>
    <thead>
        <tr>
            <th scope="col">Номер заказа</th>
            <th scope="col">Владелец</th>
            <th scope="col">Телефон</th>
            <th scope="col">Вес питомца</th>
            <th scope="col">Возраст питомца</th>
            <th scope="col">Сообщение владельца</th>
            <th scope="col">Отменить выполнение</th>
            
        </tr>
    </thead>
    <tbody class="opacity-75">
    <?php
            $query = $pdo->query('SELECT * FROM `ration_asks` WHERE `status`=1');
            foreach($query as $row){
                
        ?>
        

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['message']; ?></td>

            <td><a class="btn btn-outline-secondary ord_modal-res" data-bs-toggle="modal" data-bs-target="#ord_restore-card-modal" href="#" data-id-res = "<?=$row['id']; ?>">Восстановить</a></td>
            
        </tr>
        
        <?php  
            }
        ?>
    </tbody>
</table>


<?php

?>