<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelas Kolaborasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>
<body>
  @include('tampilan.navbar')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang di <span>Kelas Kolaborasi</span></h1>
      <h2>Pelayanan Teknologi Informasi</h2>
      <a href="#about" class="btn-get-started scrollto">Ayo Berkolaborasi</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Apa Yang Kami Lakukan</h2>
          <p>Mari Berkolaborasi Bersama Kami</p>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Pengelolaan Website Portal Digital</a></h4>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sistem Informasi Desa dan Media Sosial</a></h4>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Tentang Kami</h3>
            <p>
              Kelas Kolaborasi merupakan salah satu perusahaan dengan konsep yaitu berkolaborasi dengan berpakai pihak dalam memanfaatkan dan mengembangkan sistem teknologi informasi, komunikasi dan digitalisasi yang terintegrasi dalam pelayanan publik dan percepatan pengembangan ekonomi.
            </p>
            {{-- <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">        
        <div class="section-title">
          <h2>Artikel</h2>
        </div>
          @if ($post->count())
          <div class="card mb-3">
            @if ($post[0]->image)
              <img src="{{asset('storage/'. $post[0]->image)}}" class="img-fluid mx-auto d-block">
          @else
          <img src="http://placeimg.com/640/360" class="img-fluid mx-auto d-block">
          @endif
            <div class="card-body text-center">
              <a href= "/post/{{$post[0]->slug}}"><h1 class="card-title"> {{$post[0]->title}}</h1></a>
              <p class=" text-center"> Ditulis Oleh {{$post[0]->user->name}}, Pada {{$post[0]->created_at}} </p>
              <p class="card-text"> {{$post[0]->excerpt}}</p>
              <a href="/post/{{$post[0]->slug}}" class="text-decoration-none btn btn-primary">Lanjutkan Membaca</a>               
              </div>
          </div>  
          @else
            <p>Tidak ada Postingan disini</p>  
          @endif
          
          <div class="container">
            <div class="row">
              @foreach ($post->skip(1) as $post)
              <div class="col-md-4">
                <div class="card">
                  @if ($post->image)
                    <img src="{{asset('storage/'. $post->image)}}" class="mx-auto d-block" width="400" height="400">
                @else
                <img src="http://placeimg.com/640/360" class="img-fluid mx-auto d-block">
                @endif
                  <div class="card-body text-center">
                    <h5 class="card-title"> {{$post->title}}</h5>
                    <p><small class=" text-center"> Ditulis Oleh {{$post->user->name}}, Pada {{$post->created_at}}</small></p>
                    <p class="card-text"> {{$post->excerpt}}</p>
                    <a href="/post/{{$post->slug}}" class="text-decoration-none btn btn-primary">Lanjutkan Membaca</a>               
                    </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
      </div>
    </div>
    </section><!-- End Portfolio Section -->
    
    @include('tampilan.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>