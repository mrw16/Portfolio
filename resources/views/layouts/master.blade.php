<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MRW | Portfolio</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/unicons.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl/theme.default.min.css') !!}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/tooplate-style.css') !!}">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> MRW</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">Tentang</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Portofolio</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">CV</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.8688254191431!2d106.76064742919287!3d-6.58767436745201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4fd7ba41ded%3A0xb2eafc851e893406!2sBlk.%20G13-G14%20No.9%2C%20Padasuka%2C%20Ciomas%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016610!5e0!3m2!1sid!2sid!4v1641958070781!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Muhammad Rifqi Wahyudi</h3>
                  <p class="footer-text mb-0">+62 895 3233 97134</p>
                  <p><a href="mailto:hello@company.co">rifqiwahyudi16@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="https://www.linkedin.com/in/rifqi-wahyudi-19290a193/" class="uil uil-link-alt" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="https://instagram.com/mrw16_/" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="https://github.com/mrw16/" class="uil uil-server-connection" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>