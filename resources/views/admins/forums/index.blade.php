@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('forums.create') }}">
                            Add Category & Forum
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
                        <strong class="card-title">Manage Forums</strong>
                    </div>
                        <div class="card-body">
                           <table class="table">
                               <thead>
                                   @foreach ($categories as $category )
                                   <tr>
                                        <th scope="col">{{$category->category_title}}
                                            <th> <a href="{{ route('forums-category.edit',$category->id) }}"><i class="fas fa-edit text-primary"></i></a>
                                                <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord('{{$category->id}}', '/superadmin/forums-category/')">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a></th>
                                        </th>
                                    </tr>

                               <tbody>
                                        @foreach ($category->forums as $forum)
                                        <tr>
                                        <td>{{$forum->forum_title}}
                                            <td> <a href="{{ route('forums.edit',$forum->id) }}"><i class="fas fa-edit text-primary"></i></a>
                                                <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord('{{$forum->id}}', '/superadmin/forums/')">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a></td>
                                        </td>
                                        </tr>
                                        @endforeach

                               </tbody>
                                   @endforeach
                               </thead>
                           </table>
                </div>
            </div>
        </div>
    </div>
@endsection
