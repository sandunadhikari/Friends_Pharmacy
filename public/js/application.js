$(document).ready( function() {
  var $submenu = $('.submenu');
  var $mainmenu = $('.mainmenu');
  $submenu.hide();
  $submenu.first().delay(400).slideDown(700);
  $submenu.on('click','li', function() {
    $submenu.siblings().find('li').removeClass('chosen');
    $(this).addClass('chosen');
  });
  $mainmenu.on('click', 'li', function() {
    $(this).next('.submenu').slideToggle().siblings('.submenu').slideUp();
  });
  $mainmenu.children('li:last-child').on('click', function() {
    $mainmenu.fadeOut().delay(500).fadeIn();
  });
    
    
    /// --------------------------- Notification area js
    $('#noti_Counter')
        .css({ opacity: 0 })             
        .css({ top: '-10px' })
        .animate({ top: '-1px', opacity: 1 },500);

    $('#noti_Button').click(function () {
        $('#notifications').fadeToggle('fast', 'linear', function () {
            if ($('#notifications').is(':hidden')) {
                $('#noti_Button').css('background-color', '#32CD32');
            }
            else $('#noti_Button').css('background-color', '#FFF');        
        });

        $('#noti_Counter').fadeOut('slow');              

        return false;
    });


    $(document).click(function () {
        $('#notifications').hide();
        if ($('#noti_Counter').is(':hidden')) {
            $('#noti_Button').css('background-color', '#32CD32');
        }
    });

    $('#notifications').click(function () {
        return false;      
    });
    
    
});
