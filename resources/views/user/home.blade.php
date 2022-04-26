


  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Available Covid Hospital Management</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->    
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary " style="background-color:#7F525D;color:white;"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color:#6D7B8D;color:white;">
      <div class="container">
        <a class="navbar-brand"  href="#"><span class="text-primary" style="color:#7F525D;" >Covid</span>-Care</a>
        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active ">
              <a class="nav-link" style="color:white;" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white;"href="about.html">Available Hospital</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"style="color:white;" href="doctors.html">Medical Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color:white;"href="{{url('patients_info')}}">Patients Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white;" href="contact.html">Contact</a>
            </li>
            <!-- Authentication -->
            @if(Route::has('login'))

            @auth 
            <li class="nav-item">
    <a class="nav-link" style="background-color:#34282C;color:white;" href="{{url('myappointment')}}">My Appointment</a>
            </li>
            <x-app-layout>
             </x-app-layout>
  s
             

              @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"  style="background-color:#7F525D;color:white;" href="{{route('login')}}">Sign In  </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"  style="background-color:#7F525D;color:white;" href="{{route('register')}}">Sign Up </a>
            </li>
              @endauth
              @endif
          <!-- Authentication done -->


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
      x
</button>
{{session()->get('message')}}
</div>  
@endif
<!-- message returns to the board -->


  <!-- slide show -->
        <div>
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://wallpaperaccess.com/full/136934.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp2528637.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://c1.wallpaperflare.com/preview/224/10/460/hospital-ward-hospital-medical-room.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

  <!-- <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);"> -->
    <!-- <div class="hero-section"> -->
      <!-- <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1> -->
        <!-- <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div> -->

<!-- 
  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> .page-section -->
    <!-- div class="text container2">
            <img class="corona" src="https://api.hub.jhu.edu/factory/sites/default/files/styles/hub_xlarge/public/sars-cov-2_011521.jpg?itok=shomFjn4" alt="...">
            <h2 class="text_header">WHAT YOU NEED TO KNOW ABOUT COVID-19 VARIANTS </h2>


            <h4 style=color:"#1A132F;"> What's the concern about the new COVID-19 variants? Are they more contagious?</h4>

            <div>
              <p style="align:left;">
                Viruses constantly change through mutation. When a virus has one or more new mutations it’s called a variant of the original virus. Currently, the Centers for Disease Control and Prevention (CDC) has identified two variants of the
                virus (SARS-CoV-2) that causes coronavirus disease 2019 (COVID-19) as variants of concern.
              </p>

              <p>COVID-19 is caused by a virus called SARS-CoV-2, which stands for Severe Acute Respiratory Syndrome Coronavirus 2. Viruses are unable to survive and produce more viral copies (replicate) on their own. They survive by infecting a new
                host that is able to be infected. After a new host is exposed to a virus, the virus infects the host’s cells. Once inside the host cells, the virus takes over the cell’s machinery to produce more copies of the virus. This process of
                making new copies of a virus within a host cell is called viral replication.
              </p>
            </div>
          </div> -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1> WHAT YOU NEED TO KNOW ABOUT <br>COVID-19 VARIANTS</h1>
            <h4 style=color:"#1A132F;"> What's the concern about the new COVID-19 variants? Are they more contagious?</h4>
            <p style="align:center;">
                Viruses constantly change through mutation. When a virus has one or more new mutations it’s called a variant of the original virus. Currently, the Centers for Disease Control and Prevention (CDC) has identified two variants of the
                virus (SARS-CoV-2) that causes coronavirus disease 2019 (COVID-19) as variants of concern.
              </p>
            <p class="text-grey mb-4">COVID-19 is caused by a virus called SARS-CoV-2, which stands for Severe Acute Respiratory Syndrome Coronavirus 2. Viruses are unable to survive and produce more viral copies (replicate) on their own. They survive by infecting a new
                host that is able to be infected. After a new host is exposed to a virus, the virus infects the host’s cells. Once inside the host cells, the virus takes over the cell’s machinery to produce more copies of the virus. This process of
                making new copies of a virus within a host cell is called viral replication.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="https://api.hub.jhu.edu/factory/sites/default/files/styles/hub_xlarge/public/sars-cov-2_011521.jpg?itok=shomFjn4" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  <!-- .bg-light -->

@include('user.doctor')


<div>
              <h2 class="text_header">Digital Health</h2>
              <div class="health container-fluid">
                <div class="row">
                  <div class="health_tips col-lg-6">
                    <h3>Virtual Urgent Care</h3>
                    <ul>
                      <li style="align:center;">Convinient hours</li>
                      </li>
                      <ul>
                        <li>
                          8.00 am-midnight
                        </li>
                      </ul>
                      <li style="align:middle">
                        Expert Care
                      </li>
                      <ul>
                        <li>
                          Top most Specialists
                        </li>
                      </ul>
                      <li style="align:center;">Prescriptions</li>
                      <ul>
                        <li>
                          near to your pharmacy
                        </li>
                      </ul>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <img src="patient.png" class="virtual_urgent rounded mx-auto d-block" alt="...">
                  </div>
                </div>
              </div>
            </div>
  @include('user.latest')

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>