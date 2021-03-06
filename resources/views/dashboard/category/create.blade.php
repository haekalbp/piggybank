<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3">Add New</button>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/category" method="POST">
        @csrf
          <div class="mb-3">
            <label for="type" class="col-form-label">Type</label>
            <select id="type" class="form-select" name="type">
                <option value="Expenditure">Expenditure</option>
                <option value="Income">Income</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
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