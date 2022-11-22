<?php
if(isset($_GET['item']) && $_GET['item']== 'main'){
    if(isset($_GET['action']) && $_GET['action']== 'update'){
        m_update_product($_GET['id']); 
    }
}
?>

<div class="modal fade" id="m_update-card-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование продукции</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

        <form action="main_update_card.php" method="post" enctype="multipart/form-data">
        <!-- <form action="" method="post" enctype="multipart/form-data"> -->
          <div class="mb-3">
            <label for="m_h1" class="col-form-label">Главный заголовок</label>
            <input type="text" class="form-control" id="m_h1" name="m_h1" value="<?=$_SESSION['m_upd-h1'];?>">
          </div>

          <div class="mb-3">
            <label for="m_h2" class="col-form-label">Пояснение главного заголовка</label>
            <input type="text" class="form-control" id="m_h2" name="m_h2" value="<?=$_SESSION['m_upd-h2'];?>">
          </div>
          
          
          <div class="mb-3">
            <label for="m_text" class="col-form-label">Текст "Забота"</label>
            <textarea class="form-control" id="m_text" name="m_text"><?=$_SESSION['m_upd-t'];?></textarea>
          </div>

          <div class="mb-3">
            <label for="m_phone" class="col-form-label">Телефон</label>
            <input type="text" class="form-control" id="m_phone" name="m_phone" value="<?=$_SESSION['m_upd-p'];?>">
          </div>

          <div class="form-file mb-3">
            <p>Ссыль на лого</p>
            <input type="file" class="form-file-input" id="m_logo" name="m_logo">
            <label class="form-file-label" for="m_logo">
            <span class="form-file-text"></span>
            <span class="form-file-button"></span>
            </label>
          </div>
          
          
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button href="#" id="m_modal-upd-button-id" type="submit"  class="btn btn-primary" >Применить</button>
        </form>
      </div>

      
    </div>
  </div>
</div>