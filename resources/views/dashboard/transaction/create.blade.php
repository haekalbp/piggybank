<!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button> -->
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Transaction</h1>
</div>
          <div>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('store') }}" method="POST">
            @method('POST')
            {{ csrf_field() }}
              <div class="mb-3">
                <label for="date" class="col-form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date">
              </div>
              <div class="mb-3">
                <label for="type" class="col-form-label">Type</label>
                <select id="type" class="form-select" name="type">
                    <option value="expenditure">Expenditure</option>
                    <option value="income">Income</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="category" class="col-form-label">Category</label>
                <select class="form-select" name="category_id">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="total" class="col-form-label">Total</label>
                <input type="number" name="total" class="form-control" id="total">
              </div>
              <div class="mb-3">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button>
              </div>
            </form>
          </div>
@endsection