<!DOCTYPE html>
<html lang="id">
<head>
  <meta content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <title>Keranjang</title>

  <style>
  /* Your existing styles remain the same */
  :root {
      --bg-color: #ffffff; /* Light mode background color */
      --text-color: #000000; /* Light mode text color */
      --filter: none; /* Light mode filter */
  }

  [data-theme="dark"] {
      --bg-color: #121212; /* Dark mode background color */
      --text-color: #ffffff; /* Dark mode text color */
      --filter: invert(100%); /* Dark mode filter */
  }

  body {
    margin: 0;
    min-width: 100%;
    min-height: 100%;
    background-color: white;
  }

  #container {
    max-width: 600px;
    min-height: 100vh;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: var(--bg-color);
    margin: 0 auto;
  }

  .headingOne {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    font-size: 22px;
    font-weight: bolder;
    color: var(--text-color);
  }

  .navbar {
    position: fixed;
    z-index: 99;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    height: 100px;
  }

  .navbarInside {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: var(--bg-color);
    padding: 10px 20px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.1);
    border-bottom: 0.5px solid #ddd;
    color: var(--text-color);
  }

  .menuButton, .logo, .cartIcon {
    display: flex;
    align-items: center;
  }

  .menuButton img, .cartIcon img {
    width: 20px;
    height: 20px;
    cursor: pointer;
    filter: var(--filter);
  }

  .mainLogo {
    width: 30px;
    height: 30px;
    margin-left: -10px;
    cursor: pointer;
  }

  #menuContent {
    display: none;
    position: fixed;
    max-width: 600px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--bg-color);
    color: var(--text-color);
    z-index: 999;
    min-height: 100vh;
    height: 100vh;
    margin: 0 auto;
  }

  .closeButton {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    width: 30px;
    height: 30px;
    filter: var(--filter);
  }

  .bridge {
    height: 60px;
  }

  .bridgeProduct {
    height: 30px;
  }

  .topContentProduct img {
    width: 100%;
    height: auto;
  }

  .scrollContainer {
    position: relative;
  }

  .scroll {
    display: flex;
    overflow-x: auto;
    gap: 12px;
    height: auto;
    scroll-behavior: smooth;
    -ms-overflow-style: none;
    scrollbar-width: none;
  }

  .scroll::-webkit-scrollbar {
    display: none;
  }

  .scroll img {
    width: 250px;
    height: auto;
    border-radius: 10px;
  }

  .arrowContainer {
    display: flex;
    justify-content: right;
    margin-top: 10px;
    filter: var(--filter);
    user-select: none;
  }

  .arrow {
    cursor: pointer;
  }

  .mainContent {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding: 20px;
  }

  .product {
    width: calc(50% - 6px);
    display: grid;
    grid-template-rows: auto auto 1fr;
    gap: 8px;
  }

  .productImage img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .productTitle {
    font-size: 20px;
    margin: 0;
    color: var(--text-color);
  }

  .productDescription {
    font-size: 14px;
    opacity: 0.7;
    margin: 0;
    color: var(--text-color);
  }

  .footer {
    display: grid;
  }

  .lines {
    width: 90%;
    display: grid;
    margin: 0 auto;
    border-bottom: solid 0.5px var(--text-color);
  }

  .footerTop {
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    display: flex;
  }

  .footerTopImage {
    width: 15%;
    display: grid;
    align-items: center;
  }

  .footerTopText {
    width: 85%;
    display: grid;
    align-items: center;
    font-size: 18px;
    color: var(--text-color);
  }

  .footerSocial {
    padding-top: 14px;
    padding-left: 20px;
    padding-right: 20px;
    display: flex;
    gap: 4px;
  }

  .logoImageSocial {
    width: 34px;
    height: auto;
    cursor: pointer;
    filter: var(--filter);
  }

  .footerEnd {
    padding-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 14px;
    font-size: 12px;
    color: var(--text-color);
  }

  .logoImage {
    width: 40px;
    height: auto;
  }

  .headingOne {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    font-size: 30px;
    font-weight: bolder;
    color: var(--text-color);
  }

  .mainText {
    font-size: 22px;
    color: var(--text-color);
  }

  .buyArea {
    position: fixed;
    width: 100%;
    max-width: 600px;
    height: 60px;
    margin: 0 auto;
    bottom: 0;
    background-color: var(--bg-color);
    color: var(--text-color);
    z-index: 99;
    display: flex;
    box-shadow: 0 -2px 2px rgba(0, 0, 0, 0.1);
    border-top: 0.8px solid #ddd;
  }

  .buyAreaPrice {
    width: 50%;
    display: flex;
    justify-content: left;
    align-items: center;
    padding-left: 20px;
    font-size: 22px;
  }

  .buyAreaAction {
    width: 50%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 20px;
  }

  .buyButton {
    width: 100px;
    padding: 8px 16px;
    font-size: 22px;
    cursor: pointer;
    border: none;
    background-color: #1967D2;
    color: white;
    border-radius: 5px;
    border: solid 0px white;
  }

  .buyButton:hover {
    background-color: #1967D2;
    color: white;
    border: solid 0px black;
  }

  .productPrice {
  font-size: 20px;
  font-weight: bold;
  margin-top: 10px;
  color: var(--text-color);
}

