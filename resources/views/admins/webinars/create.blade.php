@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add New Event</strong>
                </div>
                <div class="card-body">
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="select_form" class="control-label mb-1 form-select">Item Type</label>
                                        <select id="select_form" name="select_form" aria-label="Default select example"
                                            class="form-control cc-number identified visa" value="" data-val="true">
                                            <option selected value="">Select Item Type</option>
                                            <option value="1">Continuing Education</option>
                                            <option value="2">Publications</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('webinars.store') }}" method="post" id="publicationfrm"
                                novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="item_type" value="publications">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="event_title" class="control-label mb-1">Main Title</label>
                                            <input id="event_title" placeholder="Enter Name" name="event_title" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tags" class="control-label mb-1">Tags (Keywords)</label>
                                            <input id="tags" placeholder="Enter Name" name="tags" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="network_id" class="control-label mb-1 form-select">Event
                                                Category</label>
                                            <select id="category_id" name="category_id"
                                                aria-label="Default select example"
                                                class="form-control cc-number identified visa" value="" data-val="true">
                                                <option selected value="">Select Category</option>
                                                @foreach ($eventcategory as $events)
                                                    <option value="{{ $events->id }}">{{ $events->category_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pdf_file" class="control-label mb-1">PDF file</label>
                                            <input id="pdf_file" placeholder="Enter Name" name="pdf_file" type="file"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="main_photo" class="control-label mb-1">Main Photo</label>
                                            <input id="main_photo" placeholder="Enter Name" name="main_photo" type="file"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Vet_Pet_Prof_Fee" class="control-label mb-1">Vet/Pet Prof. Fee
                                                $</label>
                                            <input id="Vet_Pet_Prof_Fee" placeholder="Enter Name" name="Vet_Pet_Prof_Fee"
                                                type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Pet_Owner_Premium_Fee" class="control-label mb-1">Pet Owner Premium
                                                Fee $</label>
                                            <input id="Pet_Owner_Premium_Fee" placeholder="Enter Name"
                                                name="Pet_Owner_Premium_Fee" type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Pet_Owner_Fee" class="control-label mb-1">Pet Owner Fee $</label>
                                            <input id="Pet_Owner_Fee" placeholder="Enter Name" name="Pet_Owner_Fee"
                                                type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Vet_Pet_Prof_Premium" class="control-label mb-1">Vet/Pet Prof.
                                                Premium</label>
                                            <input id="Vet_Pet_Prof_Premium" placeholder="Enter Name"
                                                name="Vet_Pet_Prof_Premium" type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="event_description" class="control-label mb-1">Forum
                                                Description</label>
                                            <textarea class="form-control" id="event_description" rows="3" name="event_description" value=""></textarea>
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
                            <form action="{{ route('webinars.store') }}" method="post" id="continueeducationfrm"
                                novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="item_type" value="continue_edu">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="event_title" class="control-label mb-1">Main Title</label>
                                            <input id="event_title" placeholder="Enter Name" name="event_title" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tags" class="control-label mb-1">Tags (Keywords)</label>
                                            <input id="tags" placeholder="Enter Name" name="tags" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="network_id" class="control-label mb-1 form-select">Event
                                                Category</label>
                                            <select id="category_id" name="category_id"
                                                aria-label="Default select example"
                                                class="form-control cc-number identified visa" value="" data-val="true">
                                                <option selected value="">Select Category</option>
                                                @foreach ($eventcategory as $events)
                                                    <option value="{{ $events->id }}">{{ $events->category_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pdf_file" class="control-label mb-1">PDF file</label>
                                            <input id="pdf_file" placeholder="Enter Name" name="pdf_file" type="file"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="main_photo" class="control-label mb-1">Main Photo</label>
                                            <input id="main_photo" placeholder="Enter Name" name="main_photo" type="file"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="video" class="control-label mb-1 form-select">Video
                                                    Source</label>
                                                <select name="result" class="form-control" id="sel3"
                                                    onchange="showresult(this.value)">
                                                    <option value="" disabled selected>--Select--</option>
                                                    <option value="1">Youtube</option>
                                                    <option value="2">Vimeo</option>
                                                    <option value="3">My Computer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="ytlink">
                                        <label for="" class="control-label mb-1 form-select">Add YouTube Video</label>
                                        <input id="event_add_ytlink" name="event_add_ytlink" type="url" class="form-control"
                                            value="">
                                    </div>
                                    <div class="col-sm-6" id="vimeolink">
                                        <label for="" class="control-label mb-1 form-select">Add Vimeo Video</label>
                                        <input id="event_add_vimeolink" name="event_add_vimeolink" type="url"
                                            class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6" id="video">
                                        <label for="" class="control-label mb-1 form-select">Upload Video</label>
                                        <input id="event_add_video" name="event_add_video" type="file" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sponser_one" class="control-label mb-1">Sponsor 1</label>
                                            <input id="sponser_one" placeholder="Enter Name" name="sponser_one" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sponser_two" class="control-label mb-1">Sponsor 2</label>
                                            <input id="sponser_two" placeholder="Enter Name" name="sponser_two" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sponser_three" class="control-label mb-1">Sponsor 3</label>
                                            <input id="sponser_three" placeholder="Enter Name" name="sponser_three"
                                                type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="date" class="control-label mb-1">Date</label>
                                            <input id="date" placeholder="" name="date" type="date" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="time" class="control-label mb-1">Time</label>
                                            <input id="time" placeholder="" name="time" type="time" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_one" class="control-label mb-1">Presenter 1</label>
                                            <input id="presenter_one" placeholder="Enter Name" name="presenter_one"
                                                type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_one_url" class="control-label mb-1">Presenter 1
                                                URL</label>
                                            <input id="presenter_one_url" placeholder="" name="presenter_one_url" type="url"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_two" class="control-label mb-1">Presenter 2</label>
                                            <input id="presenter_two" placeholder="Enter Name" name="presenter_two"
                                                type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_two_url" class="control-label mb-1">Presenter 2
                                                URL</label>
                                            <input id="presenter_two_url" placeholder="" name="presenter_two_url" type="url"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_three" class="control-label mb-1">Presenter 3</label>
                                            <input id="presenter_three" placeholder="Enter Name" name="presenter_three"
                                                type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presenter_three_url" class="control-label mb-1">Presenter 3
                                                URL</label>
                                            <input id="presenter_three_url" placeholder="" name="presenter_three_url"
                                                type="url" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Pet_Owner_Fee" class="control-label mb-1">Pet Owner Fee $</label>
                                            <input id="Pet_Owner_Fee" placeholder="Enter Fee" name="Pet_Owner_Fee"
                                                type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Pet_Owner_Premium_Fee" class="control-label mb-1">Pet Owner Premium
                                                Fee
                                                $</label>
                                            <input id="Pet_Owner_Premium_Fee" placeholder="Enter Fee"
                                                name="Pet_Owner_Premium_Fee" type="number" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Vet_Pet_Prof_Fee" class="control-label mb-1">Vet/Pet Prof. Fee
                                                $</label>
                                            <input id="Vet_Pet_Prof_Fee" placeholder="Enter Fee" name="Vet_Pet_Prof_Fee"
                                                type="number" class="form-control" value="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="event_description" class="control-label mb-1">Forum
                                                Description</label>
                                            <textarea class="form-control" id="event_description" rows="3" name="event_description" value=""></textarea>
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
    </div>
@endsection
<script>
    function showresult(str) {
        if (str == "1") {
            $
                ("#ytlink").css('display', 'block');
        } else {
            $("#ytlink").css('display', 'none');
        }
        if (str == "2") {
            $("#vimeolink").css('display', 'block');
        } else {
            $("#vimeolink").css('display', 'none');
        }
        if (str == "3") {
            $("#video").css('display', 'block');
        } else {
            $("#video").css('display', 'none');
        }
    }
</script>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#ytlink').hide();
            $('#vimeolink').hide();
            $('#video').hide();

        })
    </script>
    <script type="text/javascript">
        $('#publicationfrm').hide();
        $('#continueeducationfrm').hide();
        $("#select_form").change(function() {
            if ($(this).val() == "1") {
                $('#publicationfrm').hide();
                $('#continueeducationfrm').show();
            } else if ($(this).val() == "2") {
                $('#publicationfrm').show();
                $('#continueeducationfrm').hide();
            } else {
                $('#publicationfrm').hide();
                $('#continueeducationfrm').hide();
            }
        });
    </script>
@endsection
