<!-- Modal -->
<div class="modal fade" id="category-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="form_category" onsubmit="return false">
              <div class="form-group">
                  <label for="category_name">Nom</label>
                  <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Nom de la catégorie">
                  <small id="cat_error" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                  <label for="parent_cat">Parent catégorie</label>
                  <select class="form-control" name="parent_cat" id="parent_cat">

                  </select>
              </div>

              <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>