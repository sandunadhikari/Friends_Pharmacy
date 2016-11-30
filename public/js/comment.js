$(document).ready(function()
{
		$('.reply').keyup(function(e)
		{
			if (e.keyCode == 13) 
			{
				var post_id = $(this).attr('post_id');
				var reply = $(this).val();

				$.post('reply.php', {post_id:post_id, reply:reply});
				$('.reply').val('');
			}
		});
});