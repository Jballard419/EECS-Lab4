function validEmail(text)
{
  if(text.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    return true;
  }
  else
  {
    return false;
  }
}
function checkform()
{


  var user =document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var It1= document.getElementById('q1').value;
  var It2 = document.getElementById('q2').value;
  var It3 = document.getElementById('q3').value;
  var shipping = document.getElementById('Sh').value;


if (!validEmail(user)) {
  alert("invalid email");
  return false;
}else if (It1== ''||It2==''||It3=='') {
  alert ("invalid number of items");
  return false;
}else if (password=='') {
  alert("invalid password");
  return false;
}
  document.getElementById("shoppingform").submit();
  return true;


}

//code from:
// http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
