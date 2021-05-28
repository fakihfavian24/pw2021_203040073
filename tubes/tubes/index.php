<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$laptop = query("SELECT * FROM laptop");

if (isset($_POST["cari"])) {
  $laptop = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="css/styleuxx.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>centralstore</title>
</head>

<body>

  <!-- Navbar -->

  <div class="navbar-fixed">

    <nav class="grey darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Centralstore</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <form action="" method="post">

                <input type="text" name="keyword" autofocus style="color: white;" placeholder="Type to search" autocomplete="off">
                <input type="hidden" name="cari">

              </form>
            </li>
            <li><a href="../../index.php" class="tbl">Home</a></li>
            <li>
              <a href="php/login.php" class="waves-effect waves-light btn">Login</a>
            </li>

          </ul>
        </div>
      </div>

    </nav>
  </div>

  <ul class="sidenav" id="mobile-nav">
    <li><a href="../../index.php">Home</a></li>
    <li><a href="#">Our Services</a></li>
    <li><a href="#">Product</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="php/login.php" class="waves-effect waves-light btn">Login</a></li>

    <li>
      <form action="" method=" post">

        <input type="text" name="keyword" autofocus placeholder="Type to search" autocomplete="off">
        <input type="hidden" name="cari">

      </form>
    </li>

  </ul>

  <!-- akhir Navbar -->

  <div class="medsos">
    <a href="#"><i class="fab fa-facebook-f"> Centralstore</i></a>
    <a href="#"><i class="fab fa-twitter"> @Centralstore</i></a>
    <a href="#"><i class="fab fa-instagram"> @Centralstore_24</i></a>

  </div>



  <!-- Slider -->

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/13.jpeg">
        <!-- <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div> -->
      </li>
      <li>
        <img src="img/slider/11.jpg">
        <!-- <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div> -->
      </li>
    </ul>
  </div>

  <!-- akhir Slider -->

  <!-- Our Services -->
  <div class="services-section">
    <div class="inner-width">
      <h1 class="section-title">Our Services</h1>
      <div class="border"></div>
      <div class="services-container">

        <div class="service-box">
          <div class="service-icon">
            <i class="fas fa-laptop"></i>
          </div>
          <div class="service-title">Laptop</div>
          <div class="service-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, recusandae?
          </div>
        </div>

        <div class="service-box">
          <div class="service-icon">
            <i class="fab fa-servicestack"></i>
          </div>
          <div class="service-title">Services</div>
          <div class="service-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, recusandae?
          </div>
        </div>

        <div class="service-box">
          <div class="service-icon">
            <i class="fab fa-android"></i>
          </div>
          <div class="service-title">Android</div>
          <div class="service-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, recusandae?
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Our Services -->

  <h4 class="center">PRODUCT</h4>


  <div class="input">
    <form action="" method="post">

      <input type="text" name="keyword" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
      <button type="submit" name="cari"><i class="Tiny material-icons tbll">search</i></button>

    </form>
  </div>

  <!-- Table -->
  <br>
  <div class="font">
    <div class="container mt-3 mb-3 text-center">
      <table class="table table-bordered table-hover highlight - centered white">
        <thead>
          <tr class="teal">
            <th scope="col">No</th>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($laptop)) : ?>
            <tr>
              <td colspan="7">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
          <?php else : ?>
            <?php foreach ($laptop as $lp => $l) : ?>
              <tr>
                <td><?= $lp + 1 ?></td>
                <td>
                  <img src="assets/img/<?= $l["picture"]; ?>">
                </td>
                <td><?= $l["name"]; ?></td>
                <td>
                  <p><a href="php/detail.php?id=<?= $l['id'] ?>" class="tbl-biru" <?= $l["name"] ?>>Detail</a></p>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>

      </table>
    </div>
  </div>


  <br>
  <!-- akhir Table -->

  <!-- Contact Us -->
  <div class="containerUs">
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Padang, Sumatera Barat, Indonesia</div>
        <div><i class="fas fa-envelope"></i>centralstore@gmail.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  </div>
  <!-- akhir Contact Us -->

  <footer class="black white-text center">
    <p>2021 All Right Reserved by Centralstore.</p>
  </footer>







  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });
  </script>
  <!-- </body> -->
</body>

</html>