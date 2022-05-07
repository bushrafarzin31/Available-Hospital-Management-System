
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
              <a class="nav-link" style="color:white;" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white;"href="about.html">Available Hospital</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"style="color:white;" href="{{url('patients_info')}}">Medical Services</a>
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
            
            <x-app-layout>
             </x-app-layout>
  
             

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

      <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{$doctors->image}}" alt="">
              <li class="nav-item">
              <a class="nav-link"style="color:white;" href="{{url('medical_services')}}">Medical Services</a>
            </li>
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div> 
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>

        @endforeach
            
      </div>
</div>
</div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>