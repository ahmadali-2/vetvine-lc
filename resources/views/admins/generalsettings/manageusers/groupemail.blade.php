@extends('admins.master')
@section('content')
<section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                 </div>
                 <div class="col-sm-6">
                     {{-- <a class="btn btn-primary float-right" href="">
                       Group Mail
                     </a> --}}
                 </div>
             </div>
         </div>
     </section>
     <form id="sendMailForm" action="{{ route('group.mail.sent') }}" method="post">
        @csrf
     <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"> Mail to Members</strong>
                    </div>
                    <div class="card-body">

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" id="" cols="30" rows="3"></textarea>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <strong class="card-title"> Mail to Members</strong>
                            </div> --}}
                            <div class="card-body">

                                <table class="table" id="example">
                                    <thead>
                                      <tr>
                                        <th scope="col">
                                            <div>
                                                <input type="checkbox" class="checkAll">
                                            </div>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>

                                        <th scope="col">Network</th>
                                        <th scope="col">User Type</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allUsers as $user)
                                      <tr>
                                        <th scope="row">
                                            <div>
                                                <input type="checkbox" name="user[]" value="{{ $user->id }}">
                                            </div>
                                        </th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{$user->userNetworkLevel->name}}</td>
                                        <td>{{$user->userMemberType->member_type}}</td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Send Mail</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
        $(".checkAll").on('change',function(){
            $('input:checkbox').prop('checked',$(this).prop("checked"));
        });

        // $('#sendMailForm').on('submit',function(e){
        //     e.preventDefault();
        //     $.ajax({
        //         url: '{{ route('group.mail.sent') }}',
        //         type: 'post',
        //         data:  $(this).serialize(),
        //         success: function(res){
        //             console.log(res);
        //         }
        //     });
        // });


       });
    </script>
@endsection
