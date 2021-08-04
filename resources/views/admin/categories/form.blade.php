@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Category</h3>
        </div>
        <div class="title_right">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Category Form</h2>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('admin.categories.index') }}">
                        <i class="fa fa-list"></i> List
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form" data-parsley-validate>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Image :</label>
                                    <input type="file" id="categoryImage" class="form-control" name="image" required accept="image/*" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Category Name * :</label>
                                    <input type="text" id="name-input" class="form-control" name="name" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Status * :</label>
                                    <select id="status-input" class="form-control" name="status" required>
                                        <option value="" hidden>Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="Submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
