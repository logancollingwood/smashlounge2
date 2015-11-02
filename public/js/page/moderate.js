$(document).ready(function() {
        gfyCollection.init();

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });

        $('.approve-link').on('click', function(event) {
          // Prevent Default Behavior
          event.preventDefault();
          var r = confirm('Are you sure you want to accept this submission?');
          if (r == false) {
              return;
          }
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");
          var $approveLink = $(this);
          var submitNum = "key=" + key;
          submitNum += "&id=";
          submitNum += $approveLink.closest('.submission').attr('data-id');
          console.log(submitNum);

          $.ajax({
            url: '/submit/add',
            type: 'POST',
            data: submitNum
          })
          .success(function(html) {
            $approveLink.closest('.submission').remove();
            console.log(html);
          })
          .fail(function() {
            console.log('failing');
          })
          .always(function(html) {

          });
        });

        $('.delete-link').on('click', function(event) {

          var r = confirm('Are you sure you want to delete this submission?');
          if (r == false) {
              return;
          }

          // Prevent Default Behavior
          event.preventDefault();

          var $deleteLink = $(this);
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");

          var submitNum = "key=" + key;
          submitNum += "&id=";
          submitNum += $deleteLink.closest('.submission').attr('data-id');
          console.log(submitNum);

          $.ajax({
            url: '/submit/delete',
            type: 'POST',
            data: submitNum
          })
          .success(function(html) {
            $deleteLink.closest('.submission').remove();
            console.log(html);
          })
          .fail(function() {
            console.log('failing');
          })
          .always(function(html) {
           
          });
        });
      });