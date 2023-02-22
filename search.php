<?php
include 'head.php';
?>

  <!-- Body Start -->
  <body>
  <?php include 'header.php'?>
    <!-- Skeleton loader Start -->
    <div class="skeleton-loader">
      <!-- Main Start -->
      <div class="main-wrap search-page mb-xxl">
        <!-- Search Box Start -->
        <div class="search-box">
          <input class="form-control" type="search" disabled />
        </div>
        <!-- Search Box End -->

        <!-- Recent Search Section Start -->
        <div class="recent-search section-p-t">
          <h2 class="font-md title-color fw-600 title-mb">Recently Search</h2>
          <ul class="custom-scroll-hidden">
            <li class="font-sm title-color"><span></span></li>
            <li class="font-sm title-color"><span></span></li>
            <li class="font-sm title-color"><span></span></li>
            <li class="font-sm title-color"><span></span></li>
          </ul>
        </div>
        <!-- Recent Search Section End -->

        <!-- Trending Category Section Start -->
        <div class="trending section-p-t">
          <h2 class="font-md title-color fw-600 title-mb">Trending category</h2>
          <div class="row g-3">
            <div class="col-3">
              <a href="category-wide.html" class="category bg-theme-blue border-blue">
                <div class="img"></div>
              </a>
            </div>

            <div class="col-3">
              <a href="category-wide.html" class="category bg-theme-yellow border-yellow">
                <div class="img"></div>
              </a>
            </div>

            <div class="col-3">
              <a href="category-wide.html" class="category bg-theme-orange border-orange">
                <div class="img"></div>
              </a>
            </div>

            <div class="col-3">
              <a href="category-wide.html" class="category bg-theme-pink border-pink">
                <div class="img"></div>
              </a>
            </div>
          </div>
        </div>
        <!-- Trending Category Section End -->

        <!-- Recent Search Section Start -->
        <div class="trending-products section-p-t">
          <h3 class="font-md title-color fw-600 title-mb">Trending Products</h3>

          <div class="product-wrap">
            <!-- Product Start -->
            <div class="product-list media">
              <div class="link">
                <div class="img"></div>
              </div>
              <div class="media-body">
                <a href="javascript:void(0)" class="font-sm"> Assorted Capsicum Combo </a>
                <span class="content-color font-xs">500g</span>
                <span class="title-color font-sm"><span> $25.00</span> </span>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="product-list media">
              <div class="link">
                <div class="img"></div>
              </div>
              <div class="media-body">
                <a href="javascript:void(0)" class="font-sm"> Assorted Capsicum Combo </a>
                <span class="content-color font-xs">500g</span>
                <span class="title-color font-sm"><span> $25.00</span> </span>
              </div>
            </div>
            <!-- Product End -->
          </div>
        </div>
        <!-- Recent Search Section End -->
      </div>
      <!-- Main End -->
    </div>
    <!-- Skeleton loader End -->

    

    <?php include 'sidebar.php'?>
      

    <!-- Main Start -->
    <main class="main-wrap search-page mb-xxl">
      <!-- Search Box Start -->
      <div class="search-box">
        <i class="iconly-Search icli search"></i>
        <input class="form-control" type="search" placeholder="Search here..." />
        <i class="iconly-Voice icli mic"></i>
      </div>
      <!-- Search Box End -->

      <!-- Recent Search Section Start -->
      <section class="recent-search pb-0">
        <h1 class="font-md title-color fw-600 title-mb">Recently Search</h1>
        <ul class="custom-scroll-hidden">
          <li class="font-sm title-color"><a href="shop.html"> Vegetables</a></li>
          <li class="font-sm title-color"><a href="shop.html"> Fruits</a></li>
          <li class="font-sm title-color"><a href="shop.html"> Beauty</a></li>
          <li class="font-sm title-color"><a href="shop.html"> Fruits</a></li>
        </ul>
      </section>
      <!-- Recent Search Section End -->

      <!-- Trending Category Section Start -->
      <section class="trending pb-0">
        <h2 class="font-md title-color fw-600 title-mb">Trending category</h2>
        <div class="row g-3">
          <div class="col-3">
            <a href="shop.html" class="category bg-theme-blue border-blue">
              <img src="assets/images/catagoeris/1.png" alt="category" />
            </a>
          </div>

          <div class="col-3">
            <a href="shop.html" class="category bg-theme-yellow border-yellow">
              <img src="assets/images/catagoeris/2.png" alt="category" />
            </a>
          </div>

          <div class="col-3">
            <a href="shop.html" class="category bg-theme-orange border-orange">
              <img src="assets/images/catagoeris/3.png" alt="category" />
            </a>
          </div>

          <div class="col-3">
            <a href="shop.html" class="category bg-theme-pink border-pink">
              <img src="assets/images/catagoeris/4.png" alt="category" />
            </a>
          </div>
        </div>
      </section>
      <!-- Trending Category Section End -->

      <!-- Recent Search Section Start -->
      <section class="offer-section pb-0">
        <h3 class="font-md title-color fw-600 title-mb">Trending Products</h3>
        <div class="offer">
          <div class="offer-wrap">
            <div class="product-list media">
              <a href="product.html"><img src="assets/images/product/8.png" class="img-fluid" alt="offer" /></a>
              <div class="media-body">
                <a href="product.html" class="font-sm"> Assorted Capsicum Combo </a>
                <span class="content-color font-xs">500g</span>
                <span class="title-color font-sm">$25.00 <span class="badges-round bg-theme-theme font-xs">50% off</span></span>
                <div class="plus-minus d-inline-block d-xs-none">
                  <i class="sub" data-feather="minus"></i>
                  <input type="number" value="1" min="0" max="10" />
                  <i class="add" data-feather="plus"></i>
                </div>
              </div>
            </div>

            <div class="product-list media">
              <a href="product.html"><img src="assets/images/product/6.png" class="img-fluid" alt="offer" /></a>
              <div class="media-body">
                <a href="product.html" class="font-sm"> Assorted Capsicum Combo </a>
                <span class="content-color font-xs">500g</span>
                <span class="title-color font-sm">$25.00 <span class="badges-round bg-theme-theme font-xs">50% off</span></span>
                <div class="plus-minus d-inline-block d-xs-none">
                  <i class="sub" data-feather="minus"></i>
                  <input type="number" value="1" min="0" max="10" />
                  <i class="add" data-feather="plus"></i>
                </div>
              </div>
            </div>

            <div class="product-list media">
              <a href="product.html"><img src="assets/images/product/7.png" class="img-fluid" alt="offer" /></a>
              <div class="media-body">
                <a href="product.html" class="font-sm"> Assorted Capsicum Combo </a>
                <span class="content-color font-xs">500g</span>
                <span class="title-color font-sm">$25.00 <span class="badges-round bg-theme-theme font-xs">50% off</span></span>
                <div class="plus-minus d-inline-block d-xs-none">
                  <i class="sub" data-feather="minus"></i>
                  <input type="number" value="1" min="0" max="10" />
                  <i class="add" data-feather="plus"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Recent Search Section End -->
    </main>
    <!-- Main End -->

    <?php include 'footer-start.php'?>

    <?php include 'footer-main.php'?>
</html>
<!-- Html End -->
