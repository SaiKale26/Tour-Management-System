<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// Hardcode BASEURL for localhost/wooxtravel
$BASEURL = "http://localhost/wooxtravel";


if (!defined('ADMINURL')) {
  define('ADMINURL', $BASEURL . "/admin-panel");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

  <!-- Project / Template CSS -->
  <link rel="stylesheet" href="<?php echo $BASEURL; ?>/assets/css/animate.css" />
  <link rel="stylesheet" href="<?php echo $BASEURL; ?>/assets/css/flex-slider.css" />
  <link rel="stylesheet" href="<?php echo $BASEURL; ?>/assets/css/fontawesome.css" />
  <link rel="stylesheet" href="<?php echo $BASEURL; ?>/assets/css/owl.css" />
  <link rel="stylesheet" href="<?php echo $BASEURL; ?>/assets/css/templatemo-woox-travel.css" />

  <!-- Admin panel specific CSS -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>/styles/style.css" />
</head>
<body>
<div id="wrapper">
  <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo ADMINURL; ?>">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
              aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <?php if(isset($_SESSION['adminname'])): ?>
          <ul class="navbar-nav side-nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>/admins/admins.php">Admins</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>/countries-admins/show-country.php">Countries</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>/cities-admins/show-cities.php">Cities</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>/bookings-admins/show-bookings.php">Bookings</a></li>
          </ul>
        <?php endif; ?>

        <ul class="navbar-nav ml-md-auto d-md-flex">
          <?php if(!isset($_SESSION['adminname'])): ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>/admins/login-admins.php">Login</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo ADMINURL; ?>">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo htmlspecialchars($_SESSION['adminname']); ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo ADMINURL; ?>/admins/logout.php">Logout</a>
              </div>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
