// MAIN PAGE NAV
$(document).ready(function () {
  /////* For the Sticky Nav*/////

  $(".js--section-cards").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "60px;" /*Sticky nav pops up 60px before the next section*/,
    }
  );
});
