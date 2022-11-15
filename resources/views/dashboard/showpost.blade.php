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
        <li><strong>Category</strong>: Lain-Lain</li>
        <li><strong>Penulis</strong>: {{auth()->user()->name}} </li>
        <li><strong>Tanggal Artikel</strong>: 20 November 2022</li>
        </ul>
    </div>
    <div class="portfolio-description">
      <h2>Kelas Kolaborasi</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae minus provident nobis esse excepturi recusandae, sit rem, corporis obcaecati maiores aut beatae reprehenderit quis amet tenetur fugit ad deserunt. Est quaerat incidunt, ipsa dolorem veniam voluptatibus? Facilis sunt ullam, vero itaque ipsam quam voluptatem odit exercitationem ipsum architecto repellendus! Odio omnis animi dignissimos ducimus beatae tempore, itaque quas et facilis enim est eos eligendi in. Dicta, harum tempora. Fuga autem accusantium explicabo voluptatibus, laudantium excepturi a iste reprehenderit quis harum? Aspernatur labore veritatis commodi aperiam error ab. Veritatis fugiat exercitationem dolorem iste facilis consectetur, iure itaque, optio nemo enim molestiae accusamus, et assumenda ea. Illo magni architecto, quos assumenda magnam id necessitatibus incidunt iste harum! Vitae debitis nobis minima repellat voluptas veritatis autem libero labore, adipisci at illum nulla? Reprehenderit aperiam magni distinctio at consequatur alias beatae aut repudiandae, quisquam eaque ducimus mollitia reiciendis officia quam cumque eius placeat iusto sed laboriosam soluta. Iure quos earum, cum esse voluptatibus tenetur vero nemo voluptate molestias, sapiente molestiae quibusdam! Repellat officiis itaque, aut excepturi nisi magni. Fugiat ducimus eos necessitatibus voluptatum deserunt consectetur voluptas vel sed, ab molestias cumque! Ad ratione nesciunt magni voluptatum. Ratione laborum possimus necessitatibus debitis voluptas neque itaque.</p>
    </div>
    </div>
  </div>
  <a href="dashboard/posts" class="btn btn-success">
    <span data-feather="arrow-left"></span> Kembali ke Halaman Post
</a>
<a href="" class="btn btn-warning">
    <span data-feather="edit"></span> Edit Postingan
</a>
<a href="" class="btn btn-danger">
    <span data-feather="x-circle"></span> Hapus Postingan ini
</a>
@endsection