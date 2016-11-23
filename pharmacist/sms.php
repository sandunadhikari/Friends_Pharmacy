
<?php
$title = "SMS FORM";

$content = "<h2 style='text-align:center;'>SMS FORM</h2>
    <form name='myForm' action='message/text.php' method ='post' autocomplete='off' onsubmit='return validateForm()'>
    
      <fieldset>
        <table border=0>
	   <tr>
		 <td>Phone Number</td>
		 <td><input type='text' name='recipient' placeholder=' enter without zero' required></td>
	   </tr>
	   <tr>
		 <td>Message</td>
		 <td><textarea rows=4 cols=40 name='message' required></textarea></td>
	   </tr>
	   <tr>
		 <td> </td>
		 <td><input type=submit name=submit value=Send></td>
	   </tr>
	   </table>


      
     </fieldset>
</form> ";





include 'template.php';

?>
