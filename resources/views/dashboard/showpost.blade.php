@extends('dashboard.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang,{{auth()->user()->name}}</h1>
  </div>
  <div class="row mb-5">
  <div class="col-lg-10">
    <div class="portfolio-info">
      <h3>Informasi Artikel</h3>
      <ul>
        <li><strong>Penulis</strong>: {{$post->user->name}}  </li>
        <li><strong>Tanggal Artikel</strong>: {{$post->created_at}}</li>
        </ul>
    </div>
    <div class="portfolio-description">
      <ul>
        <div class="float-left mr-3 img-fluid">
          <img src="http://placeimg.com/640/360" alt="">
        </div>
        <h2 class="text-center">{{$post->title}}</h2>
        <p>{!!$post->body!!}</p>
      </ul>
    </div>
    </div>
  </div>
  <a href="/dashboard/posts" class="btn btn-success">
    <span data-feather="arrow-left"></span> Kembali ke Halaman Post
</a>
<a href="" class="btn btn-warning">
    <span data-feather="edit"></span> Edit Postingan
</a>
<form action="/dashboard/posts/{{$post->id}}" method="POST" class="d-inline">
  @method('delete')
  @csrf
  <button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus postingan ini?')"><span data-feather="x-circle"></span>Hapus</button>
</form>
@endsection