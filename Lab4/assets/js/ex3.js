function calculateOrder() {
    var startersSelect = document.getElementById('starters');
    var startersQuantity = document.getElementById('startersQuantity').value;
    var majorFoodsSelect = document.getElementById('majorFoods');
    var majorFoodsQuantity = document.getElementById('majorFoodsQuantity').value;
    var dessertsSelect = document.getElementById('desserts');
    var dessertsQuantity = document.getElementById('dessertsQuantity').value;

    var orderSummary = "Order Summary:\n";

    orderSummary += "- Starters:\n";
    for (var i = 0; i < startersSelect.selectedOptions.length; i++) {
        var selectedItem = startersSelect.selectedOptions[i].value;
        orderSummary += "  " + selectedItem + " (Quantity: " + startersQuantity + ")\n";
    }

    orderSummary += "- Major Foods:\n";
    for (var i = 0; i < majorFoodsSelect.selectedOptions.length; i++) {
        var selectedItem = majorFoodsSelect.selectedOptions[i].value;
        orderSummary += "  " + selectedItem + " (Quantity: " + majorFoodsQuantity + ")\n";
    }

    orderSummary += "- Desserts:\n";
    for (var i = 0; i < dessertsSelect.selectedOptions.length; i++) {
        var selectedItem = dessertsSelect.selectedOptions[i].value;
        orderSummary += "  " + selectedItem + " (Quantity: " + dessertsQuantity + ")\n";
    }

    var totalItems = startersSelect.selectedOptions.length + majorFoodsSelect.selectedOptions.length + dessertsSelect.selectedOptions.length;
    var totalPrice = (parseInt(startersQuantity) + parseInt(majorFoodsQuantity) + parseInt(dessertsQuantity)) * 20;

    orderSummary += "\nTotal Items: " + totalItems + "\n";
    orderSummary += "Total Price: Rs." + totalPrice.toFixed(2);

    document.getElementById('orderSummary').value = orderSummary;
}
