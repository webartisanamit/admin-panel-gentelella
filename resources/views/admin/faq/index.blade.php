@extends('layouts.admin')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Manage FAQ's</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4"> </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <form action="{{ route('admin.faqs.index') }}" method="get">
                        <div class="row">
                            <h4 class="col-sm-1 text-right pl-2 pt-1">Search</h4>
                            <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="text" name="keyword" placeholder="Question" value="{{ request()->get('keyword') }}">
                            </div>
                            <div class="col-sm-2">
                                <div class="search_btn">
                                    <button class="btn btn-sm btn-primary" type="submit">Apply</button>
                                    <a class="btn btn-sm btn-warning" href="{{ route('admin.faqs.index') }}">Clear</a>
                                </div>
                            </div>
                            <div class="col-sm-2"> </div>
                            <div class="col-sm-3 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.faqs.create') }}">+ Add FAQ</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table faq-table">
                        <thead class="thead-light">
                            <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">Question</th>
                                <th scope="col">Type</th>
                                <th scope="col" class="text-center" width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($faqs as $index => $faq)
                                <tr>
                                    <td> {{ $index + $faqs->firstItem() }} </td>
                                    <td width="60%" id="accordion">
                                        <div id="heading{{$faq->id}}">
                                            <p>
                                                <a data-toggle="collapse" href="#questionAns{{ $faq->id }}" role="button" aria-expanded="false" aria-controls="questionAns{{ $faq->id }}">{{ $faq->question }}</a>
                                            </p>
                                            <div id="questionAns{{ $faq->id }}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#accordion">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td> {{ ucfirst($faq->type) }} </td>
                                    <td class="text-center"><a class="btn btn-primary btn-sm" href="{{ route('admin.faqs.edit', [base64_encode($faq->id)]) }}" ><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" data-form="deleteForm-{{ $faq->id }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                        <form id="deleteForm-{{ $faq->id }}" action="{{ route('admin.faqs.destroy', [base64_encode($faq->id)]) }}" method="post">
                                            @csrf @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10">
                                    {{ $faqs->withQueryString()->links() }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
