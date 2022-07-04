<style>
.guest_screen_text{
    padding: 10px;
    padding-top: 20px;
    text-align: center;
}
.guest_button{

}
.top_heading{
    color: '#577E80';
}
.bottom_heading{
    color: 'black';
}
</style>
<div class="popup-body">
    <h2 class="member-login">Course Registration</span></h2>
    <h2>Completed</h2>
    <h3 class="guest_screen_text top_heading">CANCER IN PETS - GET TO KNOW YOUR PET'S LUMPH NODES!</h3>
    <h5>We just sent an email confirming your registration as well as additional details about this event to ****@***.com</h5>
    <p>Don't recieve an email from us ? check you SPAM folder, still can't find it ? Need help or having trouble ? <a href="#"><u>Contact Us</u></a></p>
</div>
<div class="popup-footer">
    <a id="continue_guest" type="submit" class="toggle button send-msg">Add to Calendar</a>
    <a href="#"><u>Close this Window</u></a>
    <div id="guest_continue_loading" style="display: none"><img src="{{ asset('/frontend/images/orangeLoading.gif')}}" width="40px" style="margin-left:10px;"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#continue_guest').on('click', function(){
        $('#guest_continue_loading').css('display','block');
        setTimeout(
        function()
        {
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: "GET",
            url: '/next-guest-screen',
            data: {guest_screen: 6},
            success: function(response){
                $('#login_main_body').empty();
                $('#login_main_body').append(response.html);
            }
        })
        }, 1000);;
    });
</script>
