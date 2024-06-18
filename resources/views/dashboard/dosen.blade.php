@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dosen Dashboard</h1>
            <p>Selamat datang, {{ Auth::user()->name }}. Anda login sebagai Dosen.</p>
        </div>
    </div>
</div>
@endsection