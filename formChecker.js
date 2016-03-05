function validateEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
function checkform()
{


  var user =document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var It1= document.getElementById('q1').value;
  var It2 = document.getElementById('q2').value;
  var It3 = document.getElementById('q3').value;
  var shipping = document.getElementById('Sh').value;


if (!validateEmail(user)) {
  alert("invalid email");
  return false;
}

if (It1== ''||It2==''||It3=='') {
  alert ("invalid number of items");
  return false;
}
if (password=='') {
  alert("invalid password");
}



}

//code from:
// http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
