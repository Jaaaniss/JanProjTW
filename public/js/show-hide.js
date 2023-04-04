$(document).ready(function() {
    $('.nav-toggle').click(function() {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function() {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('More info');
            } else {
                toggle_switch.html('Hide');
            }
        });
    });
});


 $(document).ready(function() {
     $('.nav-toggle2').click(function() {
         var collapse2_content_selector = $(this).attr('href');
         var toggle_switch = $(this);
         $(collapse2_content_selector).toggle(function() {
             if ($(this).css('display') == 'none') {
                 toggle_switch.html('More info');
             } else {
                 toggle_switch.html('Hide');
             }
         });
     });
 });


 $(document).ready(function() {
     $('.nav-toggle3').click(function() {
         var collapse3_content_selector = $(this).attr('href');
         var toggle_switch = $(this);
         $(collapse3_content_selector).toggle(function() {
             if ($(this).css('display') == 'none') {
                 toggle_switch.html('More info');
             } else {
                 toggle_switch.html('Hide');
             }
         });
     });
 });


 $(document).ready(function() {
    $('.nav-toggle4').click(function() {
        var collapse4_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse4_content_selector).toggle(function() {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('More info');
            } else {
                toggle_switch.html('Hide');
            }
        });
    });
});
