@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Discounts</h3>
        </div>
        <div class="title_right"> </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('admin.discounts.create') }}">
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
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Code</th>
                                    <th class="column-title">Discount Type</th>
                                    <th class="column-title">Discount Price</th>
                                    <th class="column-title">Validity</th>
                                    <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="va-middle">
                                <tr class="even pointer">
                                    <td>1210</td>
                                    <td>Discount 1</td>
                                    <td>DIWAALI20</td>
                                    <td>Flat</td>
                                    <td>10</td>
                                    <td>2021-07-30 - 2021-07-31</td>
                                    <td class="text-center">
                                        <a href="#" class="text-success">Edit</a> |
                                        <a href="#" class="text-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td>1211</td>
                                    <td>Discount 2</td>
                                    <td>HOLY20</td>
                                    <td>Percentage</td>
                                    <td>10%</td>
                                    <td>2021-07-30 - 2021-07-31</td>
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
