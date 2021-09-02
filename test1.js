// jQuery.validator.addMethod("customEmail", function(value, element) { 
//   return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
// }, "Please enter valid email address!");
var $empf = $('#emp');
if($empf.length){
  $empf.validate({
      rules:{
          name: {
              required: true,    
          },
          username: {
              required: true,
             // customEmail: true
          },
          password: {
              required: true,
          },
      },
      messages:{
          name: {
              required: 'Please enter Firstname!'
          },

          username: {
              required: 'Please enter last name!'
          },
         
          password: {
              required: 'Please enter password!',
          },
          
          },
      // errorPlacement: function(error, element) 
      // {
      //   if (element.is(":radio")) 
      //   {
      //       error.appendTo(element.parents('.gender'));
      //   }
      //   else 
      //   { 
      //       error.insertAfter( element );
      //   }
        
      //  }
  });
}



<script>
    function validateform() 
    {
      let name=document.forms["myform"]["name"].value;
      if (name=="") 
      {
        alert("Name must be filled out");
        return false;
      }
      let username=document.forms["myform"]["username"].value;
      if(uaername=="")
      {
        alert("email must be filled out");
        return false;
      }
      let password=document.forms["myform"]["password"].value;
      if(password=="")
      {
        alert("password must be filled out");
        return false;
      }
     }
           
  </script>



















