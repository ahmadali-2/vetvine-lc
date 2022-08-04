@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('cms.pages.create') }}">
                        Add Page
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
                        <strong class="card-title">Pages</strong>
                    </div>
                    <div class="card-body">
                        <table class="table" id="ForumsTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $key=>$page)
                                    <tr>
                                        <td scope="row">{{ $key + 1 }}</td>
                                        <td>{{ $page->title }}</td>
                                        <td>
                                            <a href=""><i
                                                    class="fas fa-edit text-primary"></i></a>
                                            <a href="javascript:void(0);" class="text-decoration-none"
                                                onclick="">
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
