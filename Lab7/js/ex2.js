function validateForm() {
  let cardNumber = document.getElementById("cardNumber").value;
  let expiryMonth = document.getElementById("expiryMonth").value;
  let expiryYear = document.getElementById("expiryYear").value;
  let cvv = document.getElementById("cvv").value;
  let nameOnCard = document.getElementById("nameOnCard").value;

  if (cardNumber.trim() == "") {
      alert("Please enter the card number.");
      return false;
  }

  if (expiryMonth.trim() == "" || isNaN(expiryMonth) || expiryMonth < 1 || expiryMonth > 12) {
      alert("Please enter a valid expiry month.");
      return false;
  }

  if (expiryYear.trim() == "" || isNaN(expiryYear) || expiryYear.length !== 2) {
      alert("Please enter a valid expiry year.");
      return false;
  }

  if (cvv.trim() == "" || isNaN(cvv) || cvv.length !== 3) {
      alert("Please enter a valid CVV.");
      return false;
  }

  if (nameOnCard.trim() == "") {
      alert("Please enter the name on the card.");
      return false;
  }

      alert("Validation Successful");
      return true;
  
}