@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Brands</h3>
        </div>
        <div class="title_right"> </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">#</th>
                                    <th class="column-title">Brand Image</th>
                                    <th class="column-title">Brand Name</th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="va-middle">
                                <tr class="even pointer">
                                    <td>121000040</td>
                                    <td>
                                        <figure class="profile-img-icon"><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
                                    </td>
                                    <td>Brand</td>
                                    <td>Active</td>
                                    <td class="text-center">
                                        <a href="#" class="text-success">Edit</a> |
                                        <a href="#" class="text-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr class="even pointer">
                                    <td>121000040</td>
                                    <td>
                                        <figure class="profile-img-icon"><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
                                    </td>
                                    <td>Brand Test</td>
                                    <td>Inactive</td>
                                    <td class="text-center">
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
