var quantityChanges = {};
// mengubah kuantitas ketika diklik
function changeQuantity(modalCounter, action) {
  var quantityElement = document.querySelector(".quantity-order");
  var quantityElementPost = document.querySelector(`.quantity-order-hidden`);

  var currentQuantity = parseInt(quantityElement.innerText);

  if (quantityElement) {
    if (action == "increase") {
      currentQuantity++;
    } else if (action == "decrease" && currentQuantity > 1) {
      currentQuantity--;
    }

    console.log(quantityElementPost.value);
    // update ui
    quantityElement.innerText = currentQuantity;
    quantityElementPost.value = currentQuantity;
    // if (!quantityChanges[modalCounter]) {
    //   quantityChanges[modalCounter] = {};
    // }
    // quantityChanges[modalCounter][itemId] = currentQuantity;
    // updateTotalPrice(modalCounter); // Perbaikan di sini, kirim modalCounter saja
  }
}
// remove item
function removeItem(counter, id) {
  var itemElement = document.querySelector(`[data-itemindex="${counter}"]`);
  var itemElementRemove = document.querySelector(`.itemRemove`);

  if (itemElement) {
    itemElement.remove();
    itemElementRemove.value = counter;
    console.log(itemElementRemove);
  }
}
// update total Price
function updateTotalPrice(orderId) {
  var totalPrice = 0;

  var price = parseFloat(itemElement.getAttribute("data-price"));
  var quantity = quantityChanges[modalCounter][itemId];

  totalPrice += price * quantity;

  // tampilakan total harga
  document.getElementById("total-price").innerText =
    "Rp" + totalPrice.toFixed(2);
  console.log(price);
}
// update status Pemesanan
function updateStatusPemesanan(modalCounter) {
  var selectElementStatusPemesanan = document.querySelector(
    `[data-modalCounter="${modalCounter}"] #selectStatusPemesanan${modalCounter}`
  );
  var badgeElementStatusPemesanan = document.querySelector(
    `[data-modalCounter="${modalCounter}"] #badgeStatusPemesanan${modalCounter}`
  );

  if (selectElementStatusPemesanan && badgeElementStatusPemesanan) {
    var newStatus = selectElementStatusPemesanan.value;
    badgeElementStatusPemesanan.innerText = newStatus;
  }
}

// // handle Update Orders
function handleUpdate(modalCounter) {
  // Data customer
  var namaCustomer = document.querySelector(
    `[data-modalCounter="${modalCounter}"] [name=name]`
  ).value;
  var numberCustomer = document.querySelector(
    `[data-modalCounter="${modalCounter}"] [name=phoneNumber]`
  ).value;
  var emailCustomer = document.querySelector(
    `[data-modalCounter="${modalCounter}"] [name=email]`
  ).value;
  var alamatCustomer = document.querySelector(
    `[data-modalCounter="${modalCounter}"] [name=address]`
  ).value;

  var statusPemesanan = document.querySelector(
    `[data-modalCounter="${modalCounter}"] #badgeStatusPemesanan${modalCounter}`
  ).innerText;

  var orderItems = document.querySelectorAll("li.list-order");

  orderItems.forEach(function (listItem) {
    listItem.getAttribute("data-price");
    listItem.querySelector("quantity-order");
    console.log(listItem.querySelector(".quantity-order").innerHTML);
    console.log(listItem.querySelector(".itemsMenu-orders").innerHTML);
    console.log(listItem.querySelector(".subTotalOrders").innerHTML);
  });
  var paymentMethodSelect = document.querySelector(
    `#selectPaymentMethod${modalCounter}`
  ).value;
  var statusPaymentSelect = document.querySelector(
    `#selectStatusPayment${modalCounter}`
  ).value;

  var quantityChangesData = {};
  if (quantityChanges[modalCounter]) {
    quantityChangesData = quantityChanges[modalCounter];
  }

  $.ajax({
    type: "POST",
    url: "request/updateOrder.php",
    data: {
      namaCustomer: namaCustomer,
      numberCustomer: numberCustomer,
      emailCustomer: emailCustomer,
      alamatCustomer: alamatCustomer,
      modalCounter: modalCounter,
      statusPemesanan: statusPemesanan,
      paymentMethodSelect: paymentMethodSelect,
      statusPaymentSelect: statusPaymentSelect,

      // Tambahkan data lain yang diperlukan untuk pembaruan
    },
    success: function (response) {
      // Tanggapi berhasil dari server
      console.log("Update berhasil:", response);

      // Setelah pembaruan berhasil, bisa memperbarui tampilan atau melakukan tindakan lain
      // ...

      // Tutup modal setelah pembaruan
      $(`#modalEditDetail${modalCounter}`).modal("hide");
    },
    error: function (error) {
      // Tanggapi kesalahan dari server
      console.error("Error saat update:", error);
    },
  });
}

// validasi updateForm
function validateAndUpdateForm() {
  var paymentMethodSelect = document.getElementById("selectPaymentMethod");
  var statusPaymentSelect = document.getElementById("selectStatusPayment");

  if (
    paymentMethodSelect.value == "notvalue" &&
    statusPaymentSelect.value == "notvalue"
  ) {
    alert("Harap pilih payment Method dan payment Status yang valid.");
    return false;
  }
  return true;
}

function confirmUpdateForm() {
  var confirmation = confirm("Apakah anda yakin untuk mengupdate?");

  if (confirmation) {
    return validateAndUpdateForm();
  } else {
    return false;
  }
}
