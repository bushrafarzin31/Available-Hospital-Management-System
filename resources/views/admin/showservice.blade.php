
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
    
       <div   style="padding-top:150px; padding-right=100px" align="left" >
<table align="left" class= "table table-dark table-striped"   >


<thead>
<tr style="background-color:black; padding-right:150px">

      <th  scope="col" style=" padding-right:15px;color:white;">Hospital name</th>
      <th scope="col"style=" padding-right:15px;color:white;">Contact number</th>
      <th scope="col"style="padding-right:15px; color:white;">Services</th>
      <th scope="col"style=" padding-right:15px;color:white;">Covid_specialists</th>
      <th scope="col"style="padding-right:15px; color:white;">Delete</th>
      <th scope="col"style="padding-right:15px; color:white;">Update</th>
    </tr >
@foreach($data as $service)
    <tr style="background-color:black;" >
<td  scope="col" style="padding-right:15px;color:white;">{{$service->Hospital_name}}</td>
      <td scope="col"style="padding-right:15px;color:white;">{{$service->Contact_number}}</td>
      <td scope="col"style="padding-right:15px;color:white;">{{$service->Providable_services}}</td>
      <td scope="col"style="padding-right:15px;color:white;">{{$service->Covid_specialists}}</td>
 
        <td scope="col"style="padding-right:15px;color:white;"><a class="btn btn-danger"  onclick="return confirm('are u sure to delete?')" href="{{url('deleteservice',$service->id)}}">Delete</a></td>
      <td scope="col"style="padding-right:15px;color:white;"><a class="btn btn-primary" href="{{url('updateservice',$service->id)}}">Update</a></td>
      



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