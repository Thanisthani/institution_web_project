<!DOCTYPE html>
<html>
    <head>
        <title>Express</title>
        <link rel="stylesheet" type="text/css" href="/css/style-index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.gooleapis.com/css? family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>
    <body>
        <section id="banner">
                <div class="signup">
                  <a href="{{url("/signup")}}" class="signupbtn">Sign Up </a><span class="signupbtn">|</span>
                    <a href="{{url("/signin")}}" class="signupbtn">Log In</a>

                </div>
            <div class="banner-text">
                <h1>Express</h1>
                <p>Bright your Future With Us</p>
                <div class="banner-btn">
                    <a href="#service"><span></span>Find Out</a>
                    <a href="#feature"><span></span>Read more</a>
                </div>
            </div>
        </section>
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#feature">About Us</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="/images/index-img/menu01.png" id="menu">
        </div>

        <!--features-->

        <section id="feature">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>About Us</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experienced Staff</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="feature-text">
                            <p>Express Pvt.Ltd is a institution based on Rathnapura, Sri Lanka.Our intention is Student Satisfaction by providing education with cost effective.</p>
                        </div>
                    </div>
                    <h1>Enroll Online</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="feature-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                    <h1>Affordable Cost</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-inr"></i>
                        </div>
                        <div class="feature-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <img src="/images/index-img/teacher.jpg">
                </div>
            </div>
        </section>

        <!--Service-->

        <section id="service">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provide Better</h1>
            </div>
            <div class="service-box">
                <div class="single-service">
                    <img src="/images/index-img/card1.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Online Learning</h3>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="/images/index-img/card2.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Consulting</h3>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="/images/index-img/card3.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Blog</h3>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="/images/index-img/card4.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Demonstration</h3>
                        <hr>
                        <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial-->
        <section id="testimonial">
            <div class="title-text">
                <p>TESTIMONIAL</p>
                <h1>What our students Says</h1>
            </div>
            <div class="testimonial-row">
                <div class="testimonial-col">
                    <div class="user">
                        <img src="/images/index-img/img-1.jpg">
                        <div class="user-info">
                            <h4>Ken Norman<i class="fa fa-twitter"></i></h4>
                            <small>@kennorman</small>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="/images/index-img/img-2.jpg">
                        <div class="user-info">
                            <h4>Liara Karian<i class="fa fa-twitter"></i></h4>
                            <small>@liarakarian</small>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="/images/index-img/img-3.jpg">
                        <div class="user-info">
                            <h4>Ricky Danial<i class="fa fa-twitter"></i></h4>
                            <small>@rickydanial</small>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
            </div>
        </section>

        <!--footer-->
        <section id="footer">
            <img src="/images/index-img/footer-img.png" class="footer-img">
            <div class="title-text">
                <p>CONTACT</p>
                <h1>Visit Today</h1>
            </div>
            <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>Sabaragamuwa University of Sri Lanka, Sri Lanka<i class="fa fa-map-marker"></i></p>
                <p>expressinstitution@gmail.com<i class="fa fa-paper-plane"></i></p>
                <p>+94 771234567<i class="fa fa-phone"></i></p>
            </div>
            </div>

            <div class="social-links">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-youtube"></i>
                <p><b>@ 2021 Express PVT(LTD) | All Rights Are Reserved</b></p>
            </div>
        </section>
        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")

            sideNav.style.left = "-250px";

            menuBtn.onclick = function(){
                if(sideNav.style.left=="-250px"){
                sideNav.style.left = "0";
                menu.src = "close01.png";
                }
                else{
                    sideNav.style.left = "-250px";
                    menu.src = "menu01.png";
                }
            }
            var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
        </script>
    </body>
</html>
