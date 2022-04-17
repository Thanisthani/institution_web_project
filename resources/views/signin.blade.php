<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
     src="https://kit.fontawesome.com/64d58efce2.js"
     crossorigin="anonymous">
    </script>
  <link rel="stylesheet" href="css/style-signin.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
         <div class="forms-container">
            <div class="signin-signup">
             <form action="{{url('check')}}" class="sign-in-form" method="POST">
                @csrf
             <h2 class="title">Log in</h2>

             @if(Session::get('fail'))
                            <div class="error">
                            
                                {{Session::get('fail')}}
                            </div>
                        @endif

                <div class="input-field">
                    <i class="fas fa-user"></i>
                     <input type="text" name="email" id="email" value="{{old('email')}}" placeholder="email" />
                </div>
                @error('email')
                    <span class="error">{{$message}}</span>
                    @enderror
                <div class="input-field">
                     <i class="fas fa-lock"></i>
                     <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                @error('password')
                    <span class="error">{{$message}}</span>
                    @enderror
                    <input class="btn solid" type="submit" value="Login" />
                    <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                </form>
                <form action="{{url('store')}}" class="sign-up-form" method="POST">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div>
                        @if(Session::get('fail'))
                            <div class="alert">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" value="{{old('username')}}" placeholder="Username" />
                    </div>

                    @error('username')
                    <span class="error">{{$message}}</span>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" id="email" value="{{old('email')}}" placeholder="Email" />
                    </div>

                    @error('email')
                    <span class="error" >{{$message}}</span>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" value="{{old('password')}}" placeholder="Password" />
                    </div>

                    @error('password')
                    <span class="error">{{$message}}</span>
                    @enderror

                        <input type="submit" class="btn" value="Sign up" />
                        <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex
                        ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                    <img src="images/signin-img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Log in</button>
                </div>
                <img src="images/signin-img/register.svg" class="image" alt="" />
            </div>
        </div>
  </div>


     <script src="js/signin.js"></script>
</body>
</html>
