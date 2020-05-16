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
      <!-- End Navbar -->
      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">

		
         <div class="card">
                     <div class="card-header card-header-primary">
                        <h4 class="card-title ">Edit User Detail</h4>
                     </div>

            <div class="card-body">
                        <div class="table-responsive">

            <form method="post" action="{{ url('updateuser/'.$response[0]['id']) }}">
                @csrf     
                <table class="table table-condensed">
                 <tbody>
                    <tr>        
                        <td>
                            <strong>
                               Full Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <input type="text" name="name" class="form-control" value="{{ucfirst($response[0]['name'])}}" placeholder="Name"> 
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                               Email Id                                       
                            </strong>
                        </td>
                        <td class="text-primary">
                           <input type="text" name="email" class="form-control" value="{{ucfirst($response[0]['email'])}}" placeholder="Email Id">
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                              Mobile Number                                    
                            </strong>
                        </td>
                        <td class="text-primary">
                          <input type="text" name="mobile" class="form-control" value="{{ucfirst($response[0]['mobile'])}}" placeholder="Mobile Number">
                        </td>
                    </tr>

                    <tr>    
                        <td>
                            <strong>
                              Date of Birth                                   
                            </strong>
                        </td>
                        <td class="text-primary">
                          <input type="text" name="dob" class="form-control" value="{{ucfirst($response[0]['dob'])}}" placeholder="Date of Birth"> 
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                              City                                 
                            </strong>
                        </td>
                        <td class="text-primary">
                             <input type="text" name="city" class="form-control" value="{{ucfirst($response[0]['city'])}}" placeholder="City">    
                        </td>
                    </tr>
                     <tr>    
                        <td>
                            <strong>
                              Amount                             
                            </strong>
                        </td>
                        <td class="text-primary">
                            <input type="text" name="amount" class="form-control" value="{{ucfirst($response[0]['amount'])}}" placeholder="Amount">      
                        </td>
                    </tr>
                     <tr>    
                        <td>
                            <strong>
                              Doner                                 
                            </strong>
                        </td>
                        <td class="text-primary">
                          <input type="text" name="conferm_doner" class="form-control" value="{{ucfirst($response[0]['conferm_doner'])}}" placeholder="Doner">  
                        </td>
                    </tr>
                     
                        <input type="hidden" name="id" class="form-control" value="{{ucfirst($response[0]['id'])}}" placeholder="id">                                
                </tbody>
            </table>
             <div class="form-group">
                    <button class="btn btn-success">Submit</button>
                  </div>
                </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
   </div>
</div>