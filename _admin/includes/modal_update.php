<?php
if(isset($_GET['item']) && $_GET['item']== 'product'){
    if(isset($_GET['action']) && $_GET['action']== 'update'){
        update_product($_GET['id']);
        
    }
}
?>

<div class="modal fade" id="update-card-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование продукции</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

        <form action="update_card.php" method="post" enctype="multipart/form-data">
        <!-- <form action="" method="post" enctype="multipart/form-data"> -->
          <div class="mb-3">
            <label for="ration-name-u" class="col-form-label">Название корма</label>
            <input type="text" class="form-control" id="ration-name-u" name="ration-name" value="<?=$_SESSION['upd-name'];?>">
          </div>

          <div class="mb-3">
            <label for="ration-include-u" class="col-form-label">Состав</label>
            <input type="text" class="form-control" id="ration-include-u" name="ration-include" value="<?=$_SESSION['upd-inc'];?>">
          </div>
          
          
          <div class="mb-3">
            <label for="ration-description" class="col-form-label">Описание</label>
            <textarea class="form-control" id="ration-description-u" name="ration-description"><?=$_SESSION['upd-desc'];?></textarea>
          </div>

          <div class="mb-3">
            <label for="ration-weight-u" class="col-form-label">Вес</label>
            <input type="text" class="form-control" id="ration-weight-u" name="ration-weight" value="<?=$_SESSION['upd-w'];?>">
          </div>

          <div class="form-file mb-3">
            <p>Ссыль на картонку</p>
            <input type="file" class="form-file-input" id="ration-picture-u" name="ration-picture">
            <label class="form-file-label" for="ration-picture-u">
            <span class="form-file-text"></span>
            <span class="form-file-button"></span>
            </label>
          </div>
          
          <div class="form-file mb-3">
            <p>Ссыль на картонку ГОСТА</p>
            <input type="file" class="form-file-input" id="ration-picture-gost-u" name="ration-picture-gost" >
            <label class="form-file-label" for="ration-picture-gost-u">
            <span class="form-file-text"></span>
            <span class="form-file-button"></span>
            </label>
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button href="#" id="modal-upd-button-id" type="submit"  class="btn btn-primary" >Применить</button>
        </form>
      </div>

      
    </div>
  </div>
</div>