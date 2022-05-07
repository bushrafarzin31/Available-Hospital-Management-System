<!DOCTYPE html>
<html lang="en">
  <head>


    <style type="text/css">
        label
        {
            display: inline-block;
            width: 300px;
           
        }
        </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
                
      
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding:100px;">

<form action="{{url('upload_2_available')}}" method="POST" enctype="multipart/form-data">
  @csrf
    

        <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            
            <input type="number" style="color:black" name="Serial_no" class="form-control" placeholder="Serial no">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            
            <input type="text" style="color:black" name="Available_hospital" class="form-control" placeholder="Hospital Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" style="color:black" name="Location" class="form-control" placeholder="location">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text"  style="color:black" name="Vacant_isolation_beds"   class="form-control" placeholder="number of beds">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text"  style="color:black" name="Providable_oxygen_cylinder"   class="form-control" placeholder="number of cylinder">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="number"  style="color:black" name="Available_ventilator_ICU_beds"   class="form-control" placeholder="number of beds">
          </div>
        <div>
     <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      
</div>


</form>






</div>

</div>
    @include('admin.script')
  </body>
</html>