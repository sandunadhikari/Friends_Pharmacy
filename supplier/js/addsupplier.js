$(document).ready(function(){
    $("#form").validate({ 
     rules:{
          cname:"required",
          add:"required",
          lno:{
                required:true,
                number:true,
                maxlength:10,
                minlength:10,
          },
        
          mno:{
                required:true,
                number:true,
                maxlength:10,
                minlength:10
                } ,
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
                required:"Enter land number",
                number:"Entered number is wrong",
                maxlength:"Please enter a valid number",
                minlength:"Please enter a valid number",
                   },
            mno:{
                required:"Enter mobile number",
                number:"Entered number is wrong",
                maxlength:"Please enter a valid number",
                minlength:"Please enter a valid number",
                
                       
                       }, 
            mail:{
                   email:"Please enter a valid email",
                   required:"Please enter email address",
                   },
            fax:{
                    number:"Please enter a valid fax ",  
                    },           
                       
                       
            },
                        submitHandler: function(form) {
      form.submit();
    }
       
   }); 

    
    
    
    
    
});