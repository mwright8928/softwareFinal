var elUser = document.getElementById('newUser');
var elPass = document.getElementById('newPass');
var elUserMsg = document.getElementById('uFeedback');
var elPassMsg = document.getElementById('pFeedback');

function userLen(minLen) {
  // Check username field
  if(elUser.value.length < minLen && elUser.value.length > 0) {
    elUserMsg.innerHTML = 'Username must be at least ' + minLen.toString() + ' characters in length!';
    document.getElementById("submitBtn").disabled = true;
  } else if (elUser.value.length > minLen){
    elUserMsg.innerHTML = 'Username length OK.';
    if (elUser.value.length > minLen && elPass.value.length > minLen) {
      document.getElementById("submitBtn").disabled = false;
    }    
  } else {
    elUsernMsg.innerHTML = ' ';
  }
}

function passLen(minLen) {
  // Check password field
  if(elPass.value.length < minLen && elPass.value.length > 0) {
    elPassMsg.innerHTML = 'Password must be at least ' + minLen.toString() + ' characters in length!';
    document.getElementById("submitBtn").disabled = true;
  } else if (elPass.value.length > minLen){
    elPassMsg.innerHTML = 'Password length OK.';
    if (elUser.value.length > minLen && elPass.value.length > minLen) {
      document.getElementById("submitBtn").disabled = false;
    }
  } else {
    elPassMsg.innerHTML = ' ';
  }
}


elUser.addEventListener('blur', function() {userLen(7)}, false);
elPass.addEventListener('blur', function(){passLen(7)}, false);
