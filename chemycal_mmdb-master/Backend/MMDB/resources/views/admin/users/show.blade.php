@extends('admin.home')

@section('title')
    Edit User
@endsection

@section('css-define')

@endsection



@section('content')
    <!-- PAGE-HEADER -->

    <input type="hidden" id="modelId" value="{{$modelId}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <div class="userpic  brround"><img src="" alt="" class="image-avatar"></div>
                            <div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
                                <input type="file" id="inputFileUploadImage" style="display: none">
                                <button id= "buttonUploadImage" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</button>
                                <p></p>
                                <button id= "buttonDeleteImage" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Delete profile</button>
                            </div>
                            <h4 class="text-dark mb-2" id="username"></h4>
                            <p class="mb-1 text-muted" id="useremail"></p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
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
                    <button id="buttonUpdate" class="btn btn-success mt-1">Update</button>
                    <a class="btn btn-primary" href="/admin/user"> Cancel</a>
                </div>
            </div>

        </div>

    </div>

    <!-- ROW-1 CLOSED -->
@endsection
@section('js-define')
    <script src="{{ URL::asset('js/admin/user/show.js') }}"></script>
@endsection

