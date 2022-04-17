<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us Page Design</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-conatctus.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>

      <!--body-->
        <section>
            <div class="container">
                <div class="contactInfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="images/contatctus-img/location.png"></span>
                                <span>Sabaragamuwa University of Srilanka,<br>
                                    Balangoda, Rathnapura,<br>
                                    Srilanka</span>
                            </li>
                            <li>
                                <span><img src="images/contatctus-img/mail.png"></span>
                                <span>express@gmail.com</span>
                            </li>
                            <li>
                                <span><img src="images/contatctus-img/call.png"></span>
                                <span>077-123-4567</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><img src="images/contatctus-img/1.png"></a></li>
                        <li><a href="#"><img src="images/contatctus-img/2.png"></a></li>
                        <li><a href="#"><img src="images/contatctus-img/3.png"></a></li>
                        <li><a href="#"><img src="images/contatctus-img/4.png"></a></li>
                        <li><a href="#"><img src="images/contatctus-img/5.png"></a></li>
                    </ul>
                </div>
                <form action="{{url('message')}}"  method="POST">
                    @csrf
                <div class="contactForm">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                      
                        <div class="inputBox w100">
                            <textarea name="content" id="content"></textarea>
                            <span>Write Your Message Here....</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </section>
    </body>
</html>
