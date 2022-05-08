
<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">


  <style type="text/css">

    label {
      display:inline-block;
      width:200px;
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
                <x-app-layout>
     
               </x-app-layout>
      
        <!-- partial -->
        <div class="container-fluid page-body-wrapper"  >
          <div class="container" align="center" style="padding:100px" >
         
         
          <form action="{{url('edithospital',$data->id)}}" method="POST" enctype="multipart/form-data" >

            @csrf

            <div style="padding:15px;">
              <label>Hospital Name</label>
              <input type="text" style="color:black" name="Available_hospital" value="{{$data->Available_hospital}}">
</div>

<div style="padding:15px;">
              <label>Location</label>
              <input type="text" style="color:black"  name="Location" value="{{$data->Location}}">
</div>

<div style="padding:15px;">
              <label>Vacant_beds</label>
              <input type="text" style="color:black" name="Vacant_isolation_beds" value="{{$data->Vacant_isolation_beds}}">
</div>
<div style="padding:15px;">
              <label>Providable_cylinders</label>
              <input type="text" style="color:black" name="Providable_oxygen_cylinder" value="{{$data->Providable_oxygen_cylinder}}">
</div>
<div style="padding:15px;">
              <label>Ventilators & Icu</label>
              <input type="text" style="color:black" name="Available_ventilator_ICU_beds" value="{{$data->Available_ventilator_ICU_beds}}">
</div>



  <div style="padding:15px;">

  <input type="submit" class="btn btn-primary">


  </div>
</form>



</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>