.addToCartContainer {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.addToCartButton {
  padding: 8px;
  font-size: 20px;
  cursor: pointer;
  border: none;
  background-color: tomato;
  color: white;
  border-radius: 24px;
  border: solid 0px white;
  align-items: center;
  text-align: center;
  user-select: none;
  letter-spacing: .25px;
}


/* Style for inactive button */
.inactiveButton {
  background-color: #ddd;  /* Light grey */
  color: #888;             /* Darker grey text */
  border: 1px solid #ccc;  /* Grey border */
  cursor: not-allowed;     /* Makes it unclickable */
}

.bookItem {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

.bookInfo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.bookItem img {
  width: 50px;
  height: auto;
  border-radius: 4px;
}

.judul {
  font-weight: bold;
  margin-bottom: 4px;
}

.priceText {
  color: black;
  font-weight: bold;
  margin-bottom: 4px;
  opacity: 0.7;
}

.removeButton {
  padding: 6px 10px;
  font-size: 16px;
  background-color: #c0392b;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.removeButton:hover {
  background-color: #a93226;
}

.emptyMessage {
  padding: 20px;
  text-align: center;
  color: #888;
}


  .insideMenu {
    padding: 40px;
  }

  .insideMenu a {
    text-decoration: none;
    color: inherit;
  }

  </style>

</head>
<body>

  <div id="container">
    <!-- Start of navigation bar -->
    <nav class="navbar">
      <div class="navbarInside">
        <div class="menuButton" onclick="toggleMenu()">
          <img src="https://img.icons8.com/ios/50/menu--v1.png" alt="Menu">
        </div>
        <div class="logo" style="font-size: 20px;">
          Logo
        </div>
        <div class="cartIcon">
          &nbsp;
        </div>
      </div>
    </nav>
    <!-- End of navigation bar -->

    <!-- Start of inside navigation -->
    <div id="menuContent">
      <img src="https://img.icons8.com/ios/50/delete-sign--v1.png" class="closeButton" onclick="toggleMenu()" alt="Close">
      <div class="insideMenu">
          Lorem ipsum
      </div>
    </div>

  <!-- End of inside navigation -->


  <!-- Start of main content -->
  <div class="bridge"></div>
  <div class="mainContent">
    <div id="cartContent" style="width: 100%;"></div>
    <div id="totalHarga" style="width: 100%; margin-top: 10px;"></div>
    <div id="checkoutArea"></div>

    <!-- Inside the mainContent div, after the cart script -->

<div id="checkoutSection" style="margin-top: 20px; width: 100%;">
  <button id="checkoutButton" class="addToCartButton" style="width: 100%; margin-bottom: 20px;">Beli</button>

  <div id="checkoutForm" style="display: none; width: 100%;">
      <h2>Data Pengiriman</h2>
      <form id="shippingForm">
        <div style="margin-bottom: 15px;">
          <label for="nama" style="display: block; margin-bottom: 5px; color: var(--text-color);">Nama</label>
          <input type="text" id="nama" name="nama" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
          <label for="whatsapp" style="display: block; margin-bottom: 5px; color: var(--text-color);">No. WhatsApp</label>
          <input type="tel" id="whatsapp" name="whatsapp" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
          <label for="alamat" style="display: block; margin-bottom: 5px; color: var(--text-color);">Alamat Pengiriman</label>
          <textarea id="alamat" name="alamat" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; min-height: 80px; box-sizing: border-box;"></textarea>
        </div>
        <div style="margin-bottom: 15px;">
          <label for="kodepos" style="display: block; margin-bottom: 5px; color: var(--text-color);">Kode Pos</label>
          <input type="text" id="kodepos" name="kodepos" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <button type="submit" id="payButton" class="addToCartButton" style="width: 100%;">Proses</button>
      </form>
    </div>

</div>



<script>

//Toggle navigation menu
function toggleMenu() {
  var menuContent = document.getElementById('menuContent');
  if (menuContent.style.display === 'block') {
    menuContent.style.display = 'none';
  } else {
    menuContent.style.display = 'block';
  }
}

// Improved cart loading function
function loadCart() {
  const cartContent = document.getElementById('cartContent');
  const totalHargaEl = document.getElementById('totalHarga');
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  cartContent.innerHTML = ''; // clear existing content
  totalHargaEl.innerHTML = ''; // clear total

  if (cart.length === 0) {
    cartContent.innerHTML = "<div class='emptyMessage'>Keranjang kosong.</div>";
    return;
  }

  // Store book data and prices
  const bookData = {};

  // Get cached data
  const cachedData = localStorage.getItem('apiCache');
  const cacheTimestamp = localStorage.getItem('apiCacheTimestamp');
  const now = new Date().getTime();

  // Cache expiration - i days
  const cacheExpiration = 86400000;
  const isCacheValid = cachedData && cacheTimestamp && (now - parseInt(cacheTimestamp) < cacheExpiration);

  // Flag to track if we've already processed data (prevents double processing)
  let dataProcessed = false;

  // Create a timeout for using cached data if API is slow
  const timeoutDuration = 3000; // 3 seconds
  let timeoutId = setTimeout(() => {
    if (isCacheValid && !dataProcessed) {
      console.log('API response taking too long, using cached data for cart');
      dataProcessed = true;
      processCartData(JSON.parse(cachedData));
    }
  }, timeoutDuration);

  // Always try to fetch fresh data
  fetch('api.txt')
  .then(response => response.text())
  .then(apiUrl => {
    return fetch(apiUrl.trim());
  })
    .then(response => {
      if (!response.ok) throw new Error('Network error');
      return response.json();
    })
    .then(apiData => {
      // Clear the timeout since we got a response
      clearTimeout(timeoutId);

      // Only process if we haven't already processed data from cache
      if (!dataProcessed) {
        dataProcessed = true;

        // Save the new data to cache
        localStorage.setItem('apiCache', JSON.stringify(apiData));
        localStorage.setItem('apiCacheTimestamp', now.toString());

        // Process the data
        processCartData(apiData);
      }
    })
    .catch(error => {
      // Clear the timeout
      clearTimeout(timeoutId);

      // If we have valid cache and encountered an error, use cache
      if (isCacheValid && !dataProcessed) {
        dataProcessed = true;
        console.log('Fetch error, using cached data for cart:', error);
        processCartData(JSON.parse(cachedData));
      } else if (!dataProcessed) {
        dataProcessed = true;
        // Handle error when there's no cache
        console.error('Error fetching prices:', error);
        totalHargaEl.innerHTML = `<div style="color:red;">Gagal mengambil harga dari server.</div>`;
      }
    });

  // Function to process cart data and display items
  function processCartData(apiData) {
    if (apiData.status === "success") {
      let total = 0;

      // Create a map of book titles to their data
      apiData.data.forEach(item => {
        bookData[item.judul.toLowerCase()] = item;
      });

      // Deduplicate cart items by merging quantities for the same item
      const uniqueCart = deduplicateCart(cart);

      // Now display each cart item with price
      uniqueCart.forEach((item, index) => {
        const productId = item.judul ? item.judul.toLowerCase().replace(/\s+/g, '-') : '';
        const matchedBook = bookData[item.judul.toLowerCase()];
        const price = matchedBook ? parseFloat(matchedBook.harga) : 0;
        const maxQuantity = matchedBook ? parseInt(matchedBook.kuantitas) || 1 : 1;

        // Initialize quantity if not present
        if (!item.quantity) {
          item.quantity = 1;
          // Update the cart item with default quantity
          uniqueCart[index].quantity = 1;
        }

        // Calculate price with quantity
        const itemTotal = price * item.quantity;
        if (matchedBook) {
          total += itemTotal;
        }

        const itemHTML = `
          <div class="bookItem" style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
            <div class="bookInfo" style="display:flex; align-items:center; gap:10px;">
              <a href="product.php?id=${productId}">
                <img src="https://madzae.com/workspace/drive/userimages/${item.image}" alt="${item.judul}" style="width:50px; height:auto;">
              </a>
              <div>
                <div class="judul" style="font-weight:bold;">${item.judul}</div>
                <div class="priceText">Rp ${formatRupiah(price)}</div>
                <div style="display:flex; align-items:center; margin-top:5px;">
                  <button class="quantityBtn minus" data-index="${index}" style="width:25px; height:25px; background:#eee; border:1px solid #ddd; border-radius:3px;">-</button>
                  <span style="margin:0 10px; min-width:20px; text-align:center;">${item.quantity}</span>
                  <button class="quantityBtn plus" data-index="${index}" data-max="${maxQuantity}" style="width:25px; height:25px; background:#eee; border:1px solid #ddd; border-radius:3px;">+</button>
                  <span style="margin-left:10px; font-size:12px; color:#666;">(Max: ${maxQuantity})</span>
                </div>
              </div>
            </div>
            <button class="removeButton" data-index="${index}" style="background:#ff3b3b; color:white; border:none; padding:5px 10px; border-radius:5px; cursor:pointer;">Hapus</button>
          </div>
        `;
        cartContent.insertAdjacentHTML('beforeend', itemHTML);
      });

      // Save deduplicated cart with quantities
      localStorage.setItem('cart', JSON.stringify(uniqueCart));

      // Add event listeners to remove buttons
      const removeButtons = document.querySelectorAll('.removeButton');
      removeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          const indexToRemove = e.target.getAttribute('data-index');
          removeFromCart(indexToRemove);
        });
      });

      // Add event listeners to quantity buttons
      const quantityBtns = document.querySelectorAll('.quantityBtn');
      quantityBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
          const index = parseInt(e.target.getAttribute('data-index'));
          const isPlus = e.target.classList.contains('plus');
          updateQuantity(index, isPlus);
        });
      });

      // Display total
      totalHargaEl.innerHTML = `
        <div style="font-weight:bold; font-size: 20px; margin-top:4px; margin-bottom:4px; width:100%;">
            <center>Total harga produk: Rp ${formatRupiah(total)}</center>
        </div>
      `;

      // Store the total price in localStorage for later use
      localStorage.setItem('cartTotal', total);
    } else {
      totalHargaEl.innerHTML = `<div style="color:red;">Gagal mengambil harga.</div>`;
    }
  }
}

