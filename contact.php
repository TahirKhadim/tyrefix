<?php


include("connection.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>I Fix Tyre - Conatct Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- call svg Styling -->
  <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");

    @-webkit-keyframes come-in {
      0% {
        -webkit-transform: translatey(100px);
        transform: translatey(100px);
        opacity: 0;
      }

      30% {
        -webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
      }

      70% {
        -webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
      }

      100% {
        -webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
        opacity: 1;
      }
    }

    @keyframes come-in {
      0% {
        -webkit-transform: translatey(100px);
        transform: translatey(100px);
        opacity: 0;
      }

      30% {
        -webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
      }

      70% {
        -webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
      }

      100% {
        -webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
        opacity: 1;
      }
    }




    .floating-container {
      z-index: 100;
      position: fixed;
      width: 100px;
      height: 100px;
      bottom: 0;
      right: 0;
      margin: 35px 25px;
    }

    .floating-container:hover {
      height: 300px;
    }

    .floating-container:hover .floating-button {
      box-shadow: 0 10px 25px rgba(40, 40, 41, 0.6);
      -webkit-transform: translatey(5px);
      transform: translatey(5px);
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .floating-container:hover .element-container .float-element:nth-child(1) {
      -webkit-animation: come-in 0.4s forwards 0.2s;
      animation: come-in 0.4s forwards 0.2s;
    }

    .floating-container:hover .element-container .float-element:nth-child(2) {
      -webkit-animation: come-in 0.4s forwards 0.4s;
      animation: come-in 0.4s forwards 0.4s;
    }

    .floating-container:hover .element-container .float-element:nth-child(3) {
      -webkit-animation: come-in 0.4s forwards 0.6s;
      animation: come-in 0.4s forwards 0.6s;
    }

    .floating-container .floating-button {
      position: absolute;
      width: 70px;
      height: 70px;
      background: #00BD56;
      bottom: 0;
      border: 3px solid rgb(249, 249, 249);
      border-radius: 50%;
      left: 0;
      right: 0;
      margin: auto;
      color: white;
      line-height: 65px;
      text-align: center;
      font-size: 23px;
      z-index: 100;

      cursor: pointer;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .floating-container .float-element {
      position: relative;
      display: block;
      border-radius: 50%;

      width: 50px;
      height: 50px;
      margin: 15px auto;
      color: white;
      font-weight: 500;
      text-align: center;
      line-height: 50px;
      z-index: 0;
      opacity: 0;
      -webkit-transform: translateY(100px);
      transform: translateY(100px);
    }

    .floating-container .float-element .material-icons {
      vertical-align: middle;
      font-size: 16px;

    }

    .floating-container .float-element:nth-child(1) {
      background: #ffd903;

    }

    /* .fa {
      color: white;
    } */

    .dbox {
      display: grid;
    }

    textarea {
      float: left;
      width: 100%;
      height: auto;
    }

    .navbar li a {
      font-size: 2.4vh;
      color: #FFA1F5;
      font-weight: 500;


    }

    .navbar .button {
      font-size: 3vh;
    }

    .navbar-brand {
      font-size: 3vh;
    }

    .wrap .top a,
    span {
      color: black;
    }

    #background {
      width: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      height: 100%;

    }

    .dbox .icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #00bd56;
      margin: 0 auto;
      margin-bottom: 20px;
    }

    .text p a {
      color: #00BD56;
    }

    .text p {
      color: #00BD56;
    }

    button {
      background-color: #a71930;
      ;
    }

    .google-maps {
      position: relative;
      padding-bottom: 75%; // This is the aspect ratio
      height: 0;
      overflow: hidden;
    }

    .google-maps iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 100% !important;
    }
  </style>
  <!--  End call svg Styling -->

</head>

