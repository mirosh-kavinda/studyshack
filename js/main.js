// loading html element to the  main layout

$(function () {
  $("#footer-placeholder").load("utils/footer.php");
});

//Animation init
new WOW().init();

//Modal
$("#myModal").on("shown.bs.modal", function () {
  $("#myInput").focus();
});

// Material Select Initialization
$(document).ready(function () {
  $(".mdb-select").material_select();
});

$(document).ready(function () {
  // Show/hide the button depending on the user's scroll position
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#scroll-top-btn").fadeIn();
    } else {
      $("#scroll-top-btn").fadeOut();
    }
  });
  // When the button is clicked, smoothly scroll to the top of the page
  $("#scroll-top-btn").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });
});
