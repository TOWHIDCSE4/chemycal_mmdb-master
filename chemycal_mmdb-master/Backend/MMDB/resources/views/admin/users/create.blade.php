@extends('admin.home')

@section('title')
    Create New User
@endsection

@section('css-define')

@endsection



@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="userprofile">
                            <div class="userpic  brround">
                                <img alt="" class="userpicimg"> </div>
                            <div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
                                <input type="file" id="inputFileUploadImage" style="display: none">
                                <button id= "buttonUploadImage" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create User New</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputname">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" placeholder="password" id="exampleInputPassword">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="password" id="exampleInputConfirmPassword">
                    </div>

                </div>
                <div class="card-footer">
                    <button id = "buttonSave" class="btn btn-success mt-1">Save</button>
                    <a class="btn btn-primary" href="/admin/user"> Cancel</a>
                </div>
            </div>

        </div>
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
@section('js-define')
    <script src="{{ URL::asset('js/admin/user/create.js') }}"></script>
@endsection

