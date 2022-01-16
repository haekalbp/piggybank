@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Categories</h1>
    @include('dashboard.category.create')
</div>

      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                @include('dashboard.category.edit')
                    <form action="{{ route('destroy', $category->id)}}" method="POST" onSubmit="return confirm('Do you really want to delete this category?');">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white ">
                            <i class='bi bi-trash'></i>
                        </button>
                    </form>
                </div>
              </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Category is null.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
@endsection