var elUsername = document.getElementById('user');
var elPassword = document.getElementById('pass');
var elUsernameMsg = document.getElementById('userfeedback');
var elPasswordMsg = document.getElementById('passwordfeedback');
var elTextareaMsg = document.getElementById('commentfeedback');

function checkUsername(minlength) {
  if(elUsername.value.length < minlength && elUsername.value.length > 0) {
    elUsernameMsg.innerHTML = minlength.toString() + ' character minumum';
  } else if (elUsername.value.length > minlength){
    elUsernameMsg.innerHTML = 'Username: OK';
  } else {
    elUsernameMsg.innerHTML = '';

  }
}
function checkPassword(e, minlength) {
  var i = 0;
  var character = '';
  var upperCase = false;
  var number = false;

  if(elPassword.value.length < minlength && elPassword.value.length > 0) {
    elPasswordMsg.innerHTML = minlength.toString() + ' character minimum';
  } else if (elPassword.value.length > minlength) {
    for(i = 0; i < elPassword.value.length; i++) {
      character = elPassword.value.charAt(i);
      if (character == character.toUpperCase() && isNaN(character *1)) {
        upperCase = true;
      }
      if (!isNaN(character * 1)) {
        number = true;
      }
    }
    if (upperCase == false || number == false) {
      elPasswordMsg.innerHTML = 'Password must have at least 1 UPPER case character and one number';
    } else {
      elPasswordMsg.innerHTML = 'Password: OK';
    }

  } else {
    elPasswordMsg.innerHTML = '';
  }
}

elUsername.addEventListener('blur', function() {checkUsername(7)}, false);
elPassword.addEventListener('blur', function(e){checkPassword(e, 7)}, false);
