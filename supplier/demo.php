






<html>
    <head>
        <script type="text/javascript" src="js/jquery-3.1.0.min"></script>
        <script type="text/javascript">
        
        function checkname()
        {
            var name = document.getElementById( "name" ).value;
            
            if(name)
                     {
                      $.ajax({
                      type: 'post',
                      url: 'checkdata.php',
                      data: {
                       user_name:name,
                      },
                      success: function (response) {
                       $( '#name_status' ).html(response);
                       if(response=="OK")	
                       {
                        return true;	
                       }
                       else
                       {
                        return false;	
                       }
                      }
                      });
                     }
            
            else
             {
              $( '#name_status' ).html("");
              return false;
             }
}
                
            function checkemail()
                    {
                     var email=document.getElementById( "email" ).value;

                     if(email)
                     {
                      $.ajax({
                      type: 'post',
                      url: 'checkdata.php',
                      data: {
                       user_email:email,
                      },
                      success: function (response) {
                       $( '#email_status' ).html(response);
                       if(response=="OK")	
                       {
                        return true;	
                       }
                       else
                       {
                        return false;	
                       }
                      }
                      });
                     }
                     else
                     {
                      $( '#email_status' ).html("");
                      return false;
                     }
                    }
        
        
        </script>
    </head>
    <body>
        <form>
    <table>
        <tr>
        <td>Name</td>
        <td><input type="text" id=name onkeyup="checkname()"></td>
        </tr>
        <tr>
        <td>email</td>
        <td><input type="text" id=email onkeyup="functioncheckmail()"></td>
        </tr>
        
    
    </table>
            <input type="submit" value="add">
            </form>
    </body>

</html>