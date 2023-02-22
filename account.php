<?php
include 'head.php';
?>
  <!-- Body Start -->
  <body>
    <!-- Header Start -->
    <header class="header">
      <div class="logo-wrap">
        <a href="index.php"><i class="iconly-Arrow-Left-Square icli"></i></a>
        <h1 class="title-color font-md">Accounts</h1>
      </div>
      <div class="avatar-wrap">
        <a href="index.php">
          <i class="iconly-Home icli"></i>
        </a>
      </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="main-wrap account-page mb-xxl">
      <div class="account-wrap section-b-t">
        <div class="user-panel">
          <div class="media">
            <a href="account.html"> <img src="assets/images/avatar/avatar.jpg" alt="avatar" /></a>
            <div class="media-body">
              <a href="account.html" class="title-color"
                >Andrea Joanne
                <span class="content-color font-sm">andreajoanne@gmail.com</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Navigation Start -->
        <ul class="navigation">
          <li>
            <a href="index.php" class="nav-link title-color font-sm">
              <i class="iconly-Home icli"></i>
              <span>Home</span>
            </a>
            <a href="index.php" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="category-wide.html" class="nav-link title-color font-sm">
              <i class="iconly-Category icli"></i>
              <span>Shop by Category</span>
            </a>
            <a href="category-wide.html" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="order-history.html" class="nav-link title-color font-sm">
              <i class="iconly-Document icli"></i>
              <span>Orders</span>
            </a>
            <a href="order-history.html" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="wishlist.html" class="nav-link title-color font-sm">
              <i class="iconly-Heart icli"></i>
              <span>Your Wishlist</span>
            </a>
            <a href="wishlist.html" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#language" aria-controls="language" class="nav-link title-color font-sm">
              <img src="assets/icons/png/flags.png" alt="flag" />
              <span>Langauge</span>
            </a>
            <a href="javascript:void(0)" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="notification.html" class="nav-link title-color font-sm">
              <i class="iconly-Notification icli"></i>
              <span>Notification</span>
            </a>
            <a href="notification.html" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>

          <li>
            <a href="setting.html" class="nav-link title-color font-sm">
              <i class="iconly-Setting icli"></i>
              <span>Settings</span>
            </a>
            <a href="setting.html" class="arrow"><i data-feather="chevron-right"></i></a>
          </li>
        </ul>
        <!-- Navigation End -->
        <button class="log-out" data-bs-toggle="offcanvas" data-bs-target="#confirmation" aria-controls="confirmation"><i class="iconly-Logout icli"></i>Sign Out</button>
      </div>
    </main>
    <!-- Main End -->

    <?php include 'footer-start.php'?>

    <?php include 'footer-main.php'?>
</html>
<!-- Html End -->
