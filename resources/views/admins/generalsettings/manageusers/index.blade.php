@extends('admins.master')
@section('content')
<section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                 </div>
                 <div class="col-sm-6">
                     <a class="btn btn-primary float-right" href="{{route('unapproved')}}">
                       New User Requests ({{$allUsers->where('status',0)->count()}})
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
                                <strong class="card-title"> Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No #</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Network</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   @forelse($allUsers->where('status',1) as $approveuser)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$approveuser->name ?? '' }}</td>
                                            <td>{{$approveuser->email ?? ''}}</td>
                                            <td>{{$approveuser->userNetworkLevel->name}}</td>
                                            <td>{{$approveuser->type}}</td>
                                            <td>
                                            <a href="{{route('changeusertype',$approveuser->id )}}"><i class="fas fa-edit text-primary"></i></a>
                                            <a href="{{route('userhistory', $approveuser->id)}}"> <i class="far fa-eye text-info"></i></a>
                                            <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord('{{$approveuser->id}}', '/superadmin/manageuser/')">
                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                            </a>

                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No Record Found</td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
