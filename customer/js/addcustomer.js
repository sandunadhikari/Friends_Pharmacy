$(document).ready(function(){
    $("#form").validate({ 
     rules:{
          fname:"required",
          lname:"required",
          dob:"required",
                
          email:{
                required:true,
                mail:true,
                },
        
           mobile:{
			   maxlength:10,
                required:true,
                number:true    
                },
           nic:{
               required:true,
               maxlength:10,
           }
                    
            
      },
            
    messages:{
             fname:"Please enter first name",
             lname:"Please enter last name",
                       
            dob:"Enter birth date",
               
            mobile:{
					maxlength:"Length of mobile number is incorrect",
                    required:"Please enter contact number",
                    number:"Enterd number is wrong",
                        },
            email:{
                    required:"Please enter emil",
                    number:"Enterd number is wrong",
                        
                    },
            nic:{
                required:"Please enter NIC",
                maxlength:"Enterd NIC is invalid",
                        }
                       
                       
            },
                        submitHandler: function(form) {
      form.submit();
    }
       
   }); 

    
    
    
    
    
});