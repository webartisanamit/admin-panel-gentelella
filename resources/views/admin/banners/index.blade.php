@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Banners</h3>
        </div>
        <div class="title_right"> </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('admin.banners.create') }}">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">#</th>
                                    <th class="column-title">Image</th>
                                    <th class="column-title">Discount Type</th>
                                    <th class="column-title">Discount Value</th>
                                    <th class="column-title">Start Date</th>
                                    <th class="column-title">End Date</th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="va-middle">
                                <tr class="even pointer">
                                    <td>121000040</td>
                                    <td>
                                        <figure class="table-image-icon"><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
                                    </td>
                                    <td>Flat</td>
                                    <td>20</td>
                                    <td>2021-10-10</td>
                                    <td>2021-10-20</td>
                                    <td>Active</td>
                                    <td class="text-center">
                                        <a href="#" class="text-success">Edit</a> |
                                        <a href="#" class="text-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td>121000040</td>
                                    <td>
                                        <figure class="table-image-icon"><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
                                    </td>
                                    <td>Percent</td>
                                    <td>20</td>
                                    <td>2021-10-10</td>
                                    <td>2021-10-20</td>
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
