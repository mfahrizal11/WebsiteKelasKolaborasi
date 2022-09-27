@section('header')
<li class="nav-item d-none m-auto d-sm-inline-block d-flex align-items-center">
    {{-- <a href="#" class="nav-link">Contact</a> --}}
    <a class="nav-link" style="color: #000 !important; cursor:text;">{{ $title }}</a>
</li> 
@endsection

@extends('layouts.main')

@section('container')
    <div class="bg-info py-2 px-3 rounded">
        <h3>Selamat datang di dashboard, {{ Auth()->user()->name }}</h3>
        <p>Sistem manajemen rusunawa untan</p>
    </div>
@endsection