<?php
// Start the session
session_start();

//Check if the language preference has already been set in the session
if (isset($_SESSION['lang'])) {
  $lang = $_SESSION['lang'];
} elseif (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'es') !== false) {
  $lang = 'es';
} else {
  $lang = 'en';
}

//Store the language preference in the session
if (isset($_POST['lang'])) {
  $lang = $_POST['lang'];
  $_SESSION['lang'] = $lang;
}

// Read the contents of the language file
// $lang_data = file_get_contents($lang . '.json');

// Parse the language data as a JSON object
// $lang_obj = json_decode($lang_data);
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SCOOBLE</title>
  
</head>

<body>
  <div class="container-scroller">
    <!--  <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->
    <!-- partial:partials/_navbar.html -->
    <style>
      #sidebar,
      .navbar-brand-wrapper {
        background-color: #452C88 !important;
      }

      .nav-item .logout_li {
        background-color: #fff !important;
        color: #000 !important;
        position: absolute;
        bottom: 28px !important;
        justify-content: center !important;
        width: 186px !important;
        font-size: 25px !important;
        height: 52px !important;
        border-radius: 5px !important;
      }
    </style>
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{'/'}}"><img src="assets/images/Logo.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{'/'}}"><img src="assets/images/scooble.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper bg-transparent d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <!-- <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div> -->
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li> -->
          <!-- <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li> -->

          <li class="nav-item d-none d-lg-block ">
            <form method="post">
              <select id="lang-select" class="form-select" name="lang" onchange="this.form.submit()">
                <option value="en" <?php if ($lang == 'en') echo 'selected'; ?>>En</option>
                <option value="es" <?php if ($lang == 'es') echo 'selected'; ?>>Es</option>
              </select>
            </form>
          </li>
          <li class="nav-item d-none d-lg-block ">
            <a class="nav-link">
              <i class="mdi mdi-plus btn  p-1" style="background: #E45F00;color: #fff ; border-radius: 6px;" id=""></i>
            </a>
          </li>
          <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="fa fa-bell"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fa fa-user-circle" style="font-size: 28px !important;"></i>
            </a>
          </li>
          <!-- <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid px-0 page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom border-top">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img style="border-radius: 12px !important;" src="assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Lorem ipsum</span>
                <span class="text-secondary text-small"> @lang('lang.admin') </span>
              </div>
              <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
            </a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link" href="{{'/'}}">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.54 0H5.92C7.33 0 8.46 1.15 8.46 2.561V5.97C8.46 7.39 7.33 8.53 5.92 8.53H2.54C1.14 8.53 0 7.39 0 5.97V2.561C0 1.15 1.14 0 2.54 0ZM2.54 11.4697H5.92C7.33 11.4697 8.46 12.6107 8.46 14.0307V17.4397C8.46 18.8497 7.33 19.9997 5.92 19.9997H2.54C1.14 19.9997 0 18.8497 0 17.4397V14.0307C0 12.6107 1.14 11.4697 2.54 11.4697ZM17.4601 0H14.0801C12.6701 0 11.5401 1.15 11.5401 2.561V5.97C11.5401 7.39 12.6701 8.53 14.0801 8.53H17.4601C18.8601 8.53 20.0001 7.39 20.0001 5.97V2.561C20.0001 1.15 18.8601 0 17.4601 0ZM14.0801 11.4697H17.4601C18.8601 11.4697 20.0001 12.6107 20.0001 14.0307V17.4397C20.0001 18.8497 18.8601 19.9997 17.4601 19.9997H14.0801C12.6701 19.9997 11.5401 18.8497 11.5401 17.4397V14.0307C11.5401 12.6107 12.6701 11.4697 14.0801 11.4697Z" fill="white" />
              </svg>
              <span class="menu-title ml-2">@lang('lang.dashboard') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/client'}}">
              <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8576 5.98446C19.3853 5.98446 19.8684 5.71825 20.2227 5.28788C20.5987 4.83115 20.8314 4.1931 20.8314 3.48206C20.8314 2.73797 20.7572 2.07559 20.468 1.63218C20.205 1.22902 19.7172 0.979618 18.8576 0.979618C17.9981 0.979618 17.5102 1.22902 17.2473 1.63218C16.9581 2.07557 16.8839 2.73797 16.8839 3.48206C16.8839 4.19315 17.1165 4.83118 17.4926 5.28792C17.8469 5.71827 18.3299 5.98446 18.8576 5.98446ZM20.9765 5.90778C20.4392 6.5604 19.6904 6.96408 18.8576 6.96408C18.0248 6.96408 17.276 6.56041 16.7387 5.90781C16.2232 5.28162 15.9043 4.42355 15.9043 3.48206C15.9043 2.57365 16.0112 1.73985 16.4284 1.10029C16.8718 0.420497 17.6158 0 18.8576 0C20.0994 0 20.8434 0.420497 21.2868 1.10029C21.704 1.73984 21.811 2.57365 21.811 3.48206C21.811 4.42354 21.4921 5.28162 20.9765 5.90778Z" fill="white" />
                <path d="M23.0174 11.7404C22.9962 10.4001 22.9069 9.5513 22.5236 9.02564C22.1733 8.5453 21.5146 8.26609 20.3554 8.03867C20.0918 8.24402 19.5995 8.52014 18.8576 8.52014C18.1156 8.52014 17.6233 8.244 17.3597 8.03865C16.6132 8.18514 16.0743 8.35323 15.6915 8.58278C15.8194 8.20153 15.902 7.80454 15.9393 7.40337C16.353 7.25757 16.8421 7.13877 17.4224 7.03403L17.7077 6.98254L17.8892 7.20814C17.89 7.20908 18.1491 7.54052 18.8576 7.54052C19.566 7.54052 19.8251 7.20908 19.8259 7.20814L20.0075 6.98254L20.2927 7.03403C21.8634 7.31755 22.7665 7.70391 23.3119 8.45166C23.8472 9.18565 23.9688 10.1865 23.9932 11.7251L23.9942 11.7924C23.9971 11.9705 24 12.1469 24 12.1559L23.9426 12.3836C23.9401 12.3883 23.1231 14.0266 18.8576 14.0266C18.7048 14.0266 18.5568 14.0243 18.4126 14.0202C18.3449 13.6778 18.2519 13.3442 18.1236 13.0309C18.3533 13.0413 18.5975 13.047 18.8576 13.047C21.9203 13.047 22.809 12.2702 23.0202 12.0112C23.0199 11.8958 23.0192 11.8524 23.0185 11.8077L23.0174 11.7404Z" fill="white" />
                <path d="M12.0007 9.68808C12.6715 9.68808 13.2843 9.35136 13.7325 8.80697C14.2024 8.23625 14.493 7.44074 14.493 6.5557C14.493 5.63766 14.3998 4.81782 14.0362 4.26041C13.6989 3.74324 13.0814 3.42333 12.0007 3.42333C10.9199 3.42333 10.3024 3.74324 9.96507 4.26041C9.6015 4.8178 9.50831 5.63764 9.50831 6.5557C9.50831 7.44075 9.79897 8.2363 10.2689 8.80702C10.717 9.35137 11.3297 9.68808 12.0007 9.68808ZM14.4863 9.42687C13.8551 10.1935 12.9766 10.6677 12.0007 10.6677C11.0246 10.6677 10.1462 10.1935 9.51503 9.42692C8.90565 8.68673 8.52869 7.67116 8.52869 6.55571C8.52869 5.47336 8.65467 4.4821 9.1462 3.72854C9.66394 2.93473 10.5376 2.44373 12.0006 2.44373C13.4636 2.44373 14.3372 2.93473 14.8551 3.72854C15.3466 4.48208 15.4726 5.47336 15.4726 6.55571C15.4726 7.67117 15.0957 8.6867 14.4863 9.42687Z" fill="white" />
                <path d="M17.1387 16.4788C17.1127 14.8356 17.0013 13.792 16.5213 13.1338C16.0751 12.5221 15.2464 12.1721 13.7873 11.8897C13.4934 12.1291 12.9085 12.4792 12.0005 12.4792C11.0924 12.4792 10.5075 12.1291 10.2136 11.8897C8.77045 12.169 7.94372 12.5148 7.49424 13.1148C7.01302 13.7571 6.89407 14.7715 6.86427 16.3656L6.86315 16.4248C6.86097 16.5402 6.859 16.6444 6.85836 16.8421C7.09453 17.1482 8.16716 18.1653 12.0005 18.1653C15.8339 18.1653 16.9065 17.1481 17.1426 16.842C17.1422 16.6944 17.1411 16.629 17.1401 16.5635L17.1387 16.4788L17.1387 16.4788ZM17.3095 12.5598C17.9415 13.4264 18.0854 14.6219 18.1145 16.4635L18.1159 16.5482C18.1192 16.7505 18.1224 16.9483 18.1224 16.9834L18.065 17.2111C18.0621 17.2166 17.1008 19.1449 12.0005 19.1449C6.90013 19.1449 5.93886 17.2166 5.93596 17.2111L5.87854 16.9834C5.87854 16.8746 5.88268 16.6571 5.88738 16.4095L5.8885 16.3503C5.92211 14.5513 6.0764 13.3799 6.71364 12.5293C7.35823 11.6689 8.42912 11.2188 10.2813 10.8844L10.5659 10.833L10.7481 11.0585C10.7491 11.0598 11.0931 11.4995 12.0005 11.4995C12.9078 11.4995 13.2518 11.0598 13.2528 11.0585L13.435 10.833L13.7196 10.8844C15.5932 11.2226 16.6675 11.6794 17.3095 12.5598Z" fill="white" />
                <path d="M5.14237 5.98446C4.61469 5.98446 4.13162 5.71825 3.77729 5.28788C3.40127 4.83115 3.16864 4.1931 3.16864 3.48206C3.16864 2.73797 3.24281 2.07559 3.53204 1.63218C3.79503 1.22902 4.28284 0.979618 5.14237 0.979618C6.00195 0.979618 6.48977 1.22902 6.75274 1.63218C7.04193 2.07557 7.11607 2.73797 7.11607 3.48206C7.11607 4.19315 6.88346 4.83118 6.50744 5.28792C6.15313 5.71827 5.67009 5.98446 5.14237 5.98446ZM3.02347 5.90778C3.56079 6.5604 4.3096 6.96408 5.14237 6.96408C5.97517 6.96408 6.72396 6.56041 7.26127 5.90781C7.7768 5.28162 8.0957 4.42355 8.0957 3.48206C8.0957 2.57365 7.98877 1.73985 7.57162 1.10029C7.1282 0.420497 6.38419 0 5.14237 0C3.90062 0 3.15662 0.420497 2.71318 1.10029C2.29599 1.73984 2.18903 2.57365 2.18903 3.48206C2.18903 4.42354 2.50793 5.28162 3.02347 5.90778Z" fill="white" />
                <path d="M0.982648 11.7404C1.00385 10.4001 1.09307 9.5513 1.47643 9.02564C1.82673 8.5453 2.48539 8.26609 3.64459 8.03867C3.90819 8.24402 4.40047 8.52014 5.14238 8.52014C5.88438 8.52014 6.37671 8.244 6.64031 8.03865C7.38683 8.18514 7.92575 8.35323 8.30848 8.58278C8.18059 8.20153 8.09799 7.80454 8.06068 7.40337C7.64704 7.25757 7.15791 7.13877 6.57761 7.03403L6.29235 6.98254L6.11076 7.20814C6.11 7.20908 5.85092 7.54052 5.14237 7.54052C4.43396 7.54052 4.17487 7.20908 4.17411 7.20814L3.99253 6.98254L3.70726 7.03403C2.13658 7.31755 1.23347 7.70391 0.688143 8.45166C0.15285 9.18565 0.0311854 10.1865 0.00685173 11.7251L0.00576688 11.7924C0.00287438 11.9705 0 12.1469 0 12.1559L0.0574159 12.3836C0.0598745 12.3883 0.876932 14.0266 5.14236 14.0266C5.29525 14.0266 5.4432 14.0243 5.58736 14.0202C5.65512 13.6778 5.74807 13.3442 5.87641 13.0309C5.64669 13.0413 5.40255 13.047 5.14237 13.047C2.07971 13.047 1.19102 12.2702 0.979779 12.0112C0.980104 11.8958 0.980827 11.8524 0.98155 11.8077L0.982648 11.7404Z" fill="white" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.client') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ '/drivers'}}">
              <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09148 20.3718H7.52588V15.9374C5.19759 16.1948 3.34889 18.0435 3.09148 20.3718ZM8.64214 15.9374V20.3718H13.0765C12.8191 18.0435 10.9704 16.1948 8.64214 15.9374ZM13.0766 21.4881C12.9986 22.194 12.7746 22.855 12.4355 23.4412L13.4018 24.0001C13.9245 23.0965 14.2234 22.0473 14.2234 20.93C14.2234 17.5393 11.4747 14.7905 8.08401 14.7905C4.69332 14.7905 1.94458 17.5393 1.94458 20.93C1.94458 22.0473 2.24357 23.0965 2.76626 24.0001L3.73249 23.4412C3.39343 22.855 3.1694 22.194 3.09143 21.4881H13.0766Z" fill="white" />
                <path d="M9.75845 20.9299C9.75845 21.8547 9.00883 22.6043 8.08406 22.6043C7.15929 22.6043 6.40967 21.8547 6.40967 20.9299C6.40967 20.0051 7.15929 19.2555 8.08406 19.2555C9.00883 19.2555 9.75845 20.0051 9.75845 20.9299Z" fill="white" />
                <path d="M12.3171 19.169C12.1576 18.5735 12.511 17.9614 13.1064 17.8018L14.1847 17.5129C14.7802 17.3534 15.3923 17.7068 15.5518 18.3022L16.1297 20.4587C16.2892 21.0542 15.9358 21.6663 15.3403 21.8258L14.2621 22.1148C13.6666 22.2743 13.0545 21.9209 12.895 21.3254L12.3171 19.169Z" fill="white" />
                <path d="M0.616123 18.3017C0.775693 17.7063 1.38779 17.3529 1.98326 17.5124L3.06152 17.8014C3.65699 17.9609 4.01039 18.573 3.85082 19.1685L3.27299 21.3249C3.11342 21.9204 2.50132 22.2738 1.90585 22.1143L0.827655 21.8253C0.232141 21.6658 -0.12125 21.0537 0.0383139 20.4582L0.616123 18.3017Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.06085 8.09285V6.41846H4.17711V8.09285C4.17711 10.2506 5.92629 11.9998 8.08403 11.9998C10.2418 11.9998 11.9909 10.2506 11.9909 8.09285V6.41846H13.1072V8.09285C13.1072 10.8671 10.8583 13.116 8.08403 13.116C5.30978 13.116 3.06085 10.8671 3.06085 8.09285Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3879 4.74411H13.8045C13.8446 4.64169 13.888 4.52097 13.9311 4.38278L13.9379 4.36118C14.0884 3.87935 14.2234 3.44699 14.2234 2.5656C14.2234 2.11865 13.9331 1.74229 13.5487 1.44471C13.1592 1.14321 12.6273 0.885078 12.0349 0.674668C10.8484 0.253296 9.35203 0 8.08401 0C6.816 0 5.31965 0.253296 4.13318 0.674668C3.54072 0.885078 3.00882 1.14321 2.61936 1.44471C2.23498 1.74229 1.94458 2.11865 1.94458 2.5656C1.94458 3.38385 2.08143 3.8151 2.22203 4.25826C2.23514 4.29956 2.24826 4.34092 2.26132 4.38272C2.30446 4.52091 2.34777 4.64164 2.3879 4.74411ZM5.85149 3.06972C5.85149 2.76147 6.10137 2.51159 6.40962 2.51159H9.7584C10.0667 2.51159 10.3165 2.76147 10.3165 3.06972C10.3165 3.37796 10.0667 3.62785 9.7584 3.62785H6.40962C6.10137 3.62785 5.85149 3.37796 5.85149 3.06972Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.51468 6.08952C2.54002 5.9568 2.66152 5.86035 2.80334 5.86035H13.3647C13.5066 5.86035 13.6281 5.9568 13.6534 6.08952L13.6535 6.09019L13.6537 6.09086L13.654 6.09248L13.6546 6.09627L13.6562 6.10643C13.6574 6.1143 13.6588 6.1244 13.66 6.13651C13.6626 6.16079 13.6649 6.19339 13.6653 6.23307C13.666 6.31249 13.6586 6.42116 13.6286 6.54914C13.5677 6.80783 13.416 7.13668 13.0686 7.45627C12.3798 8.08986 10.9647 8.651 8.08404 8.651C5.20341 8.651 3.78827 8.08986 3.09948 7.45627C2.75205 7.13668 2.60035 6.80783 2.53951 6.54914C2.50943 6.42116 2.50212 6.31249 2.50279 6.23307C2.50312 6.19339 2.50547 6.16079 2.50803 6.13651C2.50932 6.1244 2.51066 6.1143 2.51183 6.10643L2.51345 6.09627L2.51412 6.09248L2.5144 6.09086L2.51456 6.09019L2.51468 6.08952Z" fill="white" />
              </svg>
              <span class="menu-title ml-2">  @lang('lang.drivers') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/routes'}}">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.46997 9C7.40297 9 8.96997 7.433 8.96997 5.5C8.96997 3.567 7.40297 2 5.46997 2C3.53697 2 1.96997 3.567 1.96997 5.5C1.96997 7.433 3.53697 9 5.46997 9Z" stroke="white" stroke-width="1.5" />
                <path d="M16.97 15H19.97C21.07 15 21.97 15.9 21.97 17V20C21.97 21.1 21.07 22 19.97 22H16.97C15.87 22 14.97 21.1 14.97 20V17C14.97 15.9 15.87 15 16.97 15Z" stroke="white" stroke-width="1.5" />
                <path d="M11.9999 5H14.6799C16.5299 5 17.3899 7.29 15.9999 8.51L8.00995 15.5C6.61995 16.71 7.47994 19 9.31994 19H11.9999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.48622 5.5H5.49777" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18.4862 18.5H18.4978" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.routes')</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'calender'}}">
              <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4109 0.768617L13.4119 1.51824C16.1665 1.73413 17.9862 3.61119 17.9891 6.48975L18 14.9155C18.0039 18.054 16.0322 19.985 12.8718 19.99L5.15188 20C2.01119 20.004 0.0148166 18.027 0.0108673 14.8795L6.64975e-06 6.55272C-0.00394266 3.65517 1.75153 1.78311 4.50617 1.53024L4.50518 0.780611C4.5042 0.340832 4.83001 0.00999726 5.26444 0.00999726C5.69886 0.00899776 6.02468 0.338833 6.02567 0.778612L6.02666 1.47826L11.8914 1.47027L11.8904 0.770616C11.8894 0.330837 12.2152 0.00100177 12.6497 2.26549e-06C13.0742 -0.000997234 13.4099 0.328838 13.4109 0.768617ZM1.52148 6.86157L16.4696 6.84158V6.49175C16.4272 4.34283 15.349 3.21539 13.4138 3.04748L13.4148 3.81709C13.4148 4.24688 13.0801 4.5877 12.6556 4.5877C12.2212 4.5887 11.8943 4.24887 11.8943 3.81909L11.8934 3.0095L6.02863 3.01749L6.02962 3.82609C6.02962 4.25687 5.70479 4.5967 5.27036 4.5967C4.83594 4.5977 4.50913 4.25887 4.50913 3.82809L4.50815 3.05847C2.58286 3.25137 1.51753 4.38281 1.52049 6.55072L1.52148 6.86157ZM12.2399 11.4043V11.4153C12.2498 11.8751 12.625 12.2239 13.0801 12.2139C13.5244 12.2029 13.8789 11.8221 13.869 11.3623C13.8483 10.9225 13.4918 10.5637 13.0485 10.5647C12.5944 10.5747 12.2389 10.9445 12.2399 11.4043ZM13.0554 15.892C12.6013 15.882 12.235 15.5032 12.234 15.0435C12.2241 14.5837 12.5884 14.2029 13.0426 14.1919H13.0525C13.5165 14.1919 13.8927 14.5707 13.8927 15.0405C13.8937 15.5102 13.5185 15.891 13.0554 15.892ZM8.17212 11.4203C8.19187 11.8801 8.56804 12.2389 9.02221 12.2189C9.46651 12.1979 9.82096 11.8181 9.80121 11.3583C9.79035 10.9085 9.42504 10.5587 8.98074 10.5597C8.52657 10.5797 8.17113 10.9605 8.17212 11.4203ZM9.02616 15.8471C8.57199 15.8671 8.1968 15.5082 8.17607 15.0485C8.17607 14.5887 8.53052 14.2089 8.98469 14.1879C9.42899 14.1869 9.79529 14.5367 9.80516 14.9855C9.82589 15.4463 9.47046 15.8261 9.02616 15.8471ZM4.10433 11.4553C4.12408 11.915 4.50025 12.2749 4.95442 12.2539C5.39872 12.2339 5.75317 11.8531 5.73243 11.3933C5.72256 10.9435 5.35725 10.5937 4.91196 10.5947C4.45779 10.6147 4.10334 10.9955 4.10433 11.4553ZM4.95837 15.8521C4.5042 15.8731 4.12901 15.5132 4.10828 15.0535C4.10729 14.5937 4.46273 14.2129 4.9169 14.1929C5.3612 14.1919 5.7275 14.5417 5.73737 14.9915C5.7581 15.4513 5.40365 15.8321 4.95837 15.8521Z" fill="white" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.calendar') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/users'}}">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.14 21.62C17.26 21.88 16.22 22 15 22H8.99998C7.77998 22 6.73999 21.88 5.85999 21.62C6.07999 19.02 8.74998 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 2H9C4 2 2 4 2 9V15C2 18.78 3.14 20.85 5.86 21.62C6.08 19.02 8.75 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62C20.86 20.85 22 18.78 22 15V9C22 4 20 2 15 2ZM12 14.17C10.02 14.17 8.42 12.56 8.42 10.58C8.42 8.60002 10.02 7 12 7C13.98 7 15.58 8.60002 15.58 10.58C15.58 12.56 13.98 14.17 12 14.17Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.58 10.58C15.58 12.56 13.98 14.17 12 14.17C10.02 14.17 8.41998 12.56 8.41998 10.58C8.41998 8.60002 10.02 7 12 7C13.98 7 15.58 8.60002 15.58 10.58Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.users') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'announcmnents'}}">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1783 16.5241L19.5521 3.01716C19.1579 1.54862 17.353 1.00759 16.2133 2.01629L13.9278 4.039C11.3845 6.28991 8.35111 7.91891 5.06775 8.79698C2.31938 9.53199 0.690561 12.3597 1.42698 15.1028C2.16341 17.8459 4.99058 19.4819 7.73896 18.7469C11.0223 17.8688 14.4654 17.7657 17.7956 18.4459L20.7882 19.0571C22.2806 19.3619 23.5725 17.9926 23.1783 16.5241Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.53931 8.09998L11.7001 23.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.announcments') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/notifications'}}">
              <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.8251 19.1312L21.186 14.2589V9.18582C21.186 4.12075 17.0652 0 12.0002 0C6.93509 0 2.81435 4.12075 2.81435 9.18582V14.2589L0.175114 19.1312C0.0554271 19.3521 -0.00481165 19.6003 0.000300254 19.8515C0.00541215 20.1028 0.0756993 20.3483 0.204274 20.5642C0.33285 20.7801 0.515302 20.9589 0.733755 21.083C0.952207 21.2072 1.19917 21.2724 1.45043 21.2724H6.70418C6.6898 21.4317 6.682 21.5927 6.682 21.7559C6.682 23.1663 7.2423 24.519 8.23964 25.5164C9.23697 26.5137 10.5897 27.074 12.0001 27.074C13.4106 27.074 14.7632 26.5137 15.7606 25.5164C16.7579 24.519 17.3182 23.1663 17.3182 21.7559C17.3182 21.5927 17.3104 21.4317 17.296 21.2724H22.5498C22.801 21.2724 23.0479 21.2071 23.2664 21.0829C23.4848 20.9588 23.6672 20.78 23.7958 20.5642C23.9243 20.3483 23.9946 20.1027 23.9997 19.8515C24.0048 19.6004 23.9446 19.3521 23.8249 19.1312H23.8251ZM15.3844 21.7559C15.3848 22.221 15.2893 22.6811 15.1039 23.1077C14.9185 23.5342 14.6472 23.9179 14.3069 24.2349C13.9666 24.552 13.5646 24.7954 13.126 24.9501C12.6875 25.1049 12.2217 25.1675 11.7578 25.1342C11.2939 25.1009 10.8419 24.9723 10.4299 24.7565C10.0179 24.5408 9.65482 24.2424 9.3633 23.88C9.07178 23.5176 8.85807 23.0991 8.73552 22.6504C8.61297 22.2018 8.58421 21.7327 8.65103 21.2724H15.3492C15.3725 21.4325 15.3842 21.5941 15.3844 21.7559ZM2.26211 19.3386L4.7482 14.749V9.18582C4.7482 7.26248 5.51225 5.41792 6.87225 4.05791C8.23226 2.6979 10.0768 1.93386 12.0002 1.93386C13.9235 1.93386 15.7681 2.6979 17.1281 4.05791C18.4881 5.41792 19.2521 7.26248 19.2521 9.18582V14.749L21.7381 19.3386H2.26211Z" fill="white" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.notifications') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/settings'}}">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4022 11.5801C18.7599 11.7701 19.0358 12.0701 19.23 12.3701C19.6081 12.9901 19.5775 13.7501 19.2096 14.4201L18.4942 15.6201C18.1161 16.2601 17.4109 16.6601 16.6853 16.6601C16.3277 16.6601 15.9291 16.5601 15.6021 16.3601C15.3364 16.1901 15.0298 16.1301 14.7027 16.1301C13.691 16.1301 12.8428 16.9601 12.8121 17.9501C12.8121 19.1001 11.8719 20.0001 10.6967 20.0001H9.3068C8.12133 20.0001 7.18113 19.1001 7.18113 17.9501C7.16069 16.9601 6.31247 16.1301 5.30073 16.1301C4.96348 16.1301 4.6569 16.1901 4.40141 16.3601C4.07438 16.5601 3.6656 16.6601 3.31813 16.6601C2.58232 16.6601 1.87717 16.2601 1.49905 15.6201L0.793898 14.4201C0.415773 13.7701 0.395334 12.9901 0.773459 12.3701C0.936972 12.0701 1.24356 11.7701 1.59102 11.5801C1.87717 11.4401 2.06112 11.2101 2.23486 10.9401C2.74584 10.0801 2.43925 8.95012 1.57059 8.44012C0.558848 7.87012 0.231821 6.60012 0.814337 5.61012L1.49905 4.43012C2.09178 3.44012 3.35901 3.09012 4.38097 3.67012C5.27007 4.15012 6.42488 3.83012 6.94608 2.98012C7.10959 2.70012 7.20157 2.40012 7.18113 2.10012C7.16069 1.71012 7.27311 1.34012 7.46728 1.04012C7.8454 0.420122 8.53012 0.0201221 9.27614 0.00012207H10.7171C11.4734 0.00012207 12.1581 0.420122 12.5362 1.04012C12.7201 1.34012 12.8428 1.71012 12.8121 2.10012C12.7917 2.40012 12.8837 2.70012 13.0472 2.98012C13.5684 3.83012 14.7232 4.15012 15.6225 3.67012C16.6342 3.09012 17.9117 3.44012 18.4942 4.43012L19.1789 5.61012C19.7716 6.60012 19.4446 7.87012 18.4227 8.44012C17.554 8.95012 17.2474 10.0801 17.7686 10.9401C17.9321 11.2101 18.1161 11.4401 18.4022 11.5801ZM7.10959 10.0101C7.10959 11.5801 8.40748 12.8301 10.012 12.8301C11.6164 12.8301 12.8837 11.5801 12.8837 10.0101C12.8837 8.44012 11.6164 7.18012 10.012 7.18012C8.40748 7.18012 7.10959 8.44012 7.10959 10.0101Z" fill="white" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.setting') </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link logout_li" href="logout.php">
              <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.7907 5.75V3.375C13.7907 2.74511 13.5457 2.14102 13.1096 1.69562C12.6734 1.25022 12.0819 1 11.4651 1H3.32558C2.7088 1 2.11728 1.25022 1.68115 1.69562C1.24502 2.14102 1 2.74511 1 3.375V17.625C1 18.2549 1.24502 18.859 1.68115 19.3044C2.11728 19.7498 2.7088 20 3.32558 20H11.4651C12.0819 20 12.6734 19.7498 13.1096 19.3044C13.5457 18.859 13.7907 18.2549 13.7907 17.625V15.25" stroke="#452C88" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.72095 10.5H21M21 10.5L17.5116 6.9375M21 10.5L17.5116 14.0625" stroke="#452C88" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="menu-title ml-2"> @lang('lang.logout') </span>
            </a>
          </li>

        </ul>
      </nav>