<!-- Start Site Header -->
<div class="site-header-wrapper">

      <header class="site-header">
          <div class="container sp-cont">
              <div class="site-logo">
                  <h1><a href="/"><img src="/images/mediatama.png" alt="Logo"></a></h1>
                  
              </div>
              <div class="header-right">
                  <div class="topnav dd-menu">
                      <ul class="top-navigation sf-menu">
                          
                          @if(Auth::guest())
                          
                          <li><a href="/login">Login</a></li>
                          @else
                          <li><a class="btn btn-info" style="color:#FFFFFF;" href="/dashboard">Dashboard</a></li>
                          <li><a href="/logout">Logout</a></li>
                          @endif
                      </ul>
                  </div>
              </div>
          </div>
      </header>
      <!-- End Site Header -->
      <div class="navbar">
          <div class="container sp-cont">
              
              <!-- Main Navigation -->
            

          </div>
      </div>
  </div>
