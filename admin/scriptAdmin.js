document.addEventListener("DOMContentLoaded", function () {
  const quantityInputs = document.querySelectorAll(
    "input[name='quantity-items[]']"
  );

  var totalHargaInput = document.querySelector("input[name='totalHargaEdit']");

  var subtotals = [];

  quantityInputs.forEach(function (input) {
    input.addEventListener("change", function () {
      var listItem = input.closest("li");
      var itemIndex = listItem.getAttribute("data-itemindex");

      var subtotalInput = listItem.querySelector(
        "input[name='subtotal-items[]']"
      );
      var quantityValue = parseInt(input.value, 10);

      var menuPrice = listItem.querySelector("input[name='priceMenu[]']").value;
      var newSubtotal = calculateSubtotal(quantityValue, menuPrice);
      subtotalInput.value = newSubtotal.toFixed(2);

      subtotals[itemIndex] = newSubtotal;

      const totalCharge = subtotals.reduce(
        (sum, subtotal) => sum + subtotal,
        0
      );
      totalHargaInput.value = totalCharge.toFixed(2);
    });
  });

  function calculateSubtotal(quantity, menuPrice) {
    // var menuPrice = 10;
    return quantity * menuPrice;
  }
});