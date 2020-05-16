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

				@if(Session::has('data'))
				<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				{{ Session::get('data') }}
				</div>
				@endif

         <div class="card">
                     <div class="card-header card-header-primary">
                        <h4 class="card-title ">User Listing</h4>
                     </div>

            <div class="card-body">
                        <div class="table-responsive">
                           <table class="table">
                           	 <thead class=" text-primary">
                                 <th>
                                    ID
                                 </th>
                                 <th>
                                    Name
                                 </th>
                                 <th>
                                    Email
                                 </th>
                                 <th>
                                    Mobile
                                 </th>
                                 <th>
                                   Birth 
                                 </th> 
                                <th>
                                    City
                                 </th>
                                 <!--  <th>
                                    Amount
                                 </th> -->
                                  <th>
                                    Action
                                 </th>
                               
                                
                              </thead>
                             @if(count($response) > 0)
                             @foreach($response as $data)
                              <tbody>
                                 <tr>
                                    <td>
                                    <b>{{ $data['id']}}</b>
                                    </td>
                                    <td>
                                     {{ ucfirst($data['name'])}}
                                    </td>
                                    <td>
                                     {{ $data['email']}}
                                    </td>
                                    <td>
                                    {{ $data['mobile']}}
                                    </td>
                                 <td>
                                    {{ $data['dob']}}
                                    </td> 
                                   <td>
                                     {{ ucfirst($data['city'])}}
                                    </td>
                                    <!--   <td>
                                    {{ $data['amount']}}
                                    </td> -->

                                     <td>
                                       <a class="btn btn-info btn-sm" href="userdetail/{{ $data['id']}}">View</a>
                                        <a class="btn-success btn-sm" href="edituser/{{ $data['id']}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="delete/{{ $data['id']}}">Delete</a>

                                        @if($data['conferm_doner'] =='')
                                        <a class="btn btn-warning btn-sm" href="doner/{{ $data['id']}}">Doner</a>
                                        @else
                                         <a class="btn btn-success btn-sm" href="#">
                                         Confirmed Donor</a> 
                                        @endif


                                       
                                    </td>  
                                    
                                 </tr>
                                
                              </tbody>
                              @endforeach
								
                                 @else
							   <b> No Record Found...!</b>
								@endif
                                   

                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
   </div>
</div>