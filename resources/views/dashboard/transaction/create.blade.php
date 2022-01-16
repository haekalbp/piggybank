@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Transaction</h1>
</div>

<div>
  <form action="/dashboard/transaction" method="POST">
  @csrf
    <div class="mb-3">
      <label for="date" class="col-form-label">Date</label>
      <input type="date" name="date" class="form-control" id="date" required>
    </div>
    <div class="mb-3">
      <label for="type" class="col-form-label">Type</label>
      <select id="type" class="form-select" name="type">
          <option value="Expenditure">Expenditure</option>
          <option value="Income">Income</option>
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
      <input type="number" name="total" class="form-control" id="total" required value="{{ old('total') }}">
    </div>
    <div class="mb-3">
      <label for="title" class="col-form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" required value="{{ old('title') }}">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/dashboard/transaction" class="btn btn-secondary">Cancel</a>
      <button class="btn btn-primary type="submit">Create Transaction</button>
    </div>
  </form>
</div>
@endsection