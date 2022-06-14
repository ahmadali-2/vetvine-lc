@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add Description</strong>
                </div>
                <div class="card-body">
                    <div id="pay-invoice">
                        <div class="card-body">
                            <form action="{{ route('TermsCondition.create.db') }}" method="post" id="createcategory" novalidate="novalidate"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" style="width: 100%;">
                                            <label for="page_title" class="control-label mb-1">Add Title</label>
                                            <input id="page_title" placeholder="Enter Title" name="page_title" type="text"
                                                class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="pageDesc">Description</label>
                                            <textarea name="pageDesc" class="ckeditor" id="" cols="100" rows="100"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Submit</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@section('scripts')
    <script>
        $(document).ready(function() {
            CKEDITOR.editorConfig = function(config) {
                config.height = '1000px';
            };
        })
    </script>
@endsection
@endsection
