<div class="modal fade" id="edit_catalog" tabindex="-1" role="dialog" aria-labelledby="edit_catalog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form id='editCatalogRequest' action="POST">
        <div class="modal-body">
            <div class='row'>
              <div class='col-md-12'>
                <button type="button" class="close float-right btn-secondary" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <div class='row mb-5'>
              <div class='col-md-12 text-center'>
                  <h3>
                    EDIT <span id='title_name'><span>
                  </h3>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                <input type="hidden" name="id" class="edit-id">
                  Title
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='text' placeholder="Title"  name="title" required>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                  ISBN
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='text' placeholder="ISBN" name="isbn"  required>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                  Author
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='text' placeholder="Author" name="author"  required>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                  Publisher
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='text' placeholder="Publisher" name="publisher"  required>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                  Year Published
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='number' min="1900" step="1" placeholder="Year Published" name="year"  required>
              </div>
            </div>
            <div class='row pb-3'>
              <div class='col-md-4 text-center '>
                  Category
              </div>
              <div class='col-md-6 text-center'>
                  <input class='form-control' type='text'  placeholder="Category"  name="category" required>
              </div>
            </div>

            <div class='row mt-3'>
              <div class='col-md-12 text-center'>
                <button type="submit" class="btn btn-success float-center">Save</button>
              </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>