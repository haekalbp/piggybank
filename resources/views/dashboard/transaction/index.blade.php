@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Transactions</h1>
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="/dashboard/transaction/create">Add New</a></button>
</div>

      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Date</th>
              <th scope="col">Type</th>
              <th scope="col">Category</th>
              <th scope="col">Total</th>
              <th scope="col">Title</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($transactions as $transaction)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $transaction->date }}</td>
              <td>{{ $transaction->type}} </td>
              <td>{{ $transaction->category->name }}</td>
              <td>{{ $transaction->total }}</td>
              <td>{{ $transaction->title }}</td>
              <td>
                <div class="btn-group " role="group " aria-label="Basic example">
                    @include('dashboard.transaction.edit')
                    <form action="{{ route('destroy', $transaction->id)}}" method="POST" onSubmit="return confirm('Do you really want to delete this transaction?');">
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
                <td colspan="5">Transaction is null.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
@endsection