// Helper function to deduplicate items in the cart
function deduplicateCart(cart) {
  const uniqueItems = {};

  // Group items by their title
  cart.forEach(item => {
    const key = item.judul.toLowerCase();

    if (!uniqueItems[key]) {
      uniqueItems[key] = {...item};
    } else {
      // If item already exists, add quantities
      uniqueItems[key].quantity = (uniqueItems[key].quantity || 1) + (item.quantity || 1);
    }
  });

  // Convert back to array
  return Object.values(uniqueItems);
}

// Optional: Add a refresh function to force data reload
function refreshCartData() {
  localStorage.removeItem('apiCache');
  localStorage.removeItem('apiCacheTimestamp');
  loadCart();
}

function removeFromCart(index) {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1);
  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

function updateQuantity(index, increase) {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Initialize quantity if it doesn't exist
  if (!cart[index].quantity) {
    cart[index].quantity = 1;
  }

  if (increase) {
    // Check against max quantity from data attribute
    const maxQty = parseInt(document.querySelectorAll('.quantityBtn.plus')[index].getAttribute('data-max'));
    if (cart[index].quantity < maxQty) {
      cart[index].quantity += 1;
    }
  } else {
    // Prevent quantity from going below 1
    if (cart[index].quantity > 1) {
      cart[index].quantity -= 1;
    }
  }

  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart(); // Reload cart to update display and totals
}

