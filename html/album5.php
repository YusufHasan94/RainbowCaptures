<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/b11d2abc63.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      rel="shortcut icon"
      href="../picture/x-icon.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Rainbow Captures</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../picture/logo-dark.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="photoBook.php">Gallery</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
            </ul>
            <div class="login bookingPart">
              <a href="bookingform.php" id="booked">Book Me</a>
              <a href="signinform.php" id="signin">Sign In</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="photoBookSec">
        <div class="contitleArea">
          <h1 class="contentTitle">Album 5</h1>
        </div>
        <div class="photoContainer container">
          <div class="container1 albumContainer">
            <img src="../picture/DSC_9878.jpg" alt="" />
          </div>
          <div class="container2 albumContainer">
            <img src="../picture/DSC_9982.jpg" alt="" />
          </div>
          <div class="container3 albumContainer">
            <img src="../picture/newpic018.jpg" alt="" />
            <img src="../picture/pic02.jpg" alt="" />
          </div>
          <div class="container4 albumContainer">
            <img src="../picture/pic01.jpg" alt="" />
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footerContainer">
        <div class="footerItem item1">
          <h3>Address</h3>
          <p>Rajshahi-6207, Bangladesh</p>
        </div>
        <div class="footerItem item2">
          <h3>Links</h3>
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Gallery</a>
            </li>
            <li>
              <a href="#">Packages</a>
            </li>
            <li>
              <a href="#">About Us</a>
            </li>
          </ul>
        </div>
        <div class="footerItem item3">
          <h3>Contacts</h3>
          <ul>
            <li>
              <a href="#">
                <i class="fa-solid fa-envelope"></i>
                rainbow@gmai.com
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa-solid fa-phone"></i>
                017********
              </a>
            </li>
          </ul>
        </div>
        <div class="footerItem item4">
          <h3>Follow Us</h3>
          <ul>
            <li>
              <a href="https://www.instagram.com/rainbowcapturesbd/?fbclid=IwAR3ZBMyb9AvbS50yVB7-6l9AXKnxzRnh0eiQzMXyBR5VZPR-6045ph8rRrg"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="https://www.facebook.com/groups/4829171810533450"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="https://www.youtube.com/c/NabiunSizan/featured"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
        </div>
        <div class="footerItem item5">
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58148.817666099916!2d88.57296192801957!3d24.370826661691076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbef869365a513%3A0x490a564a67eeaef4!2sRainbow%20Captures!5e0!3m2!1sen!2sbd!4v1665397089832!5m2!1sen!2sbd"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/script.js"></script>
  </body>
</html>
