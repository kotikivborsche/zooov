<div class="modal fade" id="faq_add-card-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить вопрос/ответ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

        <form action="faq_add_card.php" method="post" enctype="multipart/form-data">
          
          <div class="mb-3">
            <label for="faq_question" class="col-form-label">Вопрос</label>
            <textarea class="form-control" id="faq_question" name="faq_question"></textarea>
          </div>

          <div class="mb-3">
            <label for="faq_answer" class="col-form-label">Ответ</label>
            <textarea class="form-control" id="faq_answer" name="faq_answer"></textarea>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button id="faq_modal-add-button-id" type="submit"  class="btn btn-primary" >Добавить</button>
        </form>
      </div>

      
    </div>
  </div>
</div>