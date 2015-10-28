

$(function() {

    var $sidebar   = $("#sidebar"),
        $dataAnchor = $(".dataAnchor"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        anchorOff  = $dataAnchor.offset(),
        topPadding = 50;

    $window.scroll(function() {
      if ($(window).width() > 768) {
        if ($window.scrollTop() > offset.top) {
            $sidebar.css(
              "margin-top", $window.scrollTop() - offset.top + topPadding
            );
            $("#sidebarBrand").show();
        } else {
            $sidebar.css("margin-top", 0);
            $("#sidebarBrand").hide();
        }
      } else {
          $sidebar.css("margin-top", 0);
          $("#sidebarBrand").hide();
      }

    });
    
    if (anchorOff != undefined) {
      $window.scroll(function() {
        if ($(window).width() > 768) {
          if($window.scrollTop() > anchorOff.top) {
            $dataAnchor.css(
              "margin-top", $window.scrollTop() - anchorOff.top + 30
            );
          }
        }
      });
    }
});