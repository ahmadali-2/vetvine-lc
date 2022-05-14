<div class="modal fade" id="myPopup">
        <div class="modal-dialog custum_popup">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <div class="popup-header">
                        <span class="popup-logo"><img src="{{ asset('frontend/images/popup-logo.png') }}" alt="logo"></span>
                        <span class="close" data-dismiss="modal">&times;</span>
                    </div>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="popup-body">
                        <h2><span>Contact Us</span></h2>
                        <form action="" class="custom_form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">*Email Address</label>
                                        <input type="email" placeholder="" class="my-custom_input">
                                    </div>
                                </div>
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">*First Name</label>
                                        <input type="text" placeholder="" class="my-custom_input">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">*Last Name</label>
                                        <input type="text" placeholder="" class="my-custom_input">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">*Message</label>
                                        <textarea name="" id="" class="my-custom_textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="google-captcha google_custom">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="popup-footer">
                        <button class="toggle button send-msg">Submit</button>
                    </div>
                </div>



            </div>
        </div>
    </div>