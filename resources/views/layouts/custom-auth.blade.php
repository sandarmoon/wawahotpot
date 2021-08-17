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
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Wa Wa Hotpot
  </title>
  <!-- Favicon -->
  <link href="{{asset('template/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('template/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('template/assets/css/argon-dashboard.css?v=1.1.1')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/css/mine.css')}}" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    
    <!-- Header -->

    <div class="header bg-gradient-danger pt-2 pb-5 py-lg-5">
    	<div class="text-center">
    		<h1 class=" shusha m-0 p-0" style="font-size: 3rem;color: #f5ce36;">Wa Wa Hotpot</h1>

    		<span class="d-inline-block text-white">No(158/A) Insein Road,Hlaing Township.</span>
    		<span class="d-inline-block text-white"> 09 44 89 444 01-02</span>

    	</div>
      <div class="container ">
        <div class="header-body text-center mb-8 mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="shusha" style="font-size: 2rem; color: #fff;" >Welcome to <span class="shusha" style="color:#f5ce36;"></span> Wa Wa Hotpot!</h1>
              
              <a type="button" class="text-white" >
                    <h3 class="text-white text-lead">Click the button to see <b style="font-size: 1.3rem;color:#fff;">Admin and Staff</b> Accounts!</h3>
                  </a>

                  <button type="button" class="btn btn-md  btn-outline-dark" data-toggle="modal" data-target="#mail-modal">
                      Please Click Here!
                  </button>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        @yield('content')
      </div>
    </div>
    <footer class="container-fluid  bg-default">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-xl-center text-white">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold text-white ml-1" target="_blank">Aye Chan Oo</a>
            </div>
          </div>
         
        </div>
      </footer>
  </div>

  <!-- Modal -->
<div class="modal fade" id="mail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h2 class="modal-title text-danger" id="exampleModalLabel">Welcome to Wa Wa HotPot</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
            <h2>For Admin Account</h2>
              <p>Email:<b>admin123@gmail.com</b></p>
              <p>Password:<b>123456789</b></p>
          </div>
          <div class="col-md-12">
            <h2>For Admin Account</h2>
              <p>Email:<b>admin123@gmail.com</b></p>
              <p>Password:<b>123456789</b></p>
          </div>
        <!-- <h3 class="text-left">Please Enter Your Name</h3>
             
            <div class="form-group mb-3" >
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="mailusername" placeholder="Email" type="email">
                </div>
            </div>

            <h3 class="text-left">Please Enter Your Email</h3>
             
            <div class="form-group mb-3" >
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="mail" placeholder="Email" type="email">
                </div>
            </div>
            
            
            <div class="text-center">
                <button type="button"  class="btn btn-primary my-4 btn-submit">Send it Now!</button>
            </div> -->

            <button type="button" class="btn btn-danger my-4 " data-dismiss="modal" aria-label="Close">
          Close
        </button>
       
      </div>
      
    </div>
  </div>
</div>

<div class="col-md-4">
      
      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                      
                        <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-notification">
                              Wa Wa HotPot Noti
                            </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">
                          
                            <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="heading mt-4">Successfully Send it!</h4>
                                <h4>Please Check Your Email </h4>
                            </div>
                            
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white">Ok, Got it</button>
                            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                        </div>
                        
                    </div>
                </div>
          </div>

  </div>
  <!--   Core   -->
  <script src="{{asset('template/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="{{asset('template/assets/js/argon-dashboard.min.js?v=1.1.1')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
      $(document).ready(function(){
        //csrf token
   

          
        $('.btn-submit').click(function(e){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          //alert('helo');
          e.preventDefault();
          var mail=$('input[name="mail"]').val();
          var username=$('input[name="mailusername"]').val();
          var url="{{route('sendbasicemail')}}";
          $.post(url,{mail:mail,username:username},function(res){
            if(res){
             
              $('#mail-modal').modal('hide');
               $('#modal-notification').show('show');
            }
          })
        })
      })
  </script>
</body>

</html>