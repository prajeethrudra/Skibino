 function validate()//for register
{      
  $(function () {
 $('#registration').on('submit', function (e) {
 var name= $('#name').val();
 var name= $('#email').val();
 var cpassword= $('#cpassword').val();
 var password= $('#password').val();
 var passlen=password.length;
 var cpasslen=cpassword.length;
 if( (passlen>8) && (cpasslen>8) )
 {
         if(cpassword==password)
         {
          
          var hasCaps = /[A-Z]/.test(password);
          var hasNums = /\d/.test(password);
          var hasSpecials = /[~!,@#%&_\$\^\*\?\-]/.test(password);

          var isValid = hasCaps && hasNums && hasSpecials;
          if(isValid)
          {
            
              submit();
          }
          else{
                  alert("Password must have all caps aleast a number and special symbol");
                //   $('#ccpwd').fadeIn().text("Password must have aleast a cap, number and special symbol");setTimeout(function() { $("#ccpwd").fadeOut() }, 2000);
              }

         }
         else { 
              $('#cpwd').fadeIn().text("Password dint match"); setTimeout(function() { $("#cpwd").fadeOut() }, 3000); 
              $('#ccpwd').fadeIn().text("Password dint match");setTimeout(function() { $("#ccpwd").fadeOut() }, 3000);
          }
  }else 
      {   

          $('#cpwd').fadeIn().text("Password length must be greater then 8");setTimeout(function() { $("#cpwd").fadeOut() }, 2000);
          $('#ccpwd').fadeIn().text("Password length must be greater then 8");setTimeout(function() { $("#ccpwd").fadeOut() }, 2000);
      }
   e.preventDefault();
});
});

 
}
function reloadfun()
{
location.reload(true);
}

function submit()//for register
{ 
  $(function () {
    $("#submit").attr("disabled",true);
 $('#registration').on('submit', function (e) {
   $.ajax({
   type: 'post',
   url: 'reg.php',
   data: $('#registration').serialize(),
  success: function (data) {
    if(data=='4')
    { 
      alert("Registration Done,proceed to log in");
      $("#submit").attr("disabled",false);
      reloadfun();
    }
    else if(data=='1')
    {
      $('#cemail').fadeIn().text("Email-id already exist"); setTimeout(function() { $("#cemail").fadeOut() }, 2000); 
    }
    $('#output').html(data);
     }
  
});
  e.preventDefault();
});
});
}

function checklog()//for log in
{
  $(function () {
       $('#signin').on('submit', function (e) {
       var id= $('#emailid').val();
       var password= $('#userpassword').val();
         check();                     
      
        e.preventDefault();//used to prevent from refreshing
    });
    });
}
function check()//for login
{
   $(function () {
     $('#signin').on('submit', function (e) {
       $.ajax({
       type: 'post',
       url: 'signin.php',
       data: $('#signin').serialize(),
      success: function (data) {
          if(data == '1')
          {
              window.location = 'profile.php';
          }
          else
          {
              $('#output2').html(data);
          }
         }
       });
         e.preventDefault();
    });
    });
}