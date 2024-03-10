function validateForm() {
  let lastName = document.getElementById("lastName").value;
  let firstName = document.getElementById("firstName").value;
  let middleInitial = document.getElementById("middleInitial").value;
  let age = parseInt(document.getElementById("age").value);
  let weight = parseInt(document.getElementById("weight").value);

  let nameRegex = /^[A-Za-z\s]+$/;

  if (lastName === "" || firstName === "" || middleInitial === ""  || isNaN(age) || isNaN(weight) || age <= 17 || weight < 80 || weight > 300) {
    alert("Please fill out all fields correctly. Age must be greater than 17 and weight must be between 80 and 300.");
    return false;
  }

  else if( !nameRegex.test(lastName) || !nameRegex.test(firstName) || !nameRegex.test(middleInitial)){
    alert("Name should only contain text");
    return false;
  }
  return true;
}



function validateShipmentForm() {
  var name = document.getElementById("name").value;
  var address = document.getElementById("address").value;
  var city = document.getElementById("city").value;
  var zipcode = document.getElementById("zipcode").value;


  var nameRegex = /^[A-Za-z\s]+$/;

  if (name === "" || address === "" || city === "" || zipcode === "" ) {
    alert("Please fill out all compulsory fields marked with * with valid text input.");
    return false;
  }
  else if (!nameRegex.test(name) || !nameRegex.test(city) ) {
    alert("Name and city should only contain text");
    return false;
  }

  return true;
}


  function validateRegistrationForm() {
    let regNumber = document.getElementById("regNumber").value;
    let currentSemester = document.getElementById("currentSemester").value;
    let enrollmentNumber = document.getElementById("enrollmentNumber").value;
    let courseCode = document.getElementById("courseCode").value;
  
    let regNumRegex = /^[0-9]{5}$/;
    let semesterRegex = /^[A-Za-z]+\s[0-9]{4}$/;
    let enrollNumRegex = /^[0-9]{2}-[0-9]{6}-[0-9]{3}$/;
    let courseCodeRegex = /^[A-Za-z]{3}-[0-9]{3}$/;
  
    if (!regNumRegex.test(regNumber) || !semesterRegex.test(currentSemester) || !enrollNumRegex.test(enrollmentNumber) || !courseCodeRegex.test(courseCode)) {
      alert("Please enter valid information for all fields.");
      return false;
    }
    return true;
  }