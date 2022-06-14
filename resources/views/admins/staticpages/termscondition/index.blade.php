@extends('admins.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ route('TermsCondition.create') }}">
                    Add Description
                </a>
            </div>
        </div>
    </div>
</section>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Categories</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->page_title }}</td>
                                    <td>{!! $item->page_desc !!}</td>
                                    <td>
                                        <a href="{{ route('webinars-category.edit', $item->id) }}"><i
                                                class="fas fa-edit text-primary"></i></a>
                                        <a href="javascript:void(0);" class="text-decoration-none"
                                            onclick="deleteRecord('{{ $item->id }}', '/superadmin/webinars-category/')">
                                            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
