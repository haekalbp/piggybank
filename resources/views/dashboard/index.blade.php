@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hola, <span class="text-color">{{ auth()->user()->name }}!</span></h1>
</div>
<div class="container text-center">
    <div class="row g-5">

        <div class="col-md-3 bg-dark text-white rounded">
            <h1 class="h4">Today's Income</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">Weekly Income</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">Monthly Income</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">All Income</h1>
        </div>

    </div>
</div>
<div class="container text-center mt-5">
    <div class="row g-5">

        <div class="col-md-3 bg-dark text-white rounded">
            <h1 class="h4">Today's Expenditure</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">Weekly Expenditure</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">Monthly Expenditure</h1>
        </div>
        <div class="col-md-3">
            <h1 class="h4">All Expenditure</h1>
        </div>

    </div>
</div>

@endsection