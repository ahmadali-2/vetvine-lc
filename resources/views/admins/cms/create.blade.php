@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add New Page</strong>
                </div>
                <div class="card-body">
                    <div id="pay-invoice">
                        <form action="{{ route('cms.page.store') }}" method="post" id="continueeducationfrm"
                            novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title of the Pages">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="event_description" class="control-label mb-1">Page Content</label>
                                        <textarea class="form-control ckeditor" id="event_description" rows="3" name="content"
                                            value="" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Submit</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.editorConfig = function(config) {
                config.height = '1000px';
            };
            var tagInputEle = $('#tags');
            tagInputEle.tagsinput();
        })
    </script>
@endsection
