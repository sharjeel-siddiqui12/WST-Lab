function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "") {
    alert("Please enter your username.");
    return false;
  }

  if (password === "") {
    alert("Please enter your password.");
    return false;
  }

  alert("Validation Successful.");
  return true;
}