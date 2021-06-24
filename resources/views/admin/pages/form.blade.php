@extends('layouts.admin')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <h6 class="h2 text-white d-inline-block mb-0">Page</h6> -->
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"></div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ $page->title ?? '' }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @php $action = isset($page) ? route('admin.pages.update', [$page->id]) : route('admin.pages.store'); @endphp
                        <form class="form" method="post" action="{{ $action }}">
                            @if(isset($page)) @method('PUT') @endif
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Title</label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ old('title', ($page->title ?? '')) }}">
                                    @error('title')
                                    <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Content:</label>
                                    <textarea id="" rows="10" class="form-control" name="content">{{ old('content', ($page->content ?? '')) }}</textarea>
                                    @error('content')
                                    <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 d-none">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Slug</label>
                                    <input type="text" class="form-control slug" name="slug" readonly value="{{ old('slug', ($page->slug ?? '')) }}">
                                    @error('slug')
                                        <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <label class="radio-inline" for="publish">
                                    <input class="radio" id="publish" type="radio" name="published" value="1" @if (!isset($page) || (isset($page) && $page->published == 1)) checked @endif> Publish
                                </label>
                                <label class="radio-inline" for="save_draft">
                                    <input class="radio" id="save_draft" type="radio" name="published" value="0" @if (isset($page) && $page->published == 0) checked @endif> Unpublish
                                </label>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_scripts')
<script>
    $(document).ready(function() {

        $('body').on('keyup', '#title', function() {
            var title = $(this).val();
            $('.slug').val(slugify(title));
        });
    });
</script>
@endsection
