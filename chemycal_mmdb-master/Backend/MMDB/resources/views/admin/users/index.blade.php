@extends('admin.home')

@section('title')
    User Management
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
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <!-- SEARCH -->
                <div class="input-group w-100 p-2">
                    <input type="text" id="inputSearch" class="form-control " placeholder="Search....">
                    <div class="input-group-append ">
                        <button type="button" id= "buttonSearch" class="btn btn-primary ">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">User Management</h3>
                </div>
                <div class="card-header pull-right">
                    <a class="btn btn-success" href="/admin/user/create"> Create New User</a>
                </div>
                <div class="e-table px-5 pb-5">
                    <div class="table-responsive table-lg">
                        <table class="table table-bordered mb-0 tableData">
                            <thead>
                            <tr>
                                <th  class="text-center">No</th>
                                <th class="text-center">Photo</th>
                                <th >Name</th>
                                <th>Email</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="tbodyid">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div><!-- COL END -->
    <!-- INDEX JS -->

    <div id="pager">
        <ul id="pagination" class="pagination-sm"></ul>
    </div>
@endsection

@section('js-define')
    <script src="{{ URL::asset('js/common/jquery.twbsPagination.min.js') }}"></script>
    <script src="{{ URL::asset('js/admin/user/user.js') }}"></script>

@endsection