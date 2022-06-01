@section('scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script src="{{ asset('frontend/js/bootstrap.js')}}"></script>

  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>

  <script src="https://kit.fontawesome.com/b8867474d2.js" crossorigin="anonymous"></script>

  <script src="{{ asset('frontend/js/fontawesome.js')}}"></script>


  {{-- updated new dashboard --}}

  <script>
    $(document).ready(function () {


      $(".tab_1_section_parent").on("click",function(e){
          $('.tab_1_section').slideDown(500);
          $('.tab_2_section').slideUp(500);
          $('.tab_3_section').slideUp(500);
          $('.tab_4_section').slideUp(500);

      });

      $(".tab_2_section_parent").on("click",function(e){
          $('.tab_1_section').slideUp(500);
          $('.tab_2_section').slideDown(500);
          $('.tab_3_section').slideUp(500);
          $('.tab_4_section').slideUp(500);

      });
      $(".tab_3_section_parent").on("click",function(e){
          $('.tab_1_section').slideUp(500);
          $('.tab_2_section').slideUp(500);
          $('.tab_3_section').slideDown(500);
          $('.tab_4_section').slideUp(500);

      });
      $(".tab_4_section_parent").on("click",function(e){
          $('.tab_1_section').slideUp(500);
          $('.tab_2_section').slideUp(500);
          $('.tab_3_section').slideUp(500);
          $('.tab_4_section').slideDown(500);

      });

      $(".input_click").on('click',function(e){

        $('.tab_1_section').slideUp(500);
          $('.tab_2_section').slideUp(500);
          $('.tab_3_section').slideUp(500);
          $('.tab_4_section').slideUp(500);
      });

      //side nav toggle button hide/show
      $("#aside-toggle-btn").click(function () {
        $("#aside-nav-new, main").toggleClass("active");
      });

      //aside nav dropdown caret icon rotate
      $("#aside-nav-new-ul .nav-link").click(function () {
        $(this).find(".dropdown-caret-svg").toggleClass("rotate-svg");
      });

      //aside nav > nav link remove/add active class on click
      $("#aside-nav-new-ul .nav-link").click(function () {
        $("#aside-nav-new-ul .nav-link").removeClass("active");
        $(this).addClass("active");
      });

      //click on one dropdown second one automatically hide and change svg icon to
      $("#aside-nav-new-ul").on("click", ".nav-item", function () {
        const liElement = $(this);
        liElement
          .siblings()
          .children()
          .children(".dropdown-caret-svg")
          .removeClass("rotate-svg");
        liElement
          .siblings()
          .children(".aside-dropdown-menu")
          .removeClass("show");
        if ($(this).hasClass("active")) {
          liElement
            .siblings()
            .children(".aside-dropdown-menu")
            .addClass("show");
        }
      });

      if ($(window).width() <= 767) {
        $("#aside-toggle-btn").click(function () {

          $("#aside-nav-new").toggle();
        });
        $("#times").click(function () {
          $("#aside-nav-new").toggle();
        });
      }
    });
  </script>

  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
  <script>
    $(document).on('click', '.droplink1', function (event) {
      event.preventDefault();
      $('.subdrop1').toggleClass('show-menu');
      $('.subdrop2').removeClass('show-menu');
      $('.subdrop3').removeClass('show-menu');
    });
    $(document).on('click', '.droplink2', function (event) {
      event.preventDefault();
      $('.subdrop2').toggleClass('show-menu');
      $('.subdrop1').removeClass('show-menu');
    });
    $(document).on('click', '.droplink3', function (event) {
      event.preventDefault();
      $('.subdrop3').toggleClass('show-menu');
      $('.subdrop2').removeClass('show-menu');
      $('.subdrop1').removeClass('show-menu');
    });
  </script>
