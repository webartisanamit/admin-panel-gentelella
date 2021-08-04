@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Payments</h3>
        </div>
        <div class="title_right"> </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <a class="btn btn-success btn-sm pull-right" href="#">
                        <i class="fa fa-download"></i> Export
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">#</th>
                                    <th class="column-title">#OrderId</th>
                                    <th class="column-title">Customer Name</th>
                                    <th class="column-title">Customer Email</th>
                                    <th class="column-title">Order Date</th>
                                    <th class="column-title">Quantity</th>
                                    <th class="column-title">Amount</th>
                                    <th class="column-title">Tax</th>
                                    <th class="column-title">Shipping Charge</th>
                                    <th class="column-title">Discount</th>
                                    <th class="column-title">Total Amount</th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="va-middle">
                                <tr class="even pointer">
                                    <td>1</td>
                                    <td>121000040</td>
                                    <td>Customer One</td>
                                    <td>customer@gmail.com</td>
                                    <td>2020-10-10</td>
                                    <td>10</td>
                                    <td>$100</td>
                                    <td>$10</td>
                                    <td>$10</td>
                                    <td>0</td>
                                    <td>$120</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="#" class="text-success">View</a> |
                                        <a href="#" class="text-info">Download</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td>2</td>
                                    <td>121000040</td>
                                    <td>Customer Two</td>
                                    <td>customer@gmail.com</td>
                                    <td>2020-10-10</td>
                                    <td>10</td>
                                    <td>$100</td>
                                    <td>$20</td>
                                    <td>$10</td>
                                    <td>0</td>
                                    <td>$130</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="#" class="text-success">View</a> |
                                        <a href="#" class="text-info">Download</a>
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
