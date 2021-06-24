@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Drivers</h3>
        </div>
        <div class="title_right"> </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <form class="" action="" method="get">
                        <div class="row">
                            <h5 class="col-auto">Search</h5>
                            <div class="col-4">
                                <input type="text" name="keyword" placeholder="First Name, Last Name, Email, Phone Number" class="form-control form-control-sm" value="{{ request()->input('keyword') ?? '' }}">
                            </div>
                            <div class="2">
                                <button class="btn btn-info btn-sm" type="submit">Apply</button>
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.drivers.index') }}">Clear</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">#ID</th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Phone Number</th>
                                    <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="va-middle">
                                <tr class="even pointer">
                                    <td>121000040</td>
                                    <td>
                                        <figure class="profile-img-icon"><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
                                        John
                                    </td>
                                    <td>john@gmail.com</td>
                                    <td>9876543215</td>
                                    <td class="text-center">
                                        <a href="#" class="text-info">View</a> |
                                        <a href="#" class="text-success">Edit</a> |
                                        <a href="#" class="text-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
