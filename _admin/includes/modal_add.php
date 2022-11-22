<div class="modal fade" id="add-card-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить продукцию</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

        <form action="add_card.php" method="post" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="ration-name" class="col-form-label">Название корма</label>
            <input type="text" class="form-control" id="ration-name" name="ration-name">
          </div>

          <div class="mb-3">
            <label for="ration-include" class="col-form-label">Состав</label>
            <input type="text" class="form-control" id="ration-include" name="ration-include">
          </div>
          
          
          <div class="mb-3">
            <label for="ration-description" class="col-form-label">Описание</label>
            <textarea class="form-control" id="ration-description" name="ration-description"></textarea>
          </div>

          <div class="mb-3">
            <label for="ration-weight" class="col-form-label">Вес</label>
            <input type="text" class="form-control" id="ration-weight" name="ration-weight">
          </div>

          <div class="form-file mb-3">
            <p>Ссыль на картонку</p>
            <input type="file" class="form-file-input" id="ration-picture" name="ration-picture">
            <label class="form-file-label" for="ration-picture">
            <span class="form-file-text"></span>
            <span class="form-file-button"></span>
            </label>
          </div>
          
          <div class="form-file mb-3">
            <p>Ссыль на картонку ГОСТА</p>
            <input type="file" class="form-file-input" id="ration-picture-gost" name="ration-picture-gost">
            <label class="form-file-label" for="ration-picture-gost">
            <span class="form-file-text"></span>
            <span class="form-file-button"></span>
            </label>
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button id="modal-add-button-id" type="submit"  class="btn btn-primary" >Добавить</button>
        </form>
      </div>

      
    </div>
  </div>
</div>