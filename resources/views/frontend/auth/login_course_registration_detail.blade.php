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
    <h2 class="member-login"><span>Course Registration</span></h2>
    <h5 class="guest_screen_text top_heading">CANCER IN PETS - GET TO KNOW YOUR PET'S LUMPH NODES!</h5>
    <p class="guest_screen_text bottom_heading">Vetvine Premium Membership Subscriber Registration fee: <b>$20</b></p>
    <p class="guest_screen_text">Sign me up for this Course!</p>
</div>
<div class="popup-footer">
    <a id="continue_guest" type="button" class="toggle button send-msg">PAY $20</a>
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
			data: {guest_screen: 3},
			success: function(response){
                $('#login_main_body').empty();
                $('#login_main_body').append(response.html);
			}
		})
        }, 1000);;
    });
</script>
