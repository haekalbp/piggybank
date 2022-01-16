@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hola, <span class="text-color">{{ auth()->user()->name }}!</span></h1>
</div>
<div class="container text-center">
    <div class="row g-5">

        <div class="col-3 bg-secondary text-white rounded">
            <h1 class="h5 mt-3 mb-4">Today's Income</h1>
            <h2 class="h4 mb-3">Rp. 120.000,-</h2>
            <p class="mb-3">17-01-2022</p>
        </div>
        <div class="col-3 bg-primary text-white rounded">
            <h1 class="h5 mt-3 mb-4">Monthly Income</h1>
            <h2 class="h4 mb-3">Rp. 840.000,-</h2>
            <p class="mb-3">Jan</p>
        </div>
        <div class="col-3 bg-danger text-white rounded">
            <h1 class="h5 mt-3 mb-4">Annual Income</h1>
            <h2 class="h4 mb-3">Rp. 6.242.000,-</h2>
            <p class="mb-3">2022</p>
        </div>
        <div class="col-3 bg-success text-white rounded">
            <h1 class="h5 mt-3 mb-4">All Income</h1>
            <h2 class="h4 mb-3">Rp. 82.732.000,-</h2>
            <p class="mb-3">Total</p>
        </div>
        

    </div>
</div>
<div class="container text-center mt-5">
    <div class="row g-5">

        <div class="col-md-3 bg-secondary text-white rounded">
            <h1 class="h5 mt-3 mb-4">Today's Expenditure</h1>
            <h2 class="h4 mb-3">Rp. 81.000,-</h2>
            <p class="mb-3">17-01-2022</p>
        </div>
        <div class="col-md-3 bg-primary text-white rounded">
            <h1 class="h5 mt-3 mb-4">Monthly Expenditure</h1>
            <h2 class="h4 mb-3">Rp. 449.000,-</h2>
            <p class="mb-3">Jan</p>
        </div>
        <div class="col-md-3 bg-danger text-white rounded">
            <h1 class="h5 mt-3 mb-4">Annual Expenditure</h1>
            <h2 class="h4 mb-3">Rp. 2.631.000,-</h2>
            <p class="mb-3">2022</p>
        </div>
        <div class="col-md-3 bg-success text-white rounded">
            <h1 class="h5 mt-3 mb-4">All Expenditure</h1>
            <h2 class="h4 mb-3">Rp. 12.812.000,-</h2>
            <p class="mb-3">Total</p>
        </div>

    </div>
</div>

@endsection