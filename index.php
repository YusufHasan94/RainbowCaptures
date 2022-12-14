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
    <link rel="shortcut icon" href="picture/x-icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Rainbow Captures</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="picture/logo-dark.png" alt="" />
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
            </ul>
            <div class="login bookingPart">
              <a href="html/bookingform.php" id="booked">Book Me</a>
              <a href="html/signinform.php" id="signin">Sign In</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="slider section">
        <div
          id="carouselExampleSlidesOnly"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="picture/pic016.jpg"
                class="d-block w-100"
                alt="pic016"
              />
            </div>
            <div class="carousel-item">
              <img
                src="picture/pic018.jpg"
                class="d-block w-100"
                alt="pic018"
              />
            </div>
            <div class="carousel-item">
              <img
                src="picture/DSC_1065.jpg"
                class="d-block w-100"
                alt="DSC_1065"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="category section">
        <div class="container">
          <div class="cateItem Gitem1">
            <div>
              <h1 class="contentTitle">Discover Our Works</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptas alias suscipit, assumenda dignissimos harum maxime!
              </p>
              <a href="html/creativeWork.php">View More...</a>
            </div>
          </div>
          <div class="cateItem Gitem3">
            <div>
              <img src="picture/DSC_0708.jpg" alt="" />
              <span>Casual</span>
            </div>
          </div>
          <div class="cateItem Gitem4">
            <div>
              <img src="picture/DSC_8201.jpg" alt="" />
              <span>Engagement</span>
            </div>
          </div>
          <div class="cateItem Gitem5">
            <div>
              <img src="picture/pic06.jpg" alt="" />
              <span>Wedding</span>
            </div>
          </div>
        </div>
      </section>
      <section class="About section" id="about">
        <div class="container">
          <div class="leftSide">
            <div>
              <h1 class="contentTitle">About Us</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam itaque alias eius eos, illum harum repudiandae,
                deleniti aliquid eligendi labore autem iure dolores. Vel,
                deleniti? Ducimus soluta vero cum magnam?
              </p>
              <a href="html/about.php"
                >Learn more <i class="fa-solid fa-arrow-right-long"></i
              ></a>
            </div>
          </div>
          <div class="rightSide">
            <div>
              <img src="picture/host.jpg" alt="host" />
            </div>
          </div>
        </div>
      </section>
      <section class="gallery section" id="gallery">
        <div class="container">
          <div class="galleryLeft">
            <div class="demoImg">
              <div class="commonContainer img1Con">
                <div>
                  <img src="picture/DSC_3853.jpg" alt="" />
                </div>
              </div>
              <div class="commonContainer img2Con">
                <div>
                  <img src="picture/DSC_9878.jpg" alt="" />
                </div>
              </div>
              <div class="commonContainer img3Con">
                <img src="picture/pic03.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="galleryRight">
            <div>
              <h1 class="contentTitle">Photo Book</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cupiditate, quis quam ratione natus iste assumenda adipisci
                totam soluta ipsum voluptate architecto nobis error, possimus
                necessitatibus provident laborum delectus repellat obcaecati!
              </p>
              <a href="html/photoBook.php"
                >View All Products <i class="fa-solid fa-arrow-right-long"></i
              ></a>
            </div>
          </div>
        </div>
      </section>
      <section class="services section" id="packages">
        <div class="container">
          <div class="sectionTitle">
            <h1 class="contentTitle">Pricing</h1>
          </div>
          <div class="sectionContent">
            <div class="">
              <div>
                <h1 class="serviceTitle">EXCLUSIVE WEDDING COMBO</h1>
              </div>
              <div>
                <p>
                  1 top photographer with 1 associate photographer and also 1
                  cinematographer. Capture full event with unlimited capture.
                  All picture and videos are given in a gifted pendrive.
                </p>
              </div>
              <div class="bookingPrice">
                <h3>BDT 25,500</h3>
                <a href="html/bookingform.php" class="BookingBtn"
                  >Book Now <i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
            <hr />
            <div class="">
              <div>
                <h1 class="serviceTitle">STANDARD WEDDING COMBO</h1>
              </div>
              <div>
                <p>
                  1 photographer with 1 associate photographer and also 1
                  cinematographer. Capture only 6 hours with unlimited capture.
                  All picture and videos are given in a gifted pendrive.
                </p>
              </div>
              <div class="bookingPrice">
                <h3>BDT 15,500</h3>
                <a href="html/bookingform.php" class="BookingBtn"
                  >Book Now <i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
            <hr />
            <div class="">
              <div>
                <h1 class="serviceTitle">CASUAL EVENTS</h1>
              </div>
              <div>
                <p>
                  1 photographer with 1 associate photographer. Capture only 6
                  hour with unlimited capture. All picture and videos are given
                  in a gifted pendrive.
                </p>
              </div>
              <div class="bookingPrice">
                <h3>BDT 12,500</h3>
                <a href="html/bookingform.php" class="BookingBtn"
                  >Book Now <i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
            <hr />
            <div class="">
              <div>
                <h1 class="serviceTitle">CASUAL POTRAIT</h1>
              </div>
              <div>
                <p>
                  1 photographer with associate. Capture full event with
                  unlimited capture. Capture only 4 hour with unlimited capture.
                  All picture and videos are given in a gifted pendrive.
                </p>
              </div>
              <div class="bookingPrice">
                <h3>BDT 8,500</h3>
                <a href="html/bookingform.php" class="BookingBtn"
                  >Book Now <i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="words section">
        <div class="container">
          <div>
            <h1 class="contentTitle" style="text-align: center">Sweet Words</h1>
          </div>
          <div style="padding: 10px">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="wordsContainer">
                    <div class="left">
                      <img src="picture/DSC_1236.jpg" alt="" />
                    </div>
                    <div class="right">
                      <h1>Mr A & Mrs A</h1>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum alias facere quasi aut. Cupiditate quo non,
                        exercitationem minus esse a assumenda maxime dolorum?
                        Accusamus sit quidem nam! Quos, dolore officiis!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="wordsContainer">
                    <div class="left">
                      <img src="picture/pic06.jpg" alt="" />
                    </div>
                    <div class="right">
                      <h1>Mr B & Mrs B</h1>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum alias facere quasi aut. Cupiditate quo non,
                        exercitationem minus esse a assumenda maxime dolorum?
                        Accusamus sit quidem nam! Quos, dolore officiis!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="wordsContainer">
                    <div class="left">
                      <img src="picture/pic03.jpg" alt="" />
                    </div>
                    <div class="right">
                      <h1>Mr C & Mrs C</h1>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum alias facere quasi aut. Cupiditate quo non,
                        exercitationem minus esse a assumenda maxime dolorum?
                        Accusamus sit quidem nam! Quos, dolore officiis!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
              >
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
              >
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div></div>
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
