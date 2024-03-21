$(document).ready(function() {
  $('#country').change(function() {
    var selectedCountry = $(this).val();
    
    if (selectedCountry === 'Pakistan') {
      $('#cityDropdown').show();
      $('#cityInput').hide();
      $('#city').html('<option value="Karachi">Karachi</option><option value="Lahore">Lahore</option><option value="Islamabad">Islamabad</option>');
    }
    else if (selectedCountry === 'USA') {
      $('#cityDropdown').show();
      $('#cityInput').hide();
      $('#city').html('<option value="NewYork">New York</option><option value="Washington">Washington</option><option value="Miami">Miami</option>');
    } 
    else if (selectedCountry === 'Other') {
      $('#cityInput').show();
      $('#cityDropdown').hide();
    } else {
      $('#cityDropdown').hide();
      $('#cityInput').hide();
    }
  });
});