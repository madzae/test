<!DOCTYPE html>
<html lang="id">
<head>
  <meta content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <title>Business - Rupabumi</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <style>
  :root {
    --bg-color: #ffffff;
    --text-color: #000000;
    --filter: none;
  }

  [data-theme="dark"] {
    --bg-color: #121212;
    --text-color: #ffffff;
    --filter: invert(100%);
  }

  body {
    margin: 0;
    min-width: 100%;
    min-height: 100vh;
    background-color: white;
  }

  #container {
    max-width: 600px;
    min-height: 100vh;
    margin: 0 auto;
    background-color: var(--bg-color);
    font-family: "Open Sans", sans-serif;
  }

  .headingOne {
    padding: 10px 20px;
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
    margin: 0 auto;
  }

  .insideMenu {
    padding: 40px;
  }

  .insideMenu a {
    text-decoration: none;
    color: inherit;
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

  .bridge { height: 60px; }

  .mainContent {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding: 20px;
    font-family: "Open Sans", sans-serif;
    font-weight: 200;
    font-style: normal;
    font-size: 18px;
  }

  .product {
    width: calc(50% - 6px);
    display: grid;
    grid-template-rows: auto auto 1fr;
    gap: 8px;
  }

  .product a { text-decoration: none; }

  .productImage {
    position: relative;
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

  .productPrice {
    font-size: 16px;
    margin: 6px 0 0;
    color: var(--text-color);
    font-weight: 600;
  }

  /* inside your existing <style> tag — replace .addToCartBtn with this: */

  .addToCartBtn {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 40px;
    height: 40px;
    background-color: tomato;
    color: white;
    font-size: 26px;
    line-height: 1; /* prevents vertical stretching */
    font-weight: bold; /* optional, makes + look better */
    font-family: Arial, sans-serif; /* cleaner '+' shape */
    border: none;
    border-radius: 50%;
    cursor: pointer;
    z-index: 2;
    transition: background-color 0.3s, opacity 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
  }

  .addToCartBtn:disabled {
    background-color: #555;
    cursor: not-allowed;
    opacity: 0.7;
    display: none;
  }

  .footer {
    display: grid;
  }

  .lines {
    width: 90%;
    margin: 0 auto;
    border-bottom: solid 0.5px var(--text-color);
  }

  .footerTop {
    padding: 20px;
    display: flex;
  }

  .footerTopImage {
    width: 15%;
  }

  .footerTopText {
    width: 85%;
    display: flex;
    align-items: center;
    font-size: 18px;
    color: var(--text-color);
  }

  .footerSocial {
    padding: 14px 20px 0;
    display: flex;
    gap: 4px;
    margin-top: -20px;
  }

  .logoImageSocial {
    width: 34px;
    height: auto;
    cursor: pointer;
    filter: var(--filter);
  }

  .footerEnd {
    padding: 30px 20px 14px;
    font-size: 12px;
    color: var(--text-color);
  }

  .logoImage {
    width: 40px;
    height: auto;
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
    width: 70%;
    display: flex;
    justify-content: left;
    align-items: center;
    padding-left: 20px;
    font-family: "Open Sans", sans-serif;
    font-size: 22px;
    font-size: 20px;
    font-weight: 400;
  }

  .buyAreaAction {
    width: 30%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 20px;
  }

  .buyButton {
    width: 100px;
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

  .nextButton {
    width: 100%;
    text-align: center;
    padding: 20px;
  }

  .nextButton button {
    background-color: tomato;
    color: white;
    border: none;
    padding: 10px 16px;
    margin: 0 5px;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, opacity 0.3s;
  }

  .loading-spinner {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 200px;
    width: 100%;
  }


  .spinner {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: inline-block;
    border-top: 4px solid #ff6347;
    border-right: 4px solid transparent;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
  }
  .spinner::after {
    content: '';
    box-sizing: border-box;
    position: absolute;
    left: 0;
    top: 0;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border-left: 4px solid #ffa494;
    border-bottom: 4px solid transparent;
    animation: rotation 0.5s linear infinite reverse;
  }
  @keyframes rotation {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
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
        Lorem Ipsum
    </div>
  </div>
  <!-- End of inside navigation -->


  <!-- Start of main content -->
  <div class="bridge"></div>

  <div id="loadingSpinner" class="loading-spinner">
    <div class="spinner"></div>
    <p>Memuat data...</p>
  </div>

  <div class="mainContent"></div>
  <!-- End of main content -->

  <!-- Start of buy area -->
  <div class="buyArea">
    <div class="buyAreaPrice" id="cartInfo"></div>
    <div class="buyAreaAction">
      <button class="buyButton">Lihat</button>
    </div>
  </div>

  <script>
  document.querySelector('.buyButton').addEventListener('click', function() {
    window.location.href = 'storage.php';
  });
  </script>
  <!-- End of buy area -->

  <!-- Start of Footer -->
  <div class="bridge"></div>
  <div class="footer">
    <div class="lines"></div>
    <div class="footerTop">
      <div class="footerTopImage">
        <!-- Logo -->
      </div>
    </div>
  </div>
  <!-- End of Footer -->


</div>

<script>
//Toggle navigation menu
function toggleMenu() {
  var menu = document.getElementById('menuContent');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

function loadApiUrl() {
  return fetch('api.txt')
    .then(response => {
      if (!response.ok) throw new Error('Could not load API URL');
      return response.text();
    })
    .then(url => {
      apiURL = url.trim();
      return apiURL;
    })
    .catch(error => {
      console.error('Error loading API URL:', error);
      mainContent.innerHTML = "<p style='padding:20px;'>Gagal memuat API URL. Periksa file api.txt.</p>";
      document.getElementById('loadingSpinner').style.display = 'none';
      return Promise.reject(error);
    });
}

let apiURL = "";
const mainContent = document.querySelector('.mainContent');
const urlParams = new URLSearchParams(window.location.search);
let currentPage = parseInt(urlParams.get('page')) || 1;
const itemsPerPage = 10; // Setting items per page since new API might not handle pagination

document.addEventListener("DOMContentLoaded", () => {
  loadApiUrl().then(() => {
    loadBooks(currentPage);
    updateCartInfo();
  }).catch(err => {
    // Error already handled in loadApiUrl
  });
});

function loadBooks(page) {
  // Show loading spinner
  document.getElementById('loadingSpinner').style.display = 'flex';

  // Get cached data
  const cachedData = localStorage.getItem('apiCache');
  const cacheTimestamp = localStorage.getItem('apiCacheTimestamp');
  const now = new Date().getTime();

  // Cache expiration - 1 day
  const cacheExpiration = 86400000;
  const isCacheValid = cachedData && cacheTimestamp && (now - parseInt(cacheTimestamp) < cacheExpiration);

  // Create a timeout to use cached data if API is slow
  const timeoutDuration = 3000; // 3 seconds
  let timeoutId = setTimeout(() => {
    if (isCacheValid) {
      console.log('API response taking too long, using cached data');
      processData(JSON.parse(cachedData), page);
    }
  }, timeoutDuration);

  // Always try to fetch fresh data
  fetch(apiURL)
    .then(response => {
      if (!response.ok) throw new Error('Network error');
      return response.json();
    })
    .then(response => {
      // Clear the timeout since we got a response
      clearTimeout(timeoutId);

      // Save the new data to cache
      localStorage.setItem('apiCache', JSON.stringify(response));
      localStorage.setItem('apiCacheTimestamp', now.toString());

      // Process the data
      processData(response, page);
    })
    .catch(error => {
      // Clear the timeout
      clearTimeout(timeoutId);

      // If we have valid cache and encountered an error, use cache
      if (isCacheValid) {
        console.log('Fetch error, using cached data:', error);
        processData(JSON.parse(cachedData), page);
      } else {
        // Hide loading spinner when there's an error
        document.getElementById('loadingSpinner').style.display = 'none';
        console.error('Fetch error:', error);
        mainContent.innerHTML = "<p style='padding:20px;'>Gagal memuat data. Periksa koneksi internet Anda.</p>";
      }
    });
}

// Function to get the cheapest price from a price string
function getCheapestPrice(priceString) {
  if (!priceString) return 0;

  // Check if the price string contains multiple prices
  if (priceString.includes(',')) {
    // Split the price string by comma
    const prices = priceString.split(',');

    // Extract numeric values from each price option
    const numericPrices = prices.map(price => {
      // Extract the number part from strings like "300000 (Hard Cover)"
      const match = price.trim().match(/(\d+)/);
      return match ? parseInt(match[0], 10) : Infinity;
    });

    // Return the minimum price
    return Math.min(...numericPrices);
  } else {
    // Extract the number part from a single price option
    const match = priceString.match(/(\d+)/);
    return match ? parseInt(match[0], 10) : 0;
  }
}

// Separate function to process and display data
function processData(response, page) {
  // Hide loading spinner after successful data load
  document.getElementById('loadingSpinner').style.display = 'none';

  mainContent.innerHTML = "";

  if (!response.data || response.data.length === 0) {
    mainContent.innerHTML = "<p style='padding:20px;'>Tidak ada data produk.</p>";
    return;
  }

  // Manual pagination since the API doesn't support it
  const startIndex = (page - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const pageData = response.data.slice(startIndex, endIndex);

  if (pageData.length === 0) {
    mainContent.innerHTML = "<p style='padding:20px;'>Tidak ada data pada halaman ini.</p>";
    return;
  }

  pageData.forEach(product => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if product has children (multiple variants)
    const hasChildren = product.children && product.children.length > 0;

    // Get price (should already be the cheapest in the parent)
    const productPrice = parseInt(product.harga) || 0;

    // Format price with currency
    const price = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    }).format(productPrice);

    // Image path handling
    const imageSrc = product.gambar || 'noncover.png';

    // Generate unique ID for cart based on judul
    const productId = product.judul.toLowerCase().replace(/\s+/g, '-');

    const isInCart = cart.some(item => item.id === productId);
    const escapedTitle = product.judul.replace(/'/g, "\\'");

    // Calculate available stock
    const availableStock = parseInt(product.kuantitas) - parseInt(product.ketersediaan);
    const isOutOfStock = availableStock <= 0;

    // Set action based on whether product has children
    let buttonAction;
    let buttonClass = "addToCartBtn";
    let buttonText = '+';

    if (hasChildren) {
      // If product has children/variants, go directly to product page
      buttonAction = `goToProduct('${productId}')`;
      buttonText = '+';
    } else {
      // Standard add to cart action for single variant products
      buttonAction = `addToCart(event, '${productId}', '${escapedTitle}', '${imageSrc}', '${productPrice}')`;
      buttonText = isInCart ? ' ' : isOutOfStock ? 'Habis' : '+';
    }

    const bookHTML = `
      <div class="product">
          <div class="productImage">
            <img src="https://madzae.com/workspace/drive/userimages/${imageSrc}" alt="${product.judul}">
            <button
              class="${buttonClass}"
              onclick="${buttonAction}"
              ${isInCart || isOutOfStock ? 'disabled' : ''}>
              ${buttonText}
            </button>
          </div>
        <a href="product.php?id=${productId}">
          <div class="productTitle">${product.judul}</div>
        </a>
        <div class="productPrice">${price}</div>
        ${hasChildren ? '<div class="productOptions">Pilihan tersedia</div>' : ''}
      </div>
    `;

    mainContent.insertAdjacentHTML('beforeend', bookHTML);
  });

  // Total pages calculation
  const totalPages = Math.ceil(response.data.length / itemsPerPage);

  const paginationHTML = `
    <div class="nextButton">
      ${page > 1 ? `<button onclick="goToPage(${page-1})">&laquo; Sebelumnya</button>` : ''}
      ${page < totalPages ? `<button onclick="goToPage(${page+1})">Selanjutnya &raquo;</button>` : ''}
    </div>
  `;

  mainContent.insertAdjacentHTML('beforeend', paginationHTML);
}

// Function to navigate directly to product page
function goToProduct(productId) {
  window.location.href = `product.php?id=${productId}`;
}

// Add a refresh function to force data reload
function refreshData() {
  localStorage.removeItem('apiCache');
  localStorage.removeItem('apiCacheTimestamp');
  loadBooks(currentPage);
}

function goToPage(page) {
  const url = new URL(window.location);
  url.searchParams.set('page', page);
  history.pushState(null, '', url);
  currentPage = page;
  loadBooks(page);
}

function addToCart(event, id, judul, image, harga) {
  event.preventDefault();

  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  if (cart.some(item => item.id === id)) {
    alert('Produk sudah ada di keranjang.');
    return;
  }

  cart.push({ id, judul, image, harga });
  localStorage.setItem('cart', JSON.stringify(cart));

  const button = event.target;
  button.disabled = true;
  button.textContent = 'Di Keranjang';

  updateCartInfo();
}

function updateCartInfo() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const cartInfo = document.getElementById('cartInfo');
  const buyArea = document.querySelector('.buyArea');

  if (cart.length === 0) {
    buyArea.style.display = 'none';
  } else {
    buyArea.style.display = 'flex';
    cartInfo.textContent = `${cart.length} produk di keranjang`;
  }
}

document.querySelector('.buyButton').addEventListener('click', function() {
  window.location.href = 'storage.php';
});
</script>

</body>
</html>
