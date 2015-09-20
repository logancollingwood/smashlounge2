

$(function() {

    var $sidebar   = $("#sidebar"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 90;

    $window.scroll(function() {
      if ($(window).width() > 768) {
        if ($window.scrollTop() > offset.top) {
            $sidebar.css(
              "margin-top", $window.scrollTop() - offset.top + topPadding
            );
            $("#sidebarBrand").show(150);
        } else {
            $sidebar.css("margin-top", 0);
            $("#sidebarBrand").hide(150);
        }
      } else {
          $sidebar.css("margin-top", 0);
          $("#sidebarBrand").hide(150);
      }
    });
    
});