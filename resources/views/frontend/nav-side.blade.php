 <nav class="navbar  bg-gradient-danger navbar-expand-md navbar-light " id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <h1 class="navbar-brand shusha" style="font-size: 2.3rem;color: #f5ce36;">Wa Wa Hotpot</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      
      <!-- User -->
    
      <!-- Collapse -->
      <div class="collapse navbar-collapse " id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-11 collapse-brand">
               <h1 class="text-center text-center shusha" style="font-size: 2rem;color:#f5ce36;">Wa Wa Hotpot</h1>
            </div>
            <div class="col-1 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav ml-xl-auto ">
          
          
          <li class="nav-item">
            <a class="nav-link cart" onclick="return false"  href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
               
               <h2 class="d-inline text-uppercase  " style="color: #fbc040;font-size: 1.3rem;">Cart 
                <span class="counting  badge badge-pill  badge-danger">0</span></sup>
              </h2> 
            </a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link cart" onclick="return false"  href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
               
               <h2 class="d-inline text-uppercase  " style="color: #fbc040;font-size: 1.3rem;">
                @if(Auth::user())
                {{Auth::user()->name}}
                @endif
                
              </h2> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                 <h2 class="d-inline text-uppercase  " style="color: #fbc040;font-size: 1.3rem;">Logout 
                
              </h2> 
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
         <!--  -->
          
        </ul>
      </div>
    </div>
  </nav>