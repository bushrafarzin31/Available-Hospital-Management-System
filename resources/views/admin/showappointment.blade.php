
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div -md-12 p-0 m-0">
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
    
       <div  align="left" style="padding-top:100px;padding-right:50px;"  >
<table align="left">


<thead>
<tr style="background-color:black;" align="center" >

      <th  style="padding:8px;font-size:15px; color:white;">Holders name</th>
      <th style="padding:8px;font-size:15px; color:white;">Email</th>
      <th style="padding:8px;font-size:15px; color:white;">Doctor name</th>
      <th style="padding:8px;font-size:15px; color:white;">Phone</th>
      <th style="padding:8px;font-size:15px; color:white;">Date</th>
      <th style="padding:8px;font-size:15px; color:white;">patients details</th>
      <th  style="padding:8px;font-size:15px; color:white;">Status</th>
      <th  style="padding:8px;font-size:15px; color:white;">Approved</th>
      <th  style="padding:8px;font-size:15px; color:white;">Canceled</th>
      <th  style="padding:8px;font-size:15px; color:white;">Send Mail</th>
    </tr >
    </thead>
@foreach($data as $appoint)
    <tr style="background-color:powderblue;" align="center">
<td   style="padding:8px;font-size:12px;color:black;">{{$appoint->name}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->email}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->doctor}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->phone}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->date}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->details}}</td>
      <td style="padding:8px;font-size:12px;color:black;">{{$appoint->status}}</td>
     
      <td style="padding:8px;font-size:12px;color:black;"><a class="btn btn-danger"   href="{{url('approved',$appoint->id)}}">Approved</a></td>
      <td style="padding:8px;font-size:12px;color:black;"><a class="btn btn-primary" onclick="return confirm('are u sure to cancel?')" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
      
      <td style="padding:8px;font-size:12px;color:black;"><a class="btn btn-primary"   href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>


      </tr >
@endforeach
   
    
</table>

</div>
</div>
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>