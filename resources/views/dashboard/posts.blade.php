@extends('dashboard.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang,{{auth()->user()->name}}</h1>
  </div>

  @if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{session ('success')}}
</div>
  @endif
<div class="table-responsive col-lg-8">
  <a href="/create" class="btn btn-primary mb-3">Buat Postingan baru</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($post as $post)
        <td>{{$loop->iteration}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name}}</td>
        <td>
            <a href="/dashboard/posts/{{$post->id}}" class="badge bg-info">
                <span data-feather="eye"></span>
            </a>
            <a href="/dashboard/posts/{{$post->id}}/edit" class="badge bg-warning">
                <span data-feather="edit"></span>
            </a>
            <form action="/dashboard/posts/{{$post->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Apa anda yakin ingin menghapus postingan ini?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>

@endsection