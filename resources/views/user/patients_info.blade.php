



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

  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
      x
</button>
{{session()->get('message')}}
</div>  
@endif
<!-- message returns to the board -->

<div class="page-section" >
    <div class="container" >
      <h1 class="text-center wow fadeInUp">Patients Information</h1>

      <form class="main-form" action="{{url('patients_info')}}" method="POST" syle="background-image:Child-Vaccine.jpg">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name"class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email"class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date"class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          
          </div><div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message"  id="message" class="form-control" rows="6" placeholder="Enter details.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
  
     
  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
