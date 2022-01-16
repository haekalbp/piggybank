@extends('layouts.main')

@section('container')
<div class="row justify-content-center text-center mt-5">
    <div class="col-md-4">
        <main class="form-signin">
            <img class="mb-4 img-fluid img-profit" src="img/financial-profit.png" alt="gambar profit">
            <h1 class="h3 mb-3 fw-bold">Registration Form</h1>
          
          <form action="/register" method="post">
              @csrf

            <div class="form-floating">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required">
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
        
            <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>
            <p class="mt-3 mb-3 text-muted font-none">Already a member? <a href="/login">Login here.</a> </p>
          </form>
        </main>
    </div>
</div>
@endsection