@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                {{-- Original Card below --}}
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Member Permissions Table</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">

                            <tbody>
                                <tr>
                                    <th>View Ads</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="view_ads">

                                            <input id="chkPermission1" name="view_ads" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->view_ads == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Licesnsure</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="licensure">

                                            <input id="chkPermission3" name="licensure" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->licensure == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Comments</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="comments">

                                            <input id="chkPermission2" name="comments" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->comments == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Likes</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="likes">

                                            <input id="chkPermission4" name="likes" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->likes == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shares</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="shares">

                                            <input id="chkPermission5" name="shares" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->shares == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>

                                {{-- Module Permissions  --}}
                                @if ($id == 9 || $id == 10 || $id == 11 || $id == 12)
                                <tr class="bg-light">
                                    <th>Dashboard Modules</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Dashboard</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="dashboard">

                                            <input id="chkPermission6" name="dashboard" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->dashboard == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ads</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="ads">

                                            <input id="chkPermission7" name="ads" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->ads == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Webinars</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="webinars">

                                            <input id="chkPermission8" name="webinars" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->webinars == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Forums</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="forums">

                                            <input id="chkPermission9" name="forums" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->forums == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Videos</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="videos">

                                            <input id="chkPermission10" name="videos" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->videos == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Manage</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="manage">

                                            <input id="chkPermission11" name="manage" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->manage == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Settings</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="settings">

                                            <input id="chkPermission12" name="settings" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->settings == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Membership Plans</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="membership_plans">

                                            <input id="chkPermission13" name="membership_plans" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->membership_plans == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Member Level</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="member_level">

                                            <input id="chkPermission14" name="member_level" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->member_level == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Manage Users</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="manage_users">

                                            <input id="chkPermission15" name="manage_users" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->manage_users == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Coupons</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="coupons">

                                            <input id="chkPermission16" name="coupons" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->coupons == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mail to Users</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="mail_to_users">

                                            <input id="chkPermission17" name="mail_to_users" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->mail_to_users == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Guest Registration Fee</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="guest_registration_fee">

                                            <input id="chkPermission18" name="guest_registration_fee" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->guest_registration_fee == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Static Pages</th>
                                    <td>
                                        <span id="changememberstatus" data-permissiontypeId="{{ $id }}"
                                            data-permissiontypeName="static_pages">

                                            <input id="chkPermission19" name="static_pages" type="checkbox" @php
                                                if ($data) {
                                                    if ($data->static_pages == '1') {
                                                        echo 'checked=true';
                                                    }
                                                }
                                            @endphp
                                                data-toggle="toggle" data-onstyle="outline-success" data-size="xs"
                                                data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Allowed"
                                                data-off="<i class='fa fa-lock'></i> Not Allowed"></span>
                                    </td>
                                </tr>
                                @endif

                                {{-- Module Permissions End  --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('adminscripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#changememberstatus', function() {
                var checkbox1 = false;
                var checkbox2 = false;
                var checkbox3 = false;
                var checkbox4 = false;
                var checkbox5 = false;
                var checkbox6 = false;
                var checkbox7 = false;
                var checkbox8 = false;
                var checkbox9 = false;
                var checkbox10 = false;
                var checkbox11 = false;
                var checkbox12 = false;
                var checkbox13 = false;
                var checkbox14 = false;
                var checkbox15 = false;
                var checkbox16 = false;
                var checkbox17 = false;
                var checkbox18 = false;
                var checkbox19 = false;
                // var checkbox20 = false;


                if ($('#chkPermission1').is(":checked")) {
                    checkbox1 = true;
                }
                if ($('#chkPermission2').is(":checked")) {
                    checkbox2 = true;
                }
                if ($('#chkPermission3').is(":checked")) {
                    checkbox3 = true;
                }
                if ($('#chkPermission4').is(":checked")) {
                    checkbox4 = true;
                }
                if ($('#chkPermission5').is(":checked")) {
                    checkbox5 = true;
                }
                if ($('#chkPermission6').is(":checked")) {
                    checkbox6 = true;
                }
                if ($('#chkPermission7').is(":checked")) {
                    checkbox7 = true;
                }
                if ($('#chkPermission8').is(":checked")) {
                    checkbox8 = true;
                }
                if ($('#chkPermission9').is(":checked")) {
                    checkbox9 = true;
                }
                if ($('#chkPermission10').is(":checked")) {
                    checkbox10 = true;
                }
                if ($('#chkPermission11').is(":checked")) {
                    checkbox11 = true;
                }
                if ($('#chkPermission12').is(":checked")) {
                    checkbox12 = true;
                }
                if ($('#chkPermission13').is(":checked")) {
                    checkbox13 = true;
                }
                if ($('#chkPermission14').is(":checked")) {
                    checkbox14 = true;
                }
                if ($('#chkPermission15').is(":checked")) {
                    checkbox15 = true;
                }
                if ($('#chkPermission16').is(":checked")) {
                    checkbox16 = true;
                }if ($('#chkPermission17').is(":checked")) {
                    checkbox17 = true;
                }if ($('#chkPermission18').is(":checked")) {
                    checkbox18 = true;
                }if ($('#chkPermission19').is(":checked")) {
                    checkbox19 = true;
                }
                // if ($('#chkPermission20').is(":checked")) {
                //     checkbox20 = true;
                // }
                // alert(checkbox1)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var memberId = $(this).attr("data-permissiontypeId");
                var name = $(this).attr("data-permissiontypeName");
                $.ajax({
                    data: {
                        memberId: memberId,
                        checkbox1: checkbox1,
                        checkbox2: checkbox2,
                        checkbox3: checkbox3,
                        checkbox4: checkbox4,
                        checkbox5: checkbox5,
                        checkbox6: checkbox6,
                        checkbox7: checkbox7,
                        checkbox8: checkbox8,
                        checkbox9: checkbox9,
                        checkbox10: checkbox10,
                        checkbox11: checkbox11,
                        checkbox12: checkbox12,
                        checkbox13: checkbox13,
                        checkbox14: checkbox14,
                        checkbox15: checkbox15,
                        checkbox16: checkbox16,
                        checkbox17: checkbox17,
                        checkbox18: checkbox18,
                        checkbox19: checkbox19,
                        // checkbox20: checkbox20,
                        name: name,
                    },
                    url: "{{ route('memberstatus') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.response == 'success') {
                            toastr.success('Permission updated successfully.')
                        }
                    },

                });


            });

        })
    </script>
@endsection
