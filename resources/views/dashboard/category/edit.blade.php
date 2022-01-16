<button type="button" class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#exampleModal4"><i class="bi bi-pencil"></i></button>

<div class="modal fade text-start" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update', $category->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
            <div class="mb-3">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}">
            </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>