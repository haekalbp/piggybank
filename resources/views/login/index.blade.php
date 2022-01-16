@extends('layouts.main')

@section('container')
<div class="row justify-content-center text-center mt-5">
    <div class="col-md-4">
      
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

        <main class="form-signin">
          <img class="mb-4 img-fluid img-profit" src="img/financial-profit.png" alt="gambar profit">
          <h1 class="h3 mb-3 fw-bold">Member Login</h1>
          
          <form action="/login" method="post">
            @csrf
        
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            <p class="mt-3 mb-3 text-muted font-none">Not a member yet? <a href="/register">Register now!</a> </p>
          </form>
        </main>
    </div>
</div>
@endsection