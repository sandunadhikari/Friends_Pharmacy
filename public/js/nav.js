jQuery(document).ready(function($){
	
	//get current path and find target link
	var path = window.location.pathname.split("/").pop();

	//home page with empty path
	if (path=='') 
	{
		path = 'index.php';
	}

	var target = $('header nav a[href="'+path+'"]');
	target.addClass('active');
})