// document.addEventListener("DOMContentLoaded", function () {
//   const quantityInputs = document.querySelectorAll(
//     "input[name='quantity-items[]']"
//   );

//   var totalHargaInput = document.querySelector("input[name='totalHargaEdit']");

//   var subtotals = [];

//   quantityInputs.forEach(function (input) {
//     input.addEventListener("change", function () {
//       var listItem = input.closest("li");
//       var itemIndex = listItem.getAttribute("data-itemindex");

//       var subtotalInput = listItem.querySelector(
//         "input[name='subtotal-items[]']"
//       );
//       var quantityValue = parseInt(input.value, 10);

//       var menuPrice = listItem.querySelector("input[name='priceMenu[]']").value;
//       var newSubtotal = calculateSubtotal(quantityValue, menuPrice);
//       subtotalInput.value = newSubtotal.toFixed(3);

//       subtotals[itemIndex] = newSubtotal;

//       const totalCharge = subtotals.reduce(
//         (sum, subtotal) => sum + subtotal,
//         0
//       );
//       totalHargaInput.value = totalCharge.toFixed(3);
//     });
//   });

//   function calculateSubtotal(quantity, menuPrice) {
//     // var menuPrice = 10;
//     return quantity * menuPrice;
//   }
// });

document.addEventListener("DOMContentLoaded", function () {
  var totalHargaInput = document.querySelector("input[name='totalHargaEdit']");
  var subtotals = [parseFloat(totalHargaInput.value)];
  var initialSubtotals = [];

  var quantityInputs = document.querySelectorAll("input[name='quantity-items[]']");

  quantityInputs.forEach(function (input) {
    input.addEventListener("input", function () {
      var listItem = input.closest("li");
      var itemIndex = listItem.getAttribute("data-itemindex");

      var subtotalInput = listItem.querySelector("input[name='subtotal-items[]']");
      var quantityValue = parseInt(input.value, 10);

      var menuPrice = parseFloat(listItem.querySelector("input[name='priceMenu[]']").value);
      var newSubtotal = calculateSubtotal(quantityValue, menuPrice);
      subtotalInput.value = newSubtotal.toFixed(3);

      subtotals[itemIndex] = newSubtotal;

      console.log(subtotals);

      var totalCharge = subtotals.reduce(
        function (sum, subtotal) {
          return sum + subtotal;
        },
        0
      );
      totalHargaInput.value = totalCharge.toFixed(3);
    });

    // Store the initial subtotals in the array
    var listItem = input.closest("li");
    var itemIndex = listItem.getAttribute("data-itemindex");
    initialSubtotals[itemIndex] = parseFloat(listItem.querySelector("input[name='subtotal-items[]']").value);
  });

  totalHargaInput.addEventListener("input", function () {
    subtotals = initialSubtotals.slice(); // Restore the initial subtotals when the total changes
  });

  function calculateSubtotal(quantity, menuPrice) {
    return quantity * menuPrice;
  }
});