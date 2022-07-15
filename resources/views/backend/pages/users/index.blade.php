@extends('backend.layouts.master')

@section('title', 'User Lists | Admin Panel')

@section('admin-maincontent')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">User list</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
                    </ul>
                </div>
            </div>                    
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="data-tables">
            <table id="dataTable" class="text-center">
                <thead class="bg-light text-capitalize">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->designation->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_no}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{route('admin.users.edit', $user->id)}}">Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('admin.users.destroy', $user->id)}}">Delete</a>
                        </td>                    
                    </tr>
                    @endforeach
                                
                </tbody>
            </table>
        </div>
    </div>
@endsection
