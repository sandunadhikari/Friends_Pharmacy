$(document).ready(function(){
    $("#update_form").validate({
          rules:{
                cname:"required",
                add:"required",
          
                lno:{
                        required:true,
                        number:true,
                        maxlen:10
                    
                    },
                mno:{
                        required:true,
                        number:true,
                        maxlen:10
                    },
                mail:{
                        required:true, 
                        email:true
                    },
                fax:{
                     number:true            
                    },
          
          
      },
        
            messages:{
                      cname:"Please enter company name",
                      add:"Please enter address",
                      lno:{
                            required:"Please enter land number",
                            number:"Enter a valid phone number",
                            maximum_length:"Enter a valid number",
                                 },
                      mno:{
                            required:"Please enter mobile number",
                            number:"Enter a valid mobile number",
                            maximum_length:"Enter a valid number",
                                 },
                      mail:{
                            required:"Please enter email address",
                            email:"Enter a valid email address",
                                 },
                      fax:{
                            number:"Enter a valid fax number"
                                 },
                        },
                                 
    
                    
                        submitHandler: function(form) {
      form.submit();
    }
       
   }); 
    
    
      

    
    
    
});