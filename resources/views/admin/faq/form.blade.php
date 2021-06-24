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
                                <h3 class="mb-0">FAQs</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.faqs.index') }}">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @php $action = isset($faq) ? route('admin.faqs.update', [$faq->id]) : route('admin.faqs.store'); @endphp
                        <form class="form" method="post" action="{{ $action }}">
                            @if(isset($faq)) @method('PUT') @endif
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Type</label>
                                    <select class="form-control" name="type" required>
                                        <option hidden value="">Please Select</option>
                                        <option value="customer" @if (old('type', ($faq->type ?? '')) == 'customer') selected @endif>Customer</option>
                                        <option value="driver" @if (old('type', ($faq->type ?? '')) == 'driver') selected @endif>Driver</option>
                                    </select>
                                    @error('type')
                                        <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Question</label>
                                    <input type="text" id="question" class="form-control" name="question" value="{{ old('question', ($faq->question ?? '')) }}" required>
                                    @error('question')
                                        <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Answer:</label>
                                    <textarea id="" rows="6" class="form-control" name="answer" required>{{ old('answer', ($faq->answer ?? '')) }}</textarea>
                                    @error('answer')
                                        <span class="validation-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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
@endsection
