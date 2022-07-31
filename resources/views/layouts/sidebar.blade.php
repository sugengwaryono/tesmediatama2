<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li>
        <a href="/dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      @if(Auth::user()->hasRole('user'))

      
     
     <li>
        <a href="/dashboard/pengguna/video">
          <i class="fa fa-video-camera"></i> <span>Video</span>
        </a>
      </li>
      <li>
        <a href="/dashboard/pengguna/req-admin">
          <i class="fa fa-book"></i> <span>Request to Admin</span>
        </a>
      </li>
      <li>
        <a href="/logout" ><i class="fa fa-lock"></i>Sign out</a>
      </li>

      @endif
      @if(Auth::user()->hasRole('admin'))
     
     

      

     
      <li>
        <a href="/dashboard/users">
          <i class="fa fa-users"></i> <span>Member</span>
          
        </a>
      </li>
      <li>
        <a href="/dashboard/videos">
          <i class="fa fa-video-camera"></i> <span>Video</span>
          
        </a>
      </li>
       <li>
        <a href="/dashboard/myrequest">
          <i class="fa fa-book"></i> <span>Permintaan Pengguna</span>
        </a>
      </li>
      <li>
        <a href="/logout" ><i class="fa fa-lock"></i>Sign out</a>
      </li>
       

     

      
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
