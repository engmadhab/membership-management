@extends('backend.layouts.master')

@section('title', 'User Lists | Admin Panel')

@section('admin-maincontent')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Create User</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{route('admin.index')}}">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">New User</h4>
                                <form method="POST" action="{{route('admin.users.store')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="username">User Name(Optional - auto generated)</label>
                                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter User Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="designation_id">Designation</label>
                                                <select name="designation_id" id="designation_id" class="form-control">
                                                    @foreach ($designations as $designation )
                                                        <option value="{{$designation->id}}">{{$designation->name}}</option>
                                                    @endforeach                                                    
                                                </select>
                                            </div>  
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone_no">Phone No</label>
                                                <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter Phone No">
                                            </div>
                                        </div>                                        
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="present_address">Present Address</label>
                                                <input type="text" name="present_address" class="form-control" id="present_address" placeholder="Enter Present Address">
                                            </div>
                                        </div>                                        
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="parmanent_address">Parmanent Address</label>
                                                <input type="text" name="parmanent_address" class="form-control" id="parmanent_address" placeholder="Enter Parmanent Address">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>  
                                        </div>

                                    </div>  

                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->
                </div>
            </div>
@endsection
