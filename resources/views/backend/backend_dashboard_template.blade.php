<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    WaWa Hotpot
  </title>

  <!-- csrf token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link href="{{asset('template/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('template/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('template/assets/css/argon-dashboard.css?v=1.1.1')}}" rel="stylesheet" />

  <!-- fontawesome -->
   <link href="{{asset('template/assets/fontawesome/css/all.min.css')}}" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

   <!-- datatabljs -->
   <link href="{{asset('template/assets/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

   <link href="{{asset('template/assets/css/mine.css')}}" rel="stylesheet">
 


</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="h4 mb-0 text-white  d-none d-lg-inline-block" href="./index.html"><h1 class=" shusha shusha-backend display-2">WaWa HotPot </h1></a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('template/assets/img/theme/team-1-800x800.jpg')}}
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset('template/assets/img/brand/blue.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
              
                       <img src="{{asset('template/assets/img/hotpot/da.png')}}" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Dashboard</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('curry.index')}}">
              
                       <img src="{{asset('template/assets/img/hotpot/po.png')}}" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Curry</span> 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="{{route('meat.index')}}">
              <img src="{{asset('template/assets/img/hotpot/me.png')}}" class="ni img-fluid">
                     <span class="d-inline-block ml-4">Meat</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('seafood.index')}}">
              <img src="{{asset('template/assets/img/hotpot/se.png')}}" class="ni img-fluid" height="15" width="15">
                     <span class="d-inline-block ml-4">Seafood</span> 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="{{route('vegetable.index')}}">
              <img src="{{asset('template/assets/img/hotpot/veg.png')}}" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Vegetable</span> 
            </a>
          </li>
         
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Setting</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="ni ni-curved-next"></i> Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Welcome To Admin DashBoard!</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
              <div class=" align-items-center">
               <!--  <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('template/assets/img/theme/team-4-800x800.jpg')}}">
                </span> -->
                <div class="media-body ml-2 d-none d-lg-block">
                 <h2 class="text-white">{{ Auth::user()->name }}</h2> 
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-danger pb-2 pt-5 pt-md-7">
      <div class="container-fluid">
        <!-- contain in every index page of food -->
       
        @yield('card')

      </div>
    </div>
   <!-- Footer -->
       <footer class="container-fluid footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-xl-center text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Aye Chan Oo</a>
            </div>
          </div>
         
        </div>
      </footer>
  </div>

  <!--   Core   -->
  <script src="{{asset('template/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('template/assets/js/argon-dashboard.min.js')}}"></script>
  <script src="{{asset('template/assets/fontawesome/js/all.min.js')}}" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

   <script src="{{asset('template/assets/datatables/jquery.dataTables.js')}}"></script>

  <script src="{{asset('template/assets/datatables/dataTables.bootstrap4.js')}}"></script>
  <!-- echart js -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.1.0/echarts.min.js"></script> -->

  <!-- <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
       $('#currycard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#currycard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#meatcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#meatcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#vegetablecard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#vegetablecard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#seafoodcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#seafoodcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('.goto').click(function(){
       var link=$(this).data('link');
       window.location.href=`/${link}/index`;
       })


    })
  </script>
  @yield('script')
  <script src="{{asset('template/assets/js/backend-mine.js')}}"></script>
  <!-- <script src="{{asset('template/assets/js/order.js')}}"></script> -->
</body>

</html>