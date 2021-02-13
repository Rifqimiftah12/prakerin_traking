
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Traking Covid - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/user/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/user/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/user/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/user/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/user/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/user/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/user/vendor/owl.carousel/user/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#hero">Traking Covid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/user/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"></li>
          <li><a href="#hero">Home</a></li>
          <li><a href="#counts">Data Kasus</a></li>
          <li><a href="#provinsi">Provinsi</a></li>
          <li><a href="#global">Dunia</a></li>
          <li><a href="#team">Tim</a></li>
          <li><a href="#contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{asset('assets/user/img/slide/slide-4.jpg')}}">
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url({{asset('assets/user/img/slide/slide-5.jpg')}}">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Apa Itu Virus Corona</h2>
                <p class="animate__animated animate__fadeInUp">
                Corona merupakan keluarga virus yang telah lama ada dan diketahui menyebabkan penyakit pada hewan serta manusia.
                Beberapa jenis virus corona yang telah teridentifikasi memicu penyakit yang menyebabkan kematian,
                seperti sindrom pernapasan Timur Tengah (MERS) dan sindrom pernapasan akut berat (SARS).
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url({{asset('assets/user/img/slide/slide-6.jpg')}}">
            <div class="carousel-background"><img src="{{asset('assets/user/img/slide/slide-6.jpg')}}"alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Cara Memutuskan Rantai Penularan Virus Corona</h2>
                <p class="animate__animated animate__fadeInUp">
                Berdiam di rumah menjadi salah satu solusi terbaik dalam memutus rantai penularan virus tersebut.
                Sifat virus Corona adalah mampu berkembang biak dengan cara membelah diri dan sering bermutasi.
                Ini sangat rentan apabila orang yang tidak patuh untuk tinggal di rumah terpapar berulang-ulang oleh pembawa virus</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
   <div class="section-title">
          <br><h2>Data Kasus Covid-19</h2>
    </div>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <p><h5><strong>Total Positif</strong></h5></p>
              <i class="icofont-open-mouth"></i>
              <span data-toggle="counter-up">{{number_format($positif)}} </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <p><h5><strong>Total Sembuh</strong></h5></p>
              <i class="icofont-laughing"></i>
              <span data-toggle="counter-up">{{number_format($sembuh)}}</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <p><h5><strong>Total Meninggal</strong></h5></p>
              <i class="icofont-worried"></i>
              <span data-toggle="counter-up">{{number_format($meninggal)}}</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <p><h5><strong>Dunia</strong></h5></p>
              <i class="icofont-ui-browser"></i>
              <span data-toggle="counter-up"><?php echo $getglobal['value'] ?></span>
            </div>
          </div>
      </div>
    </section><!-- End Counts Section -->
    
    <!-- ======= About Section ======= -->
    <section id="provinsi" class="provinsi">
    <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi </h2>
        </div>
      <div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-body">
                  <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
              <table class="table table-bordered table-striped mb-0 "  width="100%">
                <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
            </tr>
        </thead>
                <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($data as $tmpl)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$tmpl->nama_provinsi}}</td>
                    <td>{{number_format($tmpl->jumlah_positif)}}</td>
                    <td>{{number_format($tmpl->jumlah_sembuh)}}</td>
                    <td>{{number_format($tmpl->jumlah_meninggal)}}</td>
                </tbody>
                @endforeach
                </tbody>
                </table>
								</div>
							</div><!-- COL END -->
						</div>
    </section><!-- End About Section -->

    <!-- ======= Global Section ======= -->
    <section id="global" class="global">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Dunia</h2>
        </div>
      <div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-body">
                  <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
              <table class="table table-bordered table-striped mb-0 "  width="100%">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Negara</center></th>
                    <th scope="col"><center>Jumlah Positif</center></th>
                    <th scope="col"><center>Jumlah Sembuh</center></th>
                    <th scope="col"><center>Jumlah Meninggal</center></th>
                  </tr>
                </thead>
              <tbody>
              @php
                $no = 1;
              @endphp
                @foreach($globall as $data)
                    <tr>
                      <td> <?php echo $no++ ?></td>
                      <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                      <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                      <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                      <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                    </tr>
                  @endforeach
                </tbody>
                </table>
								</div>
							</div><!-- COL END -->
						</div>
    </section><!-- End Global Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Tim</h2>
          <p>Kami hadir untuk menyediakan informasi sekitar covid-19 dan juga membantu masyarakat</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member">
              <img src="{{asset('assets/user/img/team/iki.JPEG')}}"class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rifqi Miftahudin</h4>
                  <!-- <span>Chief Executive Officer</span> -->
                  <!-- <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{asset('assets/user/img/team/ajay.JPEG')}}"class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Achmad Maulana Fajar Rosadi</h4>
                  <!-- <span>Product Manager</span> -->
                  <!-- <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('assets/user/img/team/ilham.JPEG')}}"class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ilham Ahmad Samsudin</h4>
                  <!-- <span>CTO</span> -->
                  <!-- <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{asset('assets/user/img/team/hilmi.JPEG')}}"class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hilmi Fadhilah Darmawan</h4>
                  <!-- <span>Accountant</span> -->
                  <!-- <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
          <h2>Hubungi Kami</h2>
         <p class="gr-text-8 mb-13">Berikut informasi kontak yang bisa digunakan untuk berbagai keperluan.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Lokasi</h3>
              <address>JL.Situtarate - Cibaduyut, Kab.Bandung</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="icofont-phone"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:++6281285916892">+62 812 8591 6892</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="icofont-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">trakingcovid19@gmail.com</a></p>
            </div>
          </div>

        </div>

        <!-- <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div> -->
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Traking Covid</h3>
              <p>
                JL.Situtarate - Cibaduyut <br>
                Kab.Bandung<br><br>
                <strong>Telepon:</strong> +62 812 8591 6892<br>
                <strong>Email:</strong> trakingcovid19@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Data Kasus</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Provinsi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dunia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tim</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pelayanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengembang Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Manajemen Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemasaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Grafis</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter kami</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Hak Cipta <strong><span>Traking Covid</span></strong>. Seluruh Hak Cipta
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
          Dirancang oleh <a href="https://bootstrapmade.com/">Kelompok1</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/user/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/user/js/main.js')}}"></script>

</body>

</html>