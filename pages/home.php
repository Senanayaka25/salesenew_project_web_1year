<?php
include '../include/header.php';
?>
</div>
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
  data-bs-interval="3000">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/carousel/carousel-1.jpg" class="d-block w-100" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>

    <div class="carousel-item">
      <img src="../images/carousel/carousel-2.svg" class="d-block w-100" alt="Second Slide">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>

    <div class="carousel-item">
      <img src="../images/carousel/carousel-4.png" class="d-block w-100" alt="Third Slide">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
  </div>



  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>







<!-- Featured Products -->
<!-- Featured Categories Section -->
<section class="py-16 bg-white">
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Shop by Category</h2>
      <p class="text-gray-600 text-lg">Curated collections for every style</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Mobile Phones -->
      <a href="../pages/phones.php">
        <div
          class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:scale-105">
          <img src="../images/Category/mobile.png" alt="Mobile Phones"
            class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          <div
            class="absolute bottom-6 left-6 text-white transition-transform duration-300 transform translate-y-4 group-hover:translate-y-0">
            <h3 class="text-2xl font-extrabold">Mobile Phones</h3>
            <p class="text-sm text-pink-200">Elegant & trendy styles</p>
          </div>
          <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
            <span class="bg-pink-500 text-white text-xs px-3 py-1 rounded-full font-semibold">Trending</span>
          </div>
        </div>
      </a>


      <!-- Headphones -->
      <a href="../pages/headphones.php">
        <div
          class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:scale-105">
          <img src="../images/Category/headphone.png" alt="Headphones"
            class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          <div
            class="absolute bottom-6 left-6 text-white transition-transform duration-300 transform translate-y-4 group-hover:translate-y-0">
            <h3 class="text-2xl font-extrabold">Headphones</h3>
            <p class="text-sm text-blue-200">Modern urban looks</p>
          </div>
          <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
            <span class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full font-semibold">New</span>
          </div>
        </div>
      </a>


      <!-- Back Covers -->
      <a href="../pages/backcovers.php">
      <div
        class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:scale-105">
        <img src="../images/Category/backcover.jpg" alt="Back Covers"
          class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <div
          class="absolute bottom-6 left-6 text-white transition-transform duration-300 transform translate-y-4 group-hover:translate-y-0">
          <h3 class="text-2xl font-extrabold">Back Covers & Chargers</h3>
          <p class="text-sm text-purple-200">Complete your look</p>
        </div>
        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
          <span class="bg-purple-500 text-white text-xs px-3 py-1 rounded-full font-semibold">Luxury</span>
        </div>
      </div>
      </a>

    </div>
  </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h3 class="text-3xl font-bold text-gray-900 mb-4">
        Why Choose TecHub?
      </h3>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="text-center p-6 bg-white rounded-xl shadow-md">
        <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h4 class="font-bold text-xl text-gray-900 mb-2">
          Genuine Products
        </h4>
        <p class="text-gray-600">
          100% authentic mobile phones with manufacturer warranty
        </p>
      </div>

      <div class="text-center p-6 bg-white rounded-xl shadow-md">
        <div class="w-16 h-16 bg-red-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <div class="loader">
            <div class="truckWrapper">
              <div class="truckBody">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 198 93" class="trucksvg">
                  <path stroke-width="3" stroke="#282828" fill="#F83D3D"
                    d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z">
                  </path>
                  <path stroke-width="3" stroke="#282828" fill="#7D7C7C"
                    d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z">
                  </path>
                  <path stroke-width="2" stroke="#282828" fill="#282828"
                    d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z">
                  </path>
                  <rect stroke-width="2" stroke="#282828" fill="#FFFCAB" rx="1" height="7" width="5" y="63" x="187">
                  </rect>
                  <rect stroke-width="2" stroke="#282828" fill="#282828" rx="1" height="11" width="4" y="81" x="193">
                  </rect>
                  <rect stroke-width="3" stroke="#282828" fill="#DFDFDF" rx="2.5" height="90" width="121" y="1.5"
                    x="6.5">
                  </rect>
                  <rect stroke-width="2" stroke="#282828" fill="#DFDFDF" rx="2" height="4" width="6" y="84" x="1">
                  </rect>
                </svg>
              </div>
              <div class="truckTires">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                  <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15"></circle>
                  <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                  <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15"></circle>
                  <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                </svg>
              </div>
              <div class="road"></div>

              <svg xml:space="preserve" viewBox="0 0 453.459 453.459" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1" fill="#000000" class="lampPost">
                <path d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
              c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
              c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
              c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
              h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
              v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
              V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
              M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
              h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"></path>
              </svg>
            </div>
          </div>
        </div>
        <h4 class="font-bold text-xl text-gray-900 mb-2">
          Fast Delivery
        </h4>
        <p class="text-gray-600">
          Quick and secure delivery to your doorstep
        </p>
      </div>
      <div class="text-center p-6 bg-white rounded-xl shadow-md">
        <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
          </svg>
        </div>
        <h4 class="font-bold text-xl text-gray-900 mb-2">24/7 Support</h4>
        <p class="text-gray-600">
          Round-the-clock customer service and technical support
        </p>
      </div>
    </div>
  </div>
</section>
</div>


<?php
include '../include/footer.php';
?>