@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <button onclick="saveTemplate()" class="btn btn-primary">Save Template</button>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <button id="undoButton" class="btn btn-sm btn-primary"><i class="fas fa-undo"></i></button>
                            <button id="redoButton" class="btn btn-sm btn-primary"><i class="fas fa-redo"></i></button>

                            <button id="copyButton" class="btn btn-sm btn-primary"><i class="fas fa-copy"></i></button>
                            <button id="cutButton" class="btn btn-sm btn-primary"><i class="fas fa-cut"></i></button>
                            <button id="pasteButton" class="btn btn-sm btn-primary"><i class="fas fa-paste"></i></button>


                            <button id="boldButton" class="btn btn-sm btn-primary"><i class="fas fa-bold"></i></button>
                            <button id="italicButton" class="btn btn-sm btn-primary"><i class="fas fa-italic"></i></button>
                            <button id="underlineButton" class="btn btn-sm btn-primary"><i
                                    class="fas fa-underline"></i></button>
                            <button id="leftAlignButton" class="btn btn-sm btn-primary"><i
                                    class="fas fa-align-left"></i></button>
                            <button id="centerAlignButton" class="btn btn-sm btn-primary"><i
                                    class="fas fa-align-center"></i></button>
                            <button id="rightAlignButton" class="btn btn-sm btn-primary"><i
                                    class="fas fa-align-right"></i></button>
                            <button id="justifyAlignButton" class="btn btn-sm btn-primary"><i
                                    class="fas fa-align-justify"></i></button>
                            <button id="createLinks" class="btn btn-sm btn-primary"><i class="fas fa-link"></i></button>
                            <button id="unlink" class="btn btn-sm btn-primary"><i class="fas fa-unlink"></i></button>

                            <button id="orderList" class="btn btn-sm btn-primary"><i class="fas fa-list-ol"></i></button>
                            <button id="unorderList" class="btn btn-sm btn-primary"><i class="fas fa-list-ul"></i></button>



                            <button class="btn btn-sm btn-primary" id="insertImage" onclick="$('#myInput').click();"><i
                                    class="fas fa-image"></i></button>
                            <input id="myInput" type="file" style="visibility:hidden; width: 5px;" />
                            Color: <input type="color" id="forColorButton" style="width: 28px;">
                            <label for=""><i class="fas fa-palette"></i></label>
                            <input type="color" id="backColorButton" style="width: 28px;">
                            <label for=""><i class="fas fa-font"></i></label>
                            <select name="" id="increateFontSizeButton">
                                @for ($i = 0; $i < 7; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2" id="contentEditable">
                <div id="email_templete_load_area" class="col-sm-8" data-template="{{ $email_template }}">
                </div>

            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#email_templete_load_area').empty();
            $('#email_templete_load_area').append($('#email_templete_load_area').attr('data-template'));
        });

        $('#email_templete_load_area').click(function() {
            document.getElementById('email_templete_load_area').contentEditable = 'true';

        });
        $("#undoButton").on('click', function() {
            document.execCommand( "undo", false, "" );
        });
        $("#redoButton").on('click', function() {
            document.execCommand( "redo", false, "" );
        });

        $("#copyButton").on('click', function() {
            document.execCommand( "copy", false, "");
        });
        $("#pasteButton").on('click', function() {
            document.execCommand( "paste", false, "");
        });
        $("#cutButton").on('click', function() {
            document.execCommand( "cut", false, "");
        });

        $("#boldButton").on('click', function() {
            document.execCommand("bold", false, "");
        });
        $("#italicButton").on('click', function() {
            document.execCommand("italic", false, "");
        });
        $("#underlineButton").on('click', function() {
            document.execCommand("underline", false, "");
        });
        $("#forColorButton").on('change', function() {
            var forColor = $(this).val();
            document.execCommand("foreColor", false, forColor);
        });
        $("#backColorButton").on('change', function() {
            var backColor = $(this).val();
            document.execCommand("backColor", false, backColor)
        });

        $("#increateFontSizeButton").on('change', function() {
            var fontsize = "0";
            fontsize = $("#increateFontSizeButton").val();
            document.execCommand("fontSize", false, fontsize);
        });


        $("#leftAlignButton").on('click', function() {
            document.execCommand("justifyLeft", false, "");
        });
        $("#centerAlignButton").on('click', function() {
            document.execCommand("justifyCenter", false, "");
        });
        $("#rightAlignButton").on('click', function() {
            document.execCommand("justifyRight", false, "");
        });
        $("#justifyAlignButton").on('click', function() {
            document.execCommand("justifyFull", false, "");
        });

        $("#createLinks").on('click', function() {
            var url = prompt();
            document.execCommand("createLink", false, "http://" + url);
        });

        $("#unlink").on('click',function(){
            document.execCommand( "unlink", false, "" );
        });
        $("#orderList").on('click',function(){
            document.execCommand("insertorderedlist", false, "");
        });
        $("#unorderList").on('click',function(){
            document.execCommand( "insertUnorderedList", false, "" );
        });

        $("#myInput").on('change', function() {

            var input = $("#myInput").val();

            document.execCommand("insertImage", false, "data:image/jpeg;base64,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");
        });

        function saveTemplate() {
            var content = $('#email_templete_load_area').html();
            $.ajax({
                url: '{{ route('email.compaign.update') }}',
                type: 'POST',
                data: {
                    content: content,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    console.log(res.content);
                }
            });
        }
    </script>
@endsection