<body>
  <div class="wrap" style="background-color: lightgreen;">
    <div class=" container-fluid">
      <div class="row">
        <div class="col-lg-12  d-flex justify-content-end">
          <p class="mb-0 phone pl-md-2">
            <a href="Tel:+447916312844" class="mr-2 " style="font-size:3vh; color: black;"><span class=" fa fa-phone
          mr-1" style="color: black;"></span>
              +447916312844</a>
            <a href="mailto:contact@ifixtyre.com" style="font-size:3vh; color: black;"><span
                class="fa fa-paper-plane mr-1 " style="color: black;"></span>
              contact@ifixtyre.com</a>
          </p>
        </div>

      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-xl  navbar-dark  " style="background-color: #ff2d94;">
    <div class="container-fluid">
      <img src="pics/logo-removebg-preview.png" alt="pic" width="120px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active  " aria-current="page" href="index.html">Home</a>
          </li>

          <li class="nav-item"><a href="mobiletyrefitting.html" class="nav-link active  ">Mobile
              Tyre
              Fitting</a></li>

          <li class="nav-item"><a href="locking wheel nut.html" class="nav-link active ">Locking
              Wheel Nut Removal</a></li>
          <li class="nav-item "><a href="mobile tyre repair.html" class="nav-link active ">Mobile
              Tyre Repair</a></li>
          <li class="nav-item "><a href="breakdown.html" class="nav-link active ">Break-Down</a></li>
          <li class="nav-item "><a href="jumpstart.html" class="nav-link active ">Jump-Start</a></li>
          <li class="nav-item "><a href="service.html" class="nav-link active ">Services</a></li>

          <!--<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li> -->
          <li class="nav-item "><a href="contact.php" class="nav-link active ">Contact
              Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-wrap js-fullheight" style="background-image: url('pics/jumpstr.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="row  slider-text js-fullheight align-items-start justify-content-center" data-scrollax-parent="true">
        <div id="background">
          <div class="col-md-12 ftco-animate text-center  ">
            <h1 class="  para1 mt-3 py-5" style="color: #f5f8f9; text-shadow: 5px 5px 8px #070707;">
              "Contact Us" </h1>

            <button class="btn mt-4" style="background-color: #ff2d94; border: #ff2d94;"><a href="#readmore">Send
                Meassage</a></button>


          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- END nav -->


  <!-- social icons -->

  <div class="container mt-5">
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="dbox w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-map-marker text-white"></span>
          </div>
          <div class="text">
            <p><span>Address:</span>10-16 tiller road, canary wharf,
              E14 8PX</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dbox w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone text-white"></span>
          </div>
          <div class="text">
            <p><span>Phone:</span> <a href="tel:+447916312844">+447916312844</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dbox w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-paper-plane text-white"></span>
          </div>
          <div class="text">
            <p><span>Email:</span> <a href="mailto:contact@ifixtyre.com">contact@ifixtyre.com</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dbox w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-globe text-white"></span>
          </div>
          <div class="text">
            <p><span>Website:</span> <a href="info@ifixtyre.com">info@ifixtyre.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- form -->

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12 mt-3">
        <form action=" " method="POST">
          <h2 class="mt-3" id="readmore">We're Ready, Let's Talk.</h2>
          <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">

          </div>
          <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-2">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="name" aria-describedby="emailHelp" name="phone">

          </div>
          <div class="mb-2">
            <label for="model" class="form-label">Car Make & Model</label>
            <input type="model" class="form-control" id="model" name="car">
          </div>

          <div class="mb-2">
            <label for="model" class="form-label">Message</label>
            <textarea name="comments" id="para1">

</textarea>
          </div>

          <button name="register" class="btn mt-3" style="background:#ff2d94;">Send Message</button>
        </form>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 mt-5 pt-4">
        <div class="google-maps">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.927559908779!2d-0.027370024580980177!3d51.496196811523205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1695897928631!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>
    </div>
  </div>


  <!-- ambed map -->

  <div class="floating-container">
    <a href="Tel:+447916312844">
      <div class="floating-button"><svg style="height: 50px; width: 50px;" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24" id="Phone">
          <g data-name="Layer 2" fill="#ffd903" class="color000000 svgShape">
            <g data-name="phone" fill="#ffd903" class="color000000 svgShape">
              <rect width="10px" height="10px" opacity="0" fill="#ffd903" class="color000000 svgShape"></rect>
              <path
                d="M17.4 22A15.42 15.42 0 0 1 2 6.6 4.6 4.6 0 0 1 6.6 2a3.94 3.94 0 0 1 .77.07 3.79 3.79 0 0 1 .72.18 1 1 0 0 1 .65.75l1.37 6a1 1 0 0 1-.26.92c-.13.14-.14.15-1.37.79a9.91 9.91 0 0 0 4.87 4.89c.65-1.24.66-1.25.8-1.38a1 1 0 0 1 .92-.26l6 1.37a1 1 0 0 1 .72.65 4.34 4.34 0 0 1 .19.73 4.77 4.77 0 0 1 .06.76A4.6 4.6 0 0 1 17.4 22z"
                fill="#fff" class="color000000 svgShape"></path>
            </g>
          </g>
        </svg></div>
    </a>
    <div class="element-container">



    </div>
  </div>
  <!-- End Call SVG -->
  <footer class="footer" style="background-color: #00739e;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-md-12 mb-4 mb-md-0">
          <h2 class="footer-heading text-white">TyreFix</h2>
          <h6 class="text-white">"Revive, Refuel, and Roll - Your TyreFix Roadside Savior".</h6>
          <ul class="ftco-footer-social p-0">
            <li class="ftco-animate" style="background-color: #ffffff; border-radius: 50%;"><a
                href="https://twitter.com/home" data-toggle="tooltip" data-placement="top" title="Twitter"><span
                  class="fa fa-twitter" style="color: #00BD56; background-color:"></span></a></li>
            <li class="ftco-animate" style="background-color: #ffffff; border-radius: 50%;"><a
                href="https://www.facebook.com/profile.php?id=61552200209780" data-toggle="tooltip" data-placement="top"
                title="Facebook"><span class="fa fa-facebook" style="color: #00BD56;"></span></a></li>
            <li class="ftco-animate" style="background-color: #ffffff; border-radius: 50%;"><a
                href="https://www.instagram.com/ifixtyre/" data-toggle="tooltip" data-placement="top"
                title="Instagrm"><span class="fa fa-instagram" style="color: #00BD56;"></span></a></li>
            <li class="ftco-animate" style="background-color: #ffffff; border-radius: 50%;"><a
                href="https://www.linkedin.com/feed/" data-toggle="tooltip" data-placement="top" title="Linkedin"><span
                  class="fa fa-linkedin" style="color: #00BD56;"></span></a>
            </li>


          </ul>
        </div>

        <div class="col-md-4 col-lg-4 col-md-12 mb-4 mb-md-0">
          <h2 class="footer-heading text-white">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.html" class="py-2 d-block text-white">Home</a></li>

            <li><a href="contact.php" class="py-2 d-block text-white">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-4 col-md-12 mb-4 mb-md-0">
          <h2 class="footer-heading text-white">Where We Are?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon fa fa-map text-white"></span><span class="text text-white	"> 10-16
                  tiller
                  road,
                  canary wharf,
                  E14 8PX</span></li>
              <li><a href="tel:+447916312844"><span class="icon fa fa-phone text-white"></span><span
                    class="text text-white">+447916312844</span></a></li>
              <li><a href="#"><span class="icon fa fa-paper-plane text-white"></span><span
                    class="text text-white">info@ifixtyre.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="copyright" style="color: #ffffff;">
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> I Fix Tyre All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



</body>

</html>
<?php

if (isset($_POST["register"])) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $car = mysqli_real_escape_string($con, $_POST['car']);
  $comments = $_POST['comments'];


  $query = "INSERT INTO tyre1(`name`, `email`, `phone`, `model`, `message` ) VALUES ('$name','$email','$phone','$car', '$comments')";
  $data = mysqli_query($con, $query);

  if ($data) {
    //Create an instance; passing `true` enables exceptions
    {
      $to = "contact@ifixtyre.com";
      $subject = "test mail";
      $message = " echo $name, $email,$phone, $car, $comments";
      $from = "contact@ifixtyre.com";
      $headers = "From: $from";

      mail($to, $subject, $message, $headers);
    }
    echo "<script> alert('Thank You for Contacting Us')</script>";
  } else {
    // echo " Something went wrong";
  }
} else {
  // echo "data not saved";
}
