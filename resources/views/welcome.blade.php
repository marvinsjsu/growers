<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grown By: - Passion and artistry for Marijuana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link async href="http://fonts.googleapis.com/css?family=Battambang" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            body {
                background-image: url(img/growers_bg.png);
                padding-left: 50px;
  /* Background image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Background image doesn't tile */
  background-repeat: no-repeat;
  
  /* Background image is fixed in the viewport so that it doesn't move when 
     the content's height is greater than the image's height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based
     on the container's size 
   background-size: cover;
   */
  
  /* Set a background color that will be displayed
     while the background image is loading */
  background-color: #fff;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 500;
                color: #fff;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .subscribe {

            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .grey > a {
                color: #636b6f;
            }

.subscribe input {
    border-radius:3px;
    border:1px solid #942911;
    display:inline-block;
    font-family:Arial;
    font-size:13px;
    padding:6px 24px;
    text-decoration:none;
    text-shadow:0px 1px 0px #854629;   
    text-align: center; 
}

.subscibe-button {
    -moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
    -webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
    box-shadow:inset 0px 1px 0px 0px #cf866c;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
    background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
    background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
    background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
    background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
    background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
    background-color:#d0451b;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
    border:1px solid #942911;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:13px;
    padding:6px 24px;
    text-decoration:none;
    text-shadow:0px 1px 0px #854629;
}
.subscibe-button:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
    background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
    background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
    background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
    background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
    background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
    background-color:#bc3315;
}
.subscibe-button:active {
    position:relative;
    top:1px;
}


        </style>
    </head>
    <body>         
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links grey">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">   
                <br/><br/><br/>             
                <div class="title">
                    GrownBy
                </div>
                <div class="links">
                    <a href="{{ url('/blog') }}">Stories</a>
                    <a href="{{ url('/artisans') }}">Artists</a>
                </div>
                <div class="subscribe">
                    <br/>
                    <?= Former::vertical_open (route('subscribe.store'))->id('posts_edit_form')->method("POST") ?>
                    <input class="subscribe" type="email" name="email"/>
                    <button class="subscibe-button" type="submit">subscribe</button>
                    <?= Former::close() ?>                   
                </div>                 
            </div>          
        </div>
    </body>
</html>
