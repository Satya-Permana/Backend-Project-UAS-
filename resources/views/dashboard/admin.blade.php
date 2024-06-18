@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Admin Dashboard</h1>
            <p>Selamat datang, {{ Auth::user()->name }}. Anda login sebagai Admin.</p>
        </div>
    </div>
</div>
@endsection