<?php
if(isset($_GET['item']) && $_GET['item']== 'faq'){
    if(isset($_GET['action']) && $_GET['action']== 'update'){
        faq_update_product($_GET['id']);
        
    }
}
?>
<div class="modal fade" id="faq_update-card-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование продукции</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

        <form action="faq_update_card.php" method="post" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="faq_question-u" class="col-form-label">Вопрос</label>
            <textarea class="form-control" id="faq_question-u" name="faq_question"><?=$_SESSION['upd-quest'];?></textarea>
        </div>

        <div class="mb-3">
            <label for="faq_answer-u" class="col-form-label">Ответ</label>
            <textarea class="form-control" id="faq_answer-u" name="faq_answer"><?=$_SESSION['upd-ans'];?></textarea>
        </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button href="#" id="faq_modal-upd-button-id" type="submit"  class="btn btn-primary" >Применить</button>
        </form>
      </div>

      
    </div>
  </div>
</div>
