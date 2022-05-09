
<!DOCTYPE html>
<html lang="en">
  <head>
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

    


<!-- </div> -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

                <x-app-layout>
     
               </x-app-layout>
               
       <div class="container-fluid page-body-wrapper">
    
       <div  align="center" style="padding-top:200px;"  >
<table class= "table table-dark table-striped"   >


<thead>
<tr style="background-color:black;" align="center">

      <th  scope="col" style="padding:20px; font-size:18px; color:white;">Doctor name</th>
      <th scope="col"style="padding:20px;font-size:18px; color:white;">Phone</th>
      <th scope="col"style="padding:20px;font-size:18px; color:white;">Speciality</th>
      <th scope="col"style="padding:20px;font-size:18px; color:white;">Image</th>
      <th scope="col"style="padding:20px;font-size:18px; color:white;">Delete</th>
      <th scope="col"style="padding:20px;font-size:18px; color:white;">Update</th>
    </tr >
@foreach($data as $doctor)
    <tr style="background-color:black;" align="center">
<td  scope="col" style="padding:20px;font-size:15px;color:white;">{{$doctor->name}}</td>
      <td scope="col"style="padding:20px;font-size:15px;color:white;">{{$doctor->phone}}</td>
      <td scope="col"style="padding:20px;font-size:15px;color:white;">{{$doctor->speciality}}</td>
      <td scope="col"style="padding:20px;font-size:15px;color:white;"><img height="300px" width="300px" src="doctorimage/{{$doctor->image}}"></td>
      <td scope="col"style="padding:20px;font-size:15px;color:white;"><a class="btn btn-danger"  onclick="return confirm('are u sure to delete?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
      <td scope="col"style="padding:20px;font-size:15px;color:white;"><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
      



      </tr >
@endforeach
    </div>
    </thead>
</table>

</div>

        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>