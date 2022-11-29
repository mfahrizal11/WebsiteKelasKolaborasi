<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artikel - Kelas Kolaborasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/1.jpg" rel="icon">
  <link href="/assets/img/1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.8.1
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('tampilan.navbar')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Artikel</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          
          <h1 class="mb-5">{{$post->title}}</h1>  

          <p class=" text-center"> Ditulis Oleh {{$post->user->name}}, Pada {{$post->created_at}} </p>
        @if ($post->image)    
          <img src="{{asset('storage/'. $post->image)}}" class="img-fluid">
        @else
          <img src="http://placeimg.com/640/360" class="img-fluid">
        @endif     
          
        <p>{!!$post->body!!}</p>
          <a href="/" class="btn btn-outline-dark">Kembali ke Halaman Post</a>
        </div>
      </div>
    </div>
             


            </div>
          </div>
          
        </div>

      </div>
<!-- End Portfolio Details Section -->

  @include('tampilan.footer')
</body>

</html>