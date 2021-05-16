const btn = document.getElementById('btn');


btn.addEventListener('click', function(){
    var login = document.getElementById('log').value;
        email = document.getElementById('email').value,
        password = document.getElementById('pass').value;
        password2 = document.getElementById('pass2').value;
     
        if (validateEmail(email)) {
            if (password == password2){
                $( function() {
                  $( "#dialog_s" ).dialog();
                } );
            }
           else{ alert("Passwords not the same")
           $("#dialog_f").dialog();
          }
        } else {
          alert(email + " is not valid email");
          $("#dialog_f").dialog();
        }
        return false;
        
    
})

function validateEmail(email) {
    var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return re.test(String(email).toLowerCase());
  }
