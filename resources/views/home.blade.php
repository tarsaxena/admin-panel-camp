@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="wrapper ">
  @extends('layouts.sidebar');
 
   <div class="main-panel">
      <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard </a>
          </div>
        
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>{{ Auth::user()->name }}</b> <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
           <div class="col-lg-12 col-md-12">
              <div class="card">
                 <div class="card-body">
                  <h2>Welcome  <b>{{ ucfirst(Auth::user()->name) }}</b> in Admin Panel </h2>
                 </div>
              </div>
            </div>
          </div>
        </div>
    
  
  
  


</div>
@endsection
</body>

</html>