function formatRupiah(angka) {
  return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Function to add items to cart without duplication
function addToCart(item) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Check if item already exists in cart
  const existingItemIndex = cart.findIndex(cartItem =>
    cartItem.judul.toLowerCase() === item.judul.toLowerCase()
  );

  if (existingItemIndex >= 0) {
    // Item exists, increase quantity
    if (!cart[existingItemIndex].quantity) {
      cart[existingItemIndex].quantity = 1;
    }
    cart[existingItemIndex].quantity += 1;
  } else {
    // New item, add with quantity of 1
    item.quantity = 1;
    cart.push(item);
  }

  localStorage.setItem('cart', JSON.stringify(cart));
}

// Load cart on page load
document.addEventListener('DOMContentLoaded', function() {
  // Clean up duplicates in existing cart first
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  if (cart.length > 0) {
    const deduplicatedCart = deduplicateCart(cart);
    localStorage.setItem('cart', JSON.stringify(deduplicatedCart));
  }

  loadCart();
});

  // Load user data from localStorage if available
  function loadUserData() {
    const userData = JSON.parse(localStorage.getItem('userData')) || {};

    if (userData.nama) document.getElementById('nama').value = userData.nama;
    if (userData.whatsapp) document.getElementById('whatsapp').value = userData.whatsapp;
    if (userData.alamat) document.getElementById('alamat').value = userData.alamat;
    if (userData.kodepos) document.getElementById('kodepos').value = userData.kodepos;
  }

  // Toggle checkout form visibility
  document.getElementById('checkoutButton').addEventListener('click', function() {
    const checkoutForm = document.getElementById('checkoutForm');
    checkoutForm.style.display = 'block';
    this.style.display = 'none';

    // Load user data when form is shown
    loadUserData();
  });

  // Handle form submission
  document.getElementById('shippingForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Get form data
    const formData = {
      nama: document.getElementById('nama').value,
      whatsapp: document.getElementById('whatsapp').value,
      alamat: document.getElementById('alamat').value,
      kodepos: document.getElementById('kodepos').value
    };

    // Save form data to localStorage
    localStorage.setItem('userData', JSON.stringify(formData));

    // Get cart items
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTotal = localStorage.getItem('cartTotal') || 0;

    // Create the order data
    const orderData = {
      userData: formData,
      items: cart,
      total: cartTotal,
      orderDate: new Date().toISOString()
    };

    // Store the order data in localStorage instead of the URL
    localStorage.setItem('orderData', JSON.stringify(orderData));

    // Redirect to order summary page without the query string
    window.location.href = 'order.php';
  });
</script>



  </div>
  <!-- End of main content -->


  <!-- Start of footer -->
  <div class="bridge"></div>
  <div class="footer">
    <div class="lines"></div>
    <div class="footerTop">
      <div class="footerTopImage">
        <!-- Logo -->
      </div>
    </div>
    <div class="bridge"></div>
  </div>
  <!-- End of Footer -->


</div>

</body>
</html>
