function validateEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
function checkform()
{


  var user =document.getElementsByName('username').value;
  var password = document.getElementsByName("password").value;
  var It1= document.getElementsByName("q1").value;
  var It2 = document.getElementsByName("q2").value;
  var It3 = document.getElementsByName("q3").value;
  var shipping = document.getElementsByName("sh").value;
  alert

if (validateEmail(user)) {
  alert("invalid email");
  return false;
}

if (It1= ''||It2==''||It3=='') {
  alert ("invalid number items");
  return false;
}



}

//code from:
// http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
