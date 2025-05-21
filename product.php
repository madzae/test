<!DOCTYPE html>
<html lang="id">
<head>
  <meta content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <title>Product Detail</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <meta property="article:published_time" content="" />
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="" />
  <meta property="og:image:secure_url" content="" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:alt" content="" />
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="madzae.com">
  <meta property="twitter:url" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BookStore",
    "image": "",
    "name": "Rupabumi",
    "description": "",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl Masjid Al-Mujahidin No 38L",
      "addressLocality": "Depok City",
      "addressRegion": "West Java",
      "postalCode": "16532",
      "addressCountry": "ID"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": -6.374305565480928,
      "longitude": 106.7690652777874
    },
    "url": "",
    "telephone": "+6285956480043",
    "priceRange": ""
  }
  </script>

  <style>
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
    font-family: "Open Sans", sans-serif;
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
    display: grid;
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
    font-size: 11px;
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
    font-size: 24px;
    font-weight: bolder;
    color: var(--text-color);
  }

  .mainText {
    font-size: 18px;
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
    width: 160px;
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
    background-color: #777;
    color: #ddd;
    cursor: not-allowed;
    opacity: 0.7;
  }

  .insideMenu {
    padding: 40px;
  }

  .insideMenu a {
    text-decoration: none;
    color: inherit;
  }

  /* Variant selection styles */
.variant-selection-container {
  margin: 15px 0;
}

.variation-selector, .color-selector {
  margin-bottom: 10px;
}

.variation-selector label, .color-selector label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.variation-selector select, .color-selector select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

