@extends('frontend.master')
@section('content')
<body>
    {{-- <header class="main-wrapper">
        <div class="top_Wrapper">
            <div class="container">
                <div class="top-social">
                    <ul class="list__icons">
                        <li>
                            <div class="input-group mb-3">
                                <span class="search-text">Search: &nbsp;</span>
                                <input type="text" class="form-control top-search" placeholder=""
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn search_btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="reg-login_btn" href="#" data-toggle="modal" data-target="#login-modal">Register /
                                Login</a>
                        </li>
                        <li>
                            <a href="#" class="toggle-contact" data-toggle="modal" data-target="#myPopup"><span
                                    class="mail-logo"><i class="fa fa-envelope"></i></span> Contact Us</a>
                        </li>
                    </ul>
                </div>
                </p>
            </div>
        </div>
        <!-- <img src="images/logo.png" class="img-fluid logo" alt="" srcset=""> -->
        <div class="container-fluid p-0">
            <div class="container">
                <nav class=" bg-header navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.html"><span class="header-logo"><img src="img/logo.png"
                                class="img-fluid logo" alt="" srcset=""></span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><img src="img/menu-icon.png" width="25" height="18"
                                alt=""></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-wrapper-one">
                            <li class="nav-item droplink  ">
                                <a class="nav-link nav-anchor" href="grow.html" aria-haspopup="true">grow <i
                                        class="fas fa-chevron-down droplink1"></i> <br> <span
                                        class="nav-sub-hed">Education</span></a>
                                <div class="subdrop subdrop1" aria-label="Main Links Sub Navigation">
                                    <!-- <h2 class="nav-sub-hed">Education</h2> -->
                                    <ul class="ewp-list">
                                        <li class="">
                                            <div class="edu-show1">
                                                <div class="vet-underline">
                                                    <div class="sub-menu-flex">
                                                        <div class="flexrow1">
                                                            <!-- <u>Vet / Pet Professionals</u> -->
                                                            <ul>
                                                                <li><a href="#">Upcoming Webinars</a></li>
                                                                <li><a href="#">videos on demand</a></li>
                                                                <li><a href="#">Certificate & special programs</a></li>
                                                                <li><a href="#">forums</a></li>
                                                                <li><a href="#">Pet Health Articles </a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- <div class="flexrow1 pet-owner-ul"><u>Pet Owner</u>
                                                <ul>
                                                    <li><a href="#">Upcoming Webinars</a></li>
                                                    <li><a href="#">Webinars on demand</a></li>
                                                    <li><a href="#">pet health articles</a></li>
                                                </ul>
                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item droplink  ">
                                <a class="nav-link nav-anchor" href="thrive.html">thrive <i
                                        class="fas fa-chevron-down droplink2"></i>
                                    <br> <span class="nav-sub-hed">Wellness</span>
                                </a>
                                <div class="subdrop subdrop2" aria-label="Main Links Sub Navigation">
                                    <ul class="wallnes-ul">
                                        <li><a href="">wellness Coaching for professionals</a></li>
                                        <li><a href="">wellness Wisdom</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item droplink ">
                                <a class="nav-link nav-anchor" href="heal.html">heal <i
                                        class="fas fa-chevron-down droplink3"></i>
                                    <br>
                                    <span class="nav-sub-hed">Pet Loss Support</span>
                                </a>
                                <div class="subdrop subdrop3" aria-label="Main Links Sub Navigation">
                                    <ul style="display: inline-block;">
                                        <li>
                                        <li><a href="">about Virtual pet loss support</a></li>
                                        <li><a href="">Schedule & Registration</a></li>
                                        <li><a href="">our Facilitators</a></li>
                                        <li><a href="">pet loss & grief Resources</a></li>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item nav-last-child">
                        <a class="nav-link" href="why-vetvine.html"> why vetvine?</a>
                    </li>
                    <!-- <li class="nav-item">
                           <a class="nav-link" href="contact.html"> contact</a>
                           </li> -->
                    </ul>
            </div>
            </nav>
        </div>
        </div>
        <!-- Contact popup start  -->
        <!-- The Modal -->
        <div class="modal fade" id="myPopup">
            <div class="modal-dialog custum_popup">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="popup-header">
                            <span class="popup-logo"><img src="./img/popup-logo.png" alt="logo"></span>
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
        <!-- Login Modal start  -->
        <div class="modal fade" id="login-modal">
            <div class="modal-dialog custum_popup">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="popup-header">
                            <span class="popup-logo"><img src="./img/popup-logo.png" alt="logo"></span>
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="popup-body">
                            <h2 class="member-login"><span>MEMBER LOGIN</span></h2>
                            <div class="register-in-login">new to VETVINE? <a class="Register-Now" href="#"
                                    data-toggle="modal" data-target="#Registration-modal">Register now</a></div>
                            <form action="" class="custom_form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="" class="my-custom_label">Email</label>
                                            <input type="email" placeholder="" class="my-custom_input">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="my-custom_label">password</label>
                                            <input type="text" placeholder="" class="my-custom_input">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="keep-logged"><label for="checkme"><input type="checkbox"
                                                    id="checkme"> Keep me logged
                                                in</label></span>
                                        <span class="forgaot"><a href="#">forgot password?</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="popup-footer">
                            <a href="edit-profile.html" class="toggle button send-msg">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration  Modal start  -->
        <div class="modal fade" id="Registration-modal">
            <div class="modal-dialog register-modal">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <div class="popup-header">
                            <span class="popup-logo"><img src="./img/popup-logo.png" alt="logo"></span>
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="popup-body">
                            <h2 class="member-login"><span>Member Registration</span></h2>

                            <form action="" class="custom_form">
                                <section class="registration-tab">
                                    <div class="container">
                                        <div>

                                            <p><sup>*</sup>Select the category that best describes your current activity
                                                or status in the
                                                profession</p>


                                            <div class="lightpage">

                                                <div
                                                    class="arrow-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">

                                                    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                                        role="tablist">

                                                        <li class="ui-state-default ui-corner-top ui-tabs-active tab_1_section_parent"
                                                            role="tab">
                                                            <a href="#" class="ui-tabs-anchor" role="presentation">
                                                                <span>Veterinary Professional</span>
                                                            </a>

                                                            <ul class=" tab_1_section">

                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios1">
                                                                        Veterinarian
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios2">
                                                                        Veterinary Specialist
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios3" value="option3">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios3">
                                                                        Veterinary Technician
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios4" value="option4">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios4">
                                                                        Veterinary Client Care / Hospital Admin
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li class="ui-state-default ui-corner-top tab_2_section_parent"
                                                            role="tab">
                                                            <a href="#" class="ui-tabs-anchor" role="presentation">
                                                                <span>Vet / Vet Tech Student</span>
                                                            </a>

                                                            <ul class="tab_2_section">

                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios1">
                                                                        Veterinary Student
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios2">
                                                                        Veterinary Technician Student
                                                                    </label>
                                                                </li>
                                                            </ul>

                                                        </li>

                                                        <li class="ui-state-default ui-corner-top tab_3_section_parent"
                                                            role="tab">
                                                            <a href="#ta3" class="ui-tabs-anchor" role="presentation">
                                                                <span>Pet Care Professional </span>
                                                            </a>

                                                            <ul class="tab_3_section">

                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios1">
                                                                        Trainer / Animal Behavior Consultant
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios2">
                                                                        Breeder
                                                                    </label>
                                                                </li>
                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios2">
                                                                        Other Service Provider
                                                                    </label>
                                                                </li>
                                                            </ul>


                                                        </li>
                                                        <li class="ui-state-default ui-corner-top tab_4_section_parent"
                                                            role="tab">
                                                            <a href="#" class="ui-tabs-anchor" role="presentation">
                                                                <span>Pet Owner</span>
                                                            </a>
                                                            <ul class="tab_4_section">

                                                                <li class="form-check">
                                                                    <input class="form-check-input remove_box"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios1">
                                                                        Pet Owner
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                    </ul>



                                                    <div class="row form-vet-section email_top w-75 mx-auto mt-5">
                                                        <div class="col-sm-12 mb-3">
                                                            <h6><i class="red-star">*</i>Email Address</h6>
                                                            <input type="email" placeholder="Email"
                                                                class="form-control mb-0 input_click">
                                                            <!-- <label for="" class="input-bottom-label">You will use your eamil address to
                                          login.</label> -->
                                                        </div>



                                                        <div class="col-sm-6 mb-3">
                                                            <h6><i class="red-star">*</i>Password</h6>
                                                            <input type="password" placeholder="Password"
                                                                class="form-control mb-0 input_click">
                                                            <!-- <label for="" class="input-bottom-label">Password must be at least 6 characters in
                                          length.</label> -->
                                                        </div>

                                                        <div class="col-sm-6 mb-3">
                                                            <h6><i class="red-star">*</i>Confirm Password</h6>
                                                            <input type="password" placeholder="Confirm Password"
                                                                class="form-control mb-0 input_click">
                                                            <!-- <label for="" class="input-bottom-label">Enter your password again for
                                          confirmation.</label> -->

                                                        </div>
                                                        <div class="col-sm-6 mb-3">
                                                            <h6><i class="red-star">*</i>FIRST NAME</h6>
                                                            <input type="text" placeholder="FIRST NAME"
                                                                class="form-control mb-0 input_click">
                                                            <!-- <label for="" class="input-bottom-label">Enter your password again for
                                          confirmation.</label> -->

                                                        </div>
                                                        <div class="col-sm-6 mb-3">
                                                            <h6><i class="red-star">*</i>LAST NAME</h6>
                                                            <input type="text" placeholder="LAST NAME"
                                                                class="form-control mb-0 input_click">
                                                            <!-- <label for="" class="input-bottom-label">Enter your password again for
                                          confirmation.</label> -->

                                                        </div>

                                                        <div class="col-sm-12">
                                                            <h6><i class="red-star">*</i>Timezone</h6>
                                                            <select placeholder="" class="form-control input_click">
                                                                <option value="1">Timezone</option>
                                                                <option value="2">(UTC-8) Pacific Time (US &amp; Canada)
                                                                </option>
                                                                <option value="3">(UTC-8) Pacific Time (US &amp; Canada)
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12 text-center">
                                                            <div class=" mb-4 mm-new-checkbox">
                                                                <input class="form-check-input input_click"
                                                                    type="checkbox">
                                                                <span><a href="#" class="">
                                                                        <sup>*</sup>I have read and agree to the<a
                                                                            href="#" style="color: #f27222;">Terms of
                                                                            Service</a>
                                                                    </a></span>
                                                            </div>

                                                            <div class="d-flex justify-content-center mb-5">
                                                                <div class="g-recaptcha"
                                                                    data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                                                    <div style="width: 304px; height: 78px;">
                                                                        <div><iframe title="reCAPTCHA"
                                                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=ZmlsZTo.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=fao1bvu68guf"
                                                                                width="304" height="78"
                                                                                role="presentation"
                                                                                name="a-k2i5c5yx6045" frameborder="0"
                                                                                scrolling="no"
                                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                                        </div><textarea id="g-recaptcha-response-1"
                                                                            name="g-recaptcha-response"
                                                                            class="g-recaptcha-response"
                                                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="submit"
                                                                class="continue-button">Continue</button>
                                                        </div>
                                                    </div>






                                                </div>

                                            </div>
                                        </div>
                                </section>
                            </form>
                        </div>
                        <div class="popup-footer">
                            <div class="text-center already-account">
                                <p> IF YOU ALREADY HAVE AN ACCOUNT <a href="#" data-toggle="modal"
                                        data-target="#login-modal"> LOG IN
                                        HERE</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration modal end  -->
        <!-- contact popup end  -->
    </header> --}}
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="video-detail-inner">
                <div class="video-title-he d-flex flex-wrap justify-content-around ">
                    <h2>Common and uncommon diseases</h2>
                    {{-- <div class="" > --}}
                        <a href="#" class="vd-more-inf">More Info</a>
                    {{-- </div> --}}
                </div>
                <div class="detail-video-ratting">
                    <div class="vd-rating" >
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                    </div>
                    <div class="detail-video-time">
                        <span>10 mins</span>
                        <p>02/17/22</p>
                    </div>
                </div>
                <div class="detail-vedio">
                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>

                <div class="video-detail-para border-0">
                    <p>This is the second of a 4-part series on feeding the horse, presented by internationally
                        recognized and leading equine nutrition consultant Dr. Steve Jackson.
                    </p>
                    <p>
                        This segment will focus on the relationship between mare nutrition, fetal development, and
                        postpartum growth including the feeding and nutrition of weanlings and yearlings. Discussion
                        will include:
                    </p>
                    <p>- Nutrition of the pregnant mare and the impact on fetal development <br />
                        - Milk production in mares and "creep feed or no creep feed" <br />
                        - Transition of foals from on their mares to weanlings and then to yearlings <br />
                        - Pitfalls that may be encountered along the way that may involve or be caused by nutrition
                        <br />
                        - Feeding horses for sale or show
                    </p>

                </div>
            </div>
            <section class="video-section-wrapper border-top-0 mb-4">
                <div class="container">

                    <div class="row w-100 m-0">
                        <div class="col-12">
                            <h1 class="Upcoming-webinars">You might also like</h1>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/USrRlnBFoSw" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/6265Qk-W-xI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/USrRlnBFoSw" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/6265Qk-W-xI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
    @endsection
    