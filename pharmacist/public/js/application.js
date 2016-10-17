$(document).ready( function() {
  /*var pathname = window.location.pathname;
  var paths = pathname.split('/');
  var curr_loc = paths[3];
  console.log(curr_loc);
  
  switch(curr_loc){
	  case 'manageStock':
		//$('#manage_stock').delay(300).slideDown(700);
		console.log('manage');
		$('#manage_stock').addClass('chosen');
		break;
	  case 'NewMedicine':
		//$('#new_medicine').delay(300).slideDown(700);
		console.log('medicine');
		$('#new_medicine').addClass('chosen');
		break;
  }*/
  
  
  var $submenu = $('.submenu');
  var $mainmenu = $('.mainmenu');
  $submenu.hide();
  //$submenu.first().delay(400).slideDown(700);
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
});