.inactiveButton {
  background-color: #cccccc !important;
  cursor: not-allowed;
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
    <center><div class="headingOne" id="bookTitle"></div></center>
    <div class="bridgeProduct"></div>
    <div class="topContentProduct">
      <img src="" id="bookCover">
    </div>
    <div class="mainContent">
      <div class="productPrice" id="productPrice"></div>
      <div class="availability" id="availability"></div>
      <div class="mainText" id="bookDescription"></div>
      <!-- Variant Selection Area -->
<div id="variantSelection" class="variant-selection-container">
  <!-- Variant selectors will be added here dynamically -->
</div>
      <div class="addToCartContainer">
        <button class="addToCartButton" id="addToCartBtn">+ Keranjang</button>
      </div>
    </div>
    <!-- End of main content -->

    <!-- Start of buy area -->
    <div class="buyArea" id="buyArea" style="display: none;">
      <div class="buyAreaPrice" id="cartInfo"></div>
      <div class="buyAreaAction">
        <button class="buyButton">Lihat</button>
      </div>
    </div>
    <!-- Start of buy area -->

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
    <!-- Start of Footer -->


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
          document.getElementById('bookTitle').textContent = "Error: API URL unavailable";
          document.getElementById('bookDescription').textContent = "Could not load API URL from api.txt file";
          return Promise.reject(error);
        });
    }

    // Handle "View Cart" button click
    document.querySelector('.buyButton').addEventListener('click', function() {
      window.location.href = 'storage.php';
    });

    // Function to update cart info display
    function updateCartInfo() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const cartInfo = document.getElementById('cartInfo');
      const buyArea = document.getElementById('buyArea');

      if (cart.length === 0) {
        buyArea.style.display = 'none';
      } else {
        buyArea.style.display = 'flex';
        cartInfo.textContent = `${cart.length} produk di keranjang`;
      }
    }

    // Format currency
    function formatCurrency(amount) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      }).format(amount);
    }

    // Process product data and update UI
    function processProductData(response, productId) {
      if (!response.data || response.data.length === 0) {
        document.getElementById('bookTitle').textContent = "Error: No data available";
        document.getElementById('bookDescription').textContent = "Please try again later";
        return;
      }

      // Find the product with matching ID
      const product = response.data.find(item => {
        const itemId = item.judul.toLowerCase().replace(/\s+/g, '-');
        return itemId === productId;
      });

      if (!product) {
        document.getElementById('bookTitle').textContent = "Error: Product not found";
        document.getElementById('bookDescription').textContent = "The requested product could not be found";
        return;
      }

      // Image path handling
      const imageSrc = product.gambar
        ? `https://madzae.com/workspace/drive/userimages/${product.gambar}`
        : 'aset/noncover.png';

      // Update page title
      document.title = product.judul;

      // Update page content
      document.getElementById('bookTitle').textContent = product.judul;
      document.getElementById('bookCover').src = imageSrc;
      document.getElementById('bookCover').alt = product.judul;
      document.getElementById('bookDescription').textContent = product.deskripsi || "No description available";

      // Handle product variants
      const hasChildren = product.children && product.children.length > 0;
      const variantSelectionContainer = document.getElementById('variantSelection');
      variantSelectionContainer.innerHTML = ''; // Clear existing options

      // Create variant options if product has children
      if (hasChildren) {
        // First check what types of variations we have
        const variations = new Set();
        const colors = new Set();

        // Collect all possible variation types and colors
        product.children.forEach(child => {
          if (child.variasi) variations.add(child.variasi);
          if (child.warna) colors.add(child.warna);
        });

        // Create variation selector if there are variations
        if (variations.size > 0) {
          const variationDiv = document.createElement('div');
          variationDiv.className = 'variation-selector';

          const variationLabel = document.createElement('label');
          variationLabel.textContent = 'Variasi:';
          variationDiv.appendChild(variationLabel);

          const variationSelect = document.createElement('select');
          variationSelect.id = 'variationSelect';
          variationSelect.addEventListener('change', updateProductSelection);

          // Add default option
          const defaultOption = document.createElement('option');
          defaultOption.value = '';
          defaultOption.textContent = 'Pilih Variasi';
          variationSelect.appendChild(defaultOption);

          // Add options from variations set
          Array.from(variations).sort().forEach(variation => {
            const option = document.createElement('option');
            option.value = variation;
            option.textContent = variation;
            variationSelect.appendChild(option);
          });

          variationDiv.appendChild(variationSelect);
          variantSelectionContainer.appendChild(variationDiv);
        }

        // Create color selector if there are colors
        if (colors.size > 0) {
          const colorDiv = document.createElement('div');
          colorDiv.className = 'color-selector';

          const colorLabel = document.createElement('label');
          colorLabel.textContent = 'Warna:';
          colorDiv.appendChild(colorLabel);

          const colorSelect = document.createElement('select');
          colorSelect.id = 'colorSelect';
          colorSelect.addEventListener('change', updateProductSelection);

          // Add default option
          const defaultOption = document.createElement('option');
          defaultOption.value = '';
          defaultOption.textContent = 'Pilih Warna';
          colorSelect.appendChild(defaultOption);

          // Add options from colors set
          Array.from(colors).sort().forEach(color => {
            const option = document.createElement('option');
            option.value = color;
            option.textContent = color;
            colorSelect.appendChild(option);
          });

          colorDiv.appendChild(colorSelect);
          variantSelectionContainer.appendChild(colorDiv);
        }

        // Initially show parent product details
        document.getElementById('productPrice').textContent = formatCurrency(product.harga);

        // Calculate available stock
        const availableStock = parseInt(product.kuantitas) - parseInt(product.ketersediaan);
        const isOutOfStock = availableStock <= 0;
        document.getElementById('availability').textContent = `Stok tersedia: ${availableStock > 0 ? availableStock : 'Habis'}`;

        // Setup Add to Cart button (disabled until variation is selected)
        const addButton = document.getElementById('addToCartBtn');
        addButton.disabled = true;
        addButton.textContent = 'Pilih Variasi';
        addButton.classList.add('inactiveButton');

        // Store product data for later use
        window.productData = {
          parent: product,
          selectedChild: null
        };

      } else {
        // Handle simple product without variations
        document.getElementById('productPrice').textContent = formatCurrency(product.harga);

        // Calculate available stock
        const availableStock = parseInt(product.kuantitas) - parseInt(product.ketersediaan);
        const isOutOfStock = availableStock <= 0;
        document.getElementById('availability').textContent = `Stok tersedia: ${availableStock > 0 ? availableStock : 'Habis'}`;

        // Generate unique ID for cart based on judul
        const prodId = product.judul.toLowerCase().replace(/\s+/g, '-');

        // Set up Add to Cart button
        const addButton = document.getElementById('addToCartBtn');
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const isInCart = cart.some(item => item.id === prodId);

        if (isInCart) {
          addButton.disabled = true;
          addButton.textContent = 'Di Keranjang';
          addButton.classList.add('inactiveButton');
        } else if (isOutOfStock) {
          addButton.disabled = true;
          addButton.textContent = 'Habis';
          addButton.classList.add('inactiveButton');
        } else {
          addButton.disabled = false;
          addButton.textContent = '+ Keranjang';
          addButton.classList.remove('inactiveButton');
        }

        // Add to cart click handler for simple product
        addButton.addEventListener('click', function(e) {
          e.preventDefault();
          const currentCart = JSON.parse(localStorage.getItem('cart')) || [];

          // Check if already in cart
          if (currentCart.some(item => item.id === prodId)) {
            alert('Produk sudah ada di keranjang.');
            return;
          }

          // Check if out of stock
          if (isOutOfStock) {
            alert('Produk tidak tersedia.');
            return;
          }

          // Add to cart
          currentCart.push({
            id: prodId,
            judul: product.judul,
            image: product.gambar,
            harga: product.harga
          });

          // Save to localStorage
          localStorage.setItem('cart', JSON.stringify(currentCart));

          // Update button state
          addButton.disabled = true;
          addButton.textContent = 'Di Keranjang';
          addButton.classList.add('inactiveButton');

          // Update cart info
          updateCartInfo();
        });
      }

      // Update cart info on load
      updateCartInfo();
    }

    // Function to update product selection based on variant choices
    function updateProductSelection() {
      if (!window.productData || !window.productData.parent) return;

      const product = window.productData.parent;
      if (!product.children || product.children.length === 0) return;

      const variationSelect = document.getElementById('variationSelect');
      const colorSelect = document.getElementById('colorSelect');

      // Get selected values
      const selectedVariation = variationSelect ? variationSelect.value : '';
      const selectedColor = colorSelect ? colorSelect.value : '';

      // Find matching child product
      let matchingChild = null;

      // If both variation and color are selected
      if (variationSelect && colorSelect && selectedVariation && selectedColor) {
        matchingChild = product.children.find(child =>
          child.variasi === selectedVariation && child.warna === selectedColor
        );
      }
      // If only variation is selected
      else if (variationSelect && selectedVariation) {
        matchingChild = product.children.find(child =>
          child.variasi === selectedVariation && (!colorSelect || !child.warna)
        );

        // Update color options if a variation is selected
        if (colorSelect) {
          updateColorOptions(selectedVariation);
        }
      }
      // If only color is selected
      else if (colorSelect && selectedColor) {
        matchingChild = product.children.find(child =>
          child.warna === selectedColor && (!variationSelect || !child.variasi)
        );

        // Update variation options if a color is selected
        if (variationSelect) {
          updateVariationOptions(selectedColor);
        }
      }

      const addButton = document.getElementById('addToCartBtn');

      // If we found a matching child product
      if (matchingChild) {
        // Update displayed information
        document.getElementById('productPrice').textContent = formatCurrency(matchingChild.harga);

        // If the image is different, update it
        if (matchingChild.gambar && matchingChild.gambar !== product.gambar) {
          const imageSrc = `https://madzae.com/workspace/drive/userimages/${matchingChild.gambar}`;
          document.getElementById('bookCover').src = imageSrc;
        }

        // Calculate available stock
        const availableStock = parseInt(matchingChild.kuantitas) - parseInt(matchingChild.ketersediaan);
        const isOutOfStock = availableStock <= 0;
        document.getElementById('availability').textContent = `Stok tersedia: ${availableStock > 0 ? availableStock : 'Habis'}`;

        // Generate unique ID for variant
        const prodId = `${product.judul.toLowerCase().replace(/\s+/g, '-')}-${matchingChild.varian.toLowerCase().replace(/\s+|,/g, '-')}`;

        // Check if already in cart
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const isInCart = cart.some(item => item.id === prodId);

        // Update button state
        if (isInCart) {
          addButton.disabled = true;
          addButton.textContent = 'Di Keranjang';
          addButton.classList.add('inactiveButton');
        } else if (isOutOfStock) {
          addButton.disabled = true;
          addButton.textContent = 'Habis';
          addButton.classList.add('inactiveButton');
        } else {
          addButton.disabled = false;
          addButton.textContent = '+ Keranjang';
          addButton.classList.remove('inactiveButton');

          // Update add to cart handler for the selected variant
          addButton.onclick = function(e) {
            e.preventDefault();
            const currentCart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if already in cart
            if (currentCart.some(item => item.id === prodId)) {
              alert('Produk sudah ada di keranjang.');
              return;
            }

            // Check if out of stock
            if (isOutOfStock) {
              alert('Produk tidak tersedia.');
              return;
            }

            // Add to cart with variant information
            currentCart.push({
              id: prodId,
              judul: product.judul,
              image: matchingChild.gambar || product.gambar,
              harga: matchingChild.harga,
              variasi: matchingChild.variasi || '',
              warna: matchingChild.warna || '',
              varian: matchingChild.varian || ''
            });

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(currentCart));

            // Update button state
            addButton.disabled = true;
            addButton.textContent = 'Di Keranjang';
            addButton.classList.add('inactiveButton');

            // Update cart info
            updateCartInfo();
          };
        }

        // Store selected child for later use
        window.productData.selectedChild = matchingChild;

      } else if (selectedVariation || selectedColor) {
        // If user has made a selection but no matching product found
        addButton.disabled = true;
        addButton.textContent = 'Kombinasi Tidak Tersedia';
        addButton.classList.add('inactiveButton');
        document.getElementById('availability').textContent = 'Stok tersedia: 0';

        // Reset to parent product price
        document.getElementById('productPrice').textContent = formatCurrency(product.harga);

      } else {
        // Reset to default state if no selections are made
        addButton.disabled = true;
        addButton.textContent = 'Pilih Variasi';
        addButton.classList.add('inactiveButton');

        // Reset to parent product details
        document.getElementById('productPrice').textContent = formatCurrency(product.harga);
        const availableStock = parseInt(product.kuantitas) - parseInt(product.ketersediaan);
        document.getElementById('availability').textContent = `Stok tersedia: ${availableStock > 0 ? availableStock : 'Habis'}`;
      }
    }

    // Update color dropdown based on selected variation
    function updateColorOptions(selectedVariation) {
      if (!window.productData || !window.productData.parent) return;

      const product = window.productData.parent;
      const colorSelect = document.getElementById('colorSelect');
      if (!colorSelect) return;

      // Find available colors for the selected variation
      const availableColors = new Set();
      product.children.forEach(child => {
        if (child.variasi === selectedVariation && child.warna) {
          availableColors.add(child.warna);
        }
      });

      // Save current selection if possible
      const currentSelection = colorSelect.value;

      // Clear and rebuild options
      while (colorSelect.options.length > 1) {
        colorSelect.remove(1);
      }

      // Add options from available colors
      Array.from(availableColors).sort().forEach(color => {
        const option = document.createElement('option');
        option.value = color;
        option.textContent = color;
        colorSelect.appendChild(option);
      });

      // Restore selection if still available
      if (availableColors.has(currentSelection)) {
        colorSelect.value = currentSelection;
      }
    }

    // Update variation dropdown based on selected color
    function updateVariationOptions(selectedColor) {
      if (!window.productData || !window.productData.parent) return;

      const product = window.productData.parent;
      const variationSelect = document.getElementById('variationSelect');
      if (!variationSelect) return;

      // Find available variations for the selected color
      const availableVariations = new Set();
      product.children.forEach(child => {
        if (child.warna === selectedColor && child.variasi) {
          availableVariations.add(child.variasi);
        }
      });

      // Save current selection if possible
      const currentSelection = variationSelect.value;

      // Clear and rebuild options
      while (variationSelect.options.length > 1) {
        variationSelect.remove(1);
      }

      // Add options from available variations
      Array.from(availableVariations).sort().forEach(variation => {
        const option = document.createElement('option');
        option.value = variation;
        option.textContent = variation;
        variationSelect.appendChild(option);
      });

      // Restore selection if still available
      if (availableVariations.has(currentSelection)) {
        variationSelect.value = currentSelection;
      }
    }

    // Load product data from API and setup page
    window.addEventListener("DOMContentLoaded", () => {
      const urlParams = new URLSearchParams(window.location.search);
      const productId = urlParams.get('id');
      let apiURL = "";

      if (!productId) {
        console.error("No product ID in URL");
        document.getElementById('bookTitle').textContent = "Error: No product specified";
        document.getElementById('bookDescription').textContent = "Please go back and select a product";
        return;
      }

      // Load API URL first
      fetch('api.txt')
        .then(response => {
          if (!response.ok) throw new Error('Could not load API URL');
          return response.text();
        })
        .then(url => {
          apiURL = url.trim();

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
              processProductData(JSON.parse(cachedData), productId);
            }
          }, timeoutDuration);

          // Always try to fetch fresh data
          return fetch(apiURL)
            .then(response => {
              if (!response.ok) throw new Error("Network response was not ok");
              return response.json();
            })
            .then(response => {
              // Clear the timeout since we got a response
              clearTimeout(timeoutId);

              // Save the new data to cache
              localStorage.setItem('apiCache', JSON.stringify(response));
              localStorage.setItem('apiCacheTimestamp', now.toString());

              // Process the data
              processProductData(response, productId);
            })
            .catch(error => {
              // Clear the timeout
              clearTimeout(timeoutId);

              // If we have valid cache and encountered an error, use cache
              if (isCacheValid) {
                console.log('Fetch error, using cached data:', error);
                processProductData(JSON.parse(cachedData), productId);
              } else {
                console.error("Error fetching product data:", error);
                document.getElementById('bookTitle').textContent = "Error loading product";
                document.getElementById('bookDescription').textContent = "Could not load product details. Please try again later.";
              }
            });
        })
        .catch(error => {
          console.error('Error loading API URL:', error);
          document.getElementById('bookTitle').textContent = "Error: API URL unavailable";
          document.getElementById('bookDescription').textContent = "Could not load API URL from api.txt file";
        });
    });

    // Function to force refresh data (can be called from a refresh button if needed)
    function refreshData() {
      localStorage.removeItem('apiCache');
      localStorage.removeItem('apiCacheTimestamp');
      location.reload();
    }
  </script>
</body>
</html>
