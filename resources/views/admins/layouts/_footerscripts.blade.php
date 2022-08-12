    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js ') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="https://kit.fontawesome.com/b8867474d2.js" crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/js/fontawesome.js') }}"></script>

    <script src="{{ asset('admin/js/admin.js') }}"></script>

    <script src="{{ asset('admin/js/inputmask.js') }}"></script>

    <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>

    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>\
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> --}}
    <script src="{{ asset('admin/datatables/datatable.js') }}"></script>
    <script src="{{ asset('admin/datatables/datatable-buttons.js') }}"></script>
    <script src="{{ asset('admin/datatables/html5.js') }}"></script>
    <script src="{{ asset('admin/datatables/jszip.js') }}"></script>
    <script src="{{ asset('admin/datatables/pdfmaker.js') }}"></script>
    <script src="{{ asset('admin/datatables/print.js') }}"></script>
    <script src="{{ asset('admin/datatables/vfs_font.js') }}"></script>
    <script src="{{ asset('admin/tags/tags.js') }}"></script>










    <script>
        $(document).ready(function() {

            $('#phone_no').inputmask('(+1) 999-999-9999');

            $('.js-example-basic-multiple').select2();

            CKEDITOR.replace('description');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#ForumsTable').DataTable({
                // order: [
                //     [2, 'desc']
                // ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>


    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest(
        'App\Http\Requests\Admin\AdsCampaign\CreateAdsCampaignRequest',
        '#createadscampaign',
    ) !!}
    {!! JsValidator::formRequest(
        'App\Http\Requests\Admin\Generalsetting\GeneralSettingRequest',
        '#generalsettingform',
    ) !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\AdsCampaign\CreateAdsManageRequest', '#createadsmanage') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Webinar\CreateCategoryRequest', '#createcategory') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\News\CreateNewsRequest', '#newsform') !!}
    {!! JsValidator::formRequest(
        'App\Http\Requests\Admin\Announcements\CreateAnnouncementRequest',
        '#announcementsform',
    ) !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Forums\CreateForumRequest', '#forumform') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Forums\ForumCategoryRequest', '#categoryform') !!}
    {!! JsValidator::formRequest(
        'App\Http\Requests\Admin\Webinar\CreateContinueEducationRequest',
        '#continueeducationfrm',
    ) !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Membership\CreatePlanCategoryRequest', '#plancategory') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Membership\CreatePlanRequest', '#plan') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Webinar\CreateSponserRequest', '#createsponser') !!}
    {!! JsValidator::formRequest('App\Http\Requests\TermsRequest', '#terms-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\Admin\Coupons\CouponRequest', '#createcoupon') !!}
    {!! JsValidator::formRequest('App\Http\Requests\PrivacyPolicyRequest', '#privacypolicy') !!}
    {!! JsValidator::formRequest('App\Http\Requests\VideoOnDemandRequest', '#videosform') !!}
    {!! JsValidator::formRequest(
        'App\Http\Requests\Admin\Generalsetting\AdminProfilRequest',
        '#adminprofilesetting',
    ) !!}


    @toastr_js

    @toastr_render

    @notifyJs

    <x:notify-messages />

    @yield('adminscripts')
