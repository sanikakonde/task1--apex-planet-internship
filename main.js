function scrollToSection(id){
  document.getElementById(id).scrollIntoView({behavior:'smooth'});
}

function validateForm(){
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const msg = document.getElementById('formMsg');

  if(!email.includes('@')){
    msg.innerText = "Invalid email format!";
    msg.style.color = "red";
    return false;
  }
  if(password.length < 6){
    msg.innerText = "Password must be at least 6 characters!";
    msg.style.color = "red";
    return false;
  }
  return true;
}
