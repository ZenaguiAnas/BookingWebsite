<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>N-Booking Admin</title>
  @include("admin.admincss");
</head>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
          <li>
          <x-app-layout>

</x-app-layout>
          </li>
        </ul>
       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    
    <div class="d-flex">
    <div class="container_scroller">
    @include("admin.navbar")

    <div style="position:relative; top:-500px; right : -430px">
    <table  border="3px" width="700px">
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
          </tr>

          @foreach($data as $data)
          <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              @if($data->usertype=="0") 
              <td> <a href="{{url('/deleteuser',$data->id)}}">DELETE</a> </td>
              @else
              <td> <a>not allowed</a> </td>
              @endif
          </tr>
          @endforeach
      </table>
</div>
      
      

      </div>

    </div>

    
      <!-- partial -->
      
     
                         
                    
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © N-Booking 2022</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include("admin.adminscript");