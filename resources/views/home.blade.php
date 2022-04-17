<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style-home.css" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Home</title>
  </head>
  <body>

<!--Before navbar-->

<div class="header">
  <img src="images/home-img/call.png" class="header-img">
      <div class="header-text">
        INQUIRIES?
      </div>
      <a href="#" class="header-contact-btn">+94771234567</a>
      <div class="header-social-links">
        <a href="#"><i class="fab fa-facebook-f header-social-btn"></i></a>
        <a href="#"><i class="fab fa-twitter header-social-btn"></i></a>
        <a href="#"><i class="fab fa-instagram header-social-btn"></i></a>
        <a href="#"><i class="fab fa-linkedin-in header-social-btn"></i></a>
      </div>
      <a class="header-enroll" href="#">
        Cretificate verification
      </a>

      <a href="{{url("/contactus")}}" class="header-message">Send a message </a>
      <a href="{{url("/signin")}}" class="header-logout">Log Out </a>
</div>

    <!--Navbar-->
<div class="navbar-div">

    <div class="navbar">
      <img src="images/home-img/expresslogo.png" class="nav-img" alt="logo">
  <a class="nav-link nav-link-ltr" href="{{url("/home")}}">HOME</a>
  <a class="nav-link nav-link-ltr" href="{{url("/course")}}">COURSE</a>
  <a class="nav-link nav-link-ltr" href="{{url("/library")}}">LIBRARY</a>
  <a class="nav-link nav-link-ltr" href="{{url("/blog")}}">BLOG</a>
  <a class="nav-link nav-link-ltr" href="#">ABOUT US</a>
  <button type="button" class="nav-btn">Enroll Now</button>
</div>
</div>
    <!--
    <div>
    <nav class="navbar navbar-expand-lg   nav navbar-style">
    <div class="container-fluid">
      <a class="navbar-brand navbar-text" href="#">Express</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link navbar-active " aria-current="page" href="../Home page/homePage.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-text" href="../Course/course.html">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-text" href="../Library/library.html">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-text" href="../Blogs/blog.html">Blogs & Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-text" href="../Contatct Us/contactUs.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

-->
  <!--Carosual-->
  <!---->

<div class="carousal-all">
  <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active" data-bs-interval="2500">
      <img src="images/home-img/slider3.jpg" class="d-block w-100 carousel-container" alt="Students">
    </div>
    <div class="carousel-item" data-bs-interval="2500">
      <img src="images/home-img/slider2.jpg" class="d-block w-100 carousel-container " alt="Students">
    </div>
    <div class="carousel-item"  data-bs-interval="2500">
      <img src="images/home-img/slider4.jpg" class="d-block w-100 carousel-container" alt="Students">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- Section welcome-->
<section id="welcome" >
  <div class="row">
  <div class="col-md-6">
    <img src="images/home-img/quote.JPG" class="quote_img" alt ="quote"></img>
  </div>
  <div class="col-md-6 welcome-para">
    <h1 class="welcome-text">Welcome to Something</h1><br>
    <h3 class="welcome-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>

<br>
    <h3 class="welcome-content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</h3>

   </div>

  </div>
</section>

<!--News-->

<section id="news">
  <h1 class="news-heading">News feed</h1>
  <br>
  <div class="row">

    <div class="col-md-4">
      <img src="images/home-img/newsfeed1.jpg" class="rounded image-fluid news-img" alt="card 1">
      <h3 class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,dolore magna aliqua. Ut enim ad minim</h3>
      <h4 class="news-update">Updated July 22</h4>
    </div>

    <div class="col-md-4">
    <img src="images/home-img/newsfeed2.jpg" class="rounded news-img" alt="card 2">
      <h3 class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor </h3>
      <h4 class="news-update">Updated Aug 04</h4>
    </div>

    <div class="col-md-4">
    <img src="images/home-img/newsfeed3.jpg" class="rounded news-img" alt="card 3">
      <h3 class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </h3>
      <h4 class="news-update">Updated Jun 22</h4>
    </div>
  </div>
  <center>
  <button type="button" class="btn bg-light" style="color:#009688" >More news</button>
</center>

</section>

<!--list-->
<section id="list">
  <div class="row">

    <div class="col-md-3">
      <h1 class="list-count">15000+</h1>
      <h3 class="list-title">Learners & counting</h3>
    </div>

    <div class="col-md-3">
      <h1 class="list-count">10+</h1>
      <h3 class="list-title">Total courses</h3>
    </div>

    <div class="col-md-3">
      <h1 class="list-count">20+</h1>
      <h3 class="list-title">Instructors</h3>
    </div>

    <div class="col-md-3">
      <h1 class="list-count">90%</h1>
      <h3 class="list-title">Successful Students</h3>
    </div>
  </div>

</section>



<!--footer-->
<footer class="footer">
   <div class="footer-container">
    <div class="footer-row justify-content-center">
      <div class="footer-col">
        <h4>  company</h4>
        <ul>
          <li><a href="#">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="#">privacy policy</a></li>
          <li><a href="#">programmes</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>  get help</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact US</a></li>
          
        </ul>
      </div>
      <div class="footer-col">
        <h4>  student life</h4>
        <ul>
          <li><a href="#">Career guidence</a></li>
          <li><a href="#">blog</a></li>
          <li><a href="#">consulting</a></li>
          
        </ul>
      </div>
      <div class="footer-col">
        <h4>  follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
   </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
