var shoppingCart = [];

// Function to add item to the cart
function addToCart(event) {
  var target = event.target;

  // Check if the clicked element is a button inside a product
  console.log(target.parentElement.classList.contains("menu"));
  if (
    target.tagName === "BUTTON" &&
    target.parentElement.classList.contains("menu")
  ) {
    var productElement = target.parentElement;
    var productId = productElement.getAttribute("data-id");
    var productName = productElement.getAttribute("data-name");
    var productPrice = productElement.getAttribute("data-price");

    // Check if the product is already in the cart
    var existingProduct = shoppingCart.find(function (product) {
      return product.id === productId;
    });

    if (existingProduct) {
      // If the product is already in the cart, increase its quantity
      existingProduct.quantity += 1;
    } else {
      // Otherwise, add the product to the cart with quantity 1
      var product = {
        id: productId,
        name: productName,
        price: parseFloat(productPrice),
        quantity: 1,
      };

      shoppingCart.push(product);
    }

    // Update the cart display
    updateCartDisplay();
  }
}

// Function to update the cart display
function updateCartDisplay() {
  var cartItemsElement = document.getElementById("cart-items");
  var cartFooterElement = document.getElementById("cart-footer");

  cartItemsElement.innerHTML = ""; // Clear the existing items
  cartFooterElement.innerHTML = "";

  var total = 0;

  // Display each item in the cart
  shoppingCart.forEach(function (product) {
    var listItem = document.createElement("tr");
    var subtotal = product.price * product.quantity;
    total += subtotal;

    listItem.innerHTML = `
        <td>
          ${product.name}
          <input type="hidden" name="productName_${product.id}" value="${
      product.name
    }">
        </td>
        <td>
          Rp ${product.price.toFixed(3)}
          <input type="hidden" name="productPrice_${
            product.id
          }" value="${product.price.toFixed(3)}">
        </td>
        <td>
          (Quantity: ${product.quantity})
          <input type="hidden" name="productQuantity_${product.id}" value="${
      product.quantity
    }">
        </td>
        <td>
          Subtotal: Rp ${subtotal.toFixed(3)}
          <input type="hidden" name="subTotal_${
            product.id
          }" value="${subtotal.toFixed(3)}">
          </td>
          <td>
          <button class="btn btn-info" onclick="increaseQuantity('${
            product.id
          }')">+</button>
          <button class="btn btn-info" onclick="decreaseQuantity('${
            product.id
          }')">-</button>
          <button class="btn btn-danger" onclick="removeItem('${
            product.id
          }')">Remove</button>
          </td>
          `;
    cartItemsElement.appendChild(listItem);
  });

  var totalElement = document.createElement("div");
  totalElement.innerHTML = `
  <p>Total: Rp ${total.toFixed(3)}</p>
  <input type="hidden" name="total" value="${total.toFixed(3)}">
    <button type="button" class="btn btn-info" id="buttonCartConfirmation" data-toggle="modal" data-target="#cartSure">Checkout</button>
    `;
  cartFooterElement.appendChild(totalElement);
}

// Function to increase quantity
function increaseQuantity(productId) {
  var product = shoppingCart.find(function (p) {
    return p.id === productId;
  });

  if (product) {
    product.quantity += 1;
    updateCartDisplay();
  }
}

// Function to decrease quantity
function decreaseQuantity(productId) {
  var product = shoppingCart.find(function (p) {
    return p.id === productId;
  });

  if (product && product.quantity > 1) {
    product.quantity -= 1;
    updateCartDisplay();
  } else {
    console.log('You had minimun quantity')
  }
}

// Function to remove item
function removeItem(productId) {
  shoppingCart = shoppingCart.filter(function (product) {
    return product.id !== productId;
  });

  updateCartDisplay();
}

// function untuk memanggil data
function fetchDataAlamat(callback) {
  //Menggambil data kecamatan dan kelurahan 
  fetch('data/dataAlamat.json')
    .then(response => response.json())
    .then(data => {
      callback(data);
    })
    .catch(error => {
      console.error('Error: ', error);
    });
}

function populateKecamatan() {
  var kota = document.getElementById("kota").value;
  var kecamatanSelect = document.getElementById("kecamatan");

  // Hapus opsi kecamatan sebelumnya
  kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';

  // panggil data pada function FetchDataAlamat
  fetchDataAlamat(function(dataAlamat) {
      // Tambahkan opsi kecamatan berdasarkan kota yang dipilih
      if (kota === "Depok") {
          dataAlamat['Depok'].forEach(function(kecamatanData) {
              var option = document.createElement("option");
              option.text = kecamatanData.kecamatan;
              option.value = kecamatanData.kecamatan;
              kecamatanSelect.add(option);
          });
      } else if (kota === "Surabaya") {
          // Jika kota adalah Surabaya, tambahkan kecamatan Surabaya
          var kecamatans = ["Tegalsari", "Genteng", "Wonokromo"];
          kecamatans.forEach(function(kecamatan) {
              var option = document.createElement("option");
              option.text = kecamatan;
              option.value = kecamatan;
              kecamatanSelect.add(option);
          });
      }

      // Aktifkan list box kecamatan
      kecamatanSelect.disabled = false;
  });
}

function populateKelurahan() {
  var kota = document.getElementById("kota").value;
  var kecamatan = document.getElementById("kecamatan").value;
  var kelurahanSelect = document.getElementById("kelurahan");

  // Hapus opsi kelurahan sebelumnya
  kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

  // panggil data pada function FetchDataAlamat
  fetchDataAlamat(function(dataAlamat) {
      // Temukan data kecamatan yang sesuai
      var kecamatanData = dataAlamat[kota].find(function(data) {
          return data.kecamatan === kecamatan;
      });

      // Tambahkan opsi kelurahan berdasarkan data kecamatan yang dipilih
      if (kecamatanData) {
          kecamatanData.kelurahan.forEach(function(kelurahan) {
              var option = document.createElement("option");
              option.text = kelurahan;
              option.value = kelurahan;
              kelurahanSelect.add(option);
          });
      }

      // Aktifkan list box kelurahan
      kelurahanSelect.disabled = false;
  });
}


function enableRT() {
  var rt_Input = document.getElementById("rt");
  var rw_Input = document.getElementById("rw");
  rt_Input.disabled = false;
  rw_Input.disabled = false;
}
