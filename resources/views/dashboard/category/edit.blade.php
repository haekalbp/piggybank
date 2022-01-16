@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div>
  <form action="/dashboard/category/{{ $category->id }}" method="POST">
  @method('put')
  @csrf
    <div class="mb-3">
      <label for="name" class="col-form-label">Name</label>
      <input type="text" name="name" class="form-control" id="name" required value="{{ $category->name }}">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/dashboard/category" class="btn btn-secondary">Cancel</a>
      <button class="btn btn-primary type="submit">Edit Category</button>
    </div>
  </form>
</div>
@endsection