$(document).ready(function(){
    $("#myForm").validate({ 
     rules:{
          txtbatchNumber:"required",
          txtMedicineName:{
              required:true,
              number:false,
          },
          
          txtQuantity:{
                required:true,
                number:true,
               
          },
        
          txtdosage:{
                required:true,
                number:true,
                
                },
         price:{
                required:true,
                number:true    
                },
         entry_date:{
                required:true,
                date:true          
               },
         EXP_date:{
                required:true,
                date:true,   
                },
            
      },
            
    messages:{
             txtbatchNumber:"Please enter batch number",
             txtMedicineName:{
                 required:"Please enter medicine name",
                 number:"Enterd name might be wrong",
             },
                       
            txtQuantity:{
                required:"Enter quantity",
                number:"Entered number is wrong",
               
                   },
            txtdosage:{
                required:"Enterdosge",
                number:"Entered number is wrong",
                }, 
            price:{
                  required:"Please enter price",
                  number:"price is wrong",
                   },
           entry_date:{
                    required:"enter a date"
                   
                    },
            EXP_date:{
                    required:"enter a date"
                     
                    },
                       
                       
            },
                        submitHandler: function(form) {
      form.submit();
    }
       
   }); 

    
    
    
    
    
});