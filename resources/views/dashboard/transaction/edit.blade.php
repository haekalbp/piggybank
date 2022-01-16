<button type="button" class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-pencil"></i></button>

<div class="modal fade text-start" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Transaction</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('update', $transaction->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
          <div class="mb-3">
            <label for="date" class="col-form-label">Date</label>
            <input type="date" name="date" class="form-control" id="date" value="{{ $transaction->date }}">
          </div>
          <div class="mb-3">
            <label for="type" class="col-form-label">Type</label>
            <select id="type" class="form-select" name="type">
              <option value="{{ $transaction->type }}">Expenditure</option>
              <option value="{{ $transaction->type }}">Income</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="total" class="col-form-label">Total</label>
            <input type="number" name="total" class="form-control" id="total" value="{{ $transaction->total }}">
          </div>
          <div class="mb-3">
            <label for="title" class="col-form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $transaction->title }}">
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