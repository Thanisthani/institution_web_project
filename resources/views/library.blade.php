<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style-library.css" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Library</title>
  </head>
  <body>

    <!--Before navbar-->

    <div class="header">
      <img src="images/library-img/call.png" class="header-img">
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
    </div>

        <!--Navbar-->
    <div class="navbar-div">

        <div class="navbar">
          <img src="images/library-img/expresslogo.png" class="nav-img" alt="logo">
          <a class="nav-link nav-link-ltr" href="{{url("/home")}}">HOME</a>
          <a class="nav-link nav-link-ltr" href="{{url("/course")}}">COURSE</a>
          <a class="nav-link nav-link-ltr" href="{{url("/library")}}">LIBRARY</a>
          <a class="nav-link nav-link-ltr" href="{{url("/blog")}}">BLOG</a>
      <a class="nav-link nav-link-ltr" href="#">ABOUT US</a>
      <button type="button" class="nav-btn">Enroll Now</button>
    </div>
    </div>


    <!--Heading-->
    <h1 class="heading"></h1>
    <div class="cat">
      <button type="button" class="cat-btn-active" >All</button>
      <button type="button" class="cat-btn-disabled"  >Web design</button>
      <button type="button" class="cat-btn-disabled" >Data science</button>
      <button type="button" class="cat-btn-disabled" >Mobile app development</button>
    </div>

    <!--books-->
    <div class="row justify-content-center">
      <div class="col-md-2 course">
        <div class="card  course-card">
    <img src="images/library-img/book1.jpg" class="card-img-top course-img" alt="course1">
    <div class="course-body">
      <hr class="solid">
      <p class="card-text">
        <h3 class="course-title">Learn android in 24 hours <br></h3>
        <h6 class="course-star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </h6>
        <span class="fa fa-book course-duration"> </span> <span class="course-des"> Author : Upskill publication</span>

      </p>
    </div>
  </div>
      </div>

      <div class="col-md-2 course">
        <div class="card  course-card">
      <img src="images/library-img/book2.jpg" class="card-img-top course-img" alt="course1">
      <div class="course-body">
      <hr class="solid">
      <p class="card-text">
        <h3 class="course-title">Modern Fullstack development</h3>
        <h6 class="course-star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </h6>
        <span class="fa fa-book course-duration"> </span> <span class="course-des"> Author : Frank zammetti</span>

      </p>
      </div>
      </div>
      </div>
      <div class="col-md-2 course">
        <div class="card  course-card">
    <img src="images/library-img/book3.jpg" class="card-img-top course-img" alt="course1">
    <div class="course-body">
      <hr class="solid">
      <p class="card-text">
        <h3 class="course-title">Digital fortress</h3>
        <h6 class="course-star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </h6>
        <span class="fa fa-book course-duration"> </span> <span class="course-des"> Author : Dan brown</span>

      </p>
    </div>
  </div>
      </div>
      <div class="col-md-2 course">
        <div class="card  course-card">
    <img src="images/library-img/book4.jpg" class="card-img-top course-img" alt="course1">
    <div class="course-body">
      <hr class="solid">
      <p class="card-text">
        <h3 class="course-title">Human compatible</h3>
        <h6 class="course-star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </h6>
        <span class="fa fa-book course-duration"> </span> <span class="course-des"> Author : Stuart Russell</span>

      </p>
    </div>
  </div>
      </div>

    </div>
    <center>
    <button type="button" class="btn btn-dark">Load more</button>
  </center>
  <br>


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
