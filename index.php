<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" href="style/color.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="icon" type="image/png" href="image/logo-favicon.png">

    <title>WiPad: Wireless Touchpad</title>

</head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="javascript/bg.js"></script>
<body class="helvetica">
  <? include("item/navbar.php") ?>
  <div class="parallax text-center">
    <div class="pl-5 pr-5 text-white" style="padding-top: 15vh" id="part1">
      <h1>
        <b>Available on AppStore</b>
      </h1>
      <p>
        Have you downloaded the iPhone app from the AppStore? Click <a href="download">here</a> to get started
      </p>
      <button 
        class="button2" 
        onClick="window.location.href = 'https://apps.apple.com/id/app/wipad/id1634755286';"
        > 
          Download iPhone App
        </button>
    </div>
  </div>
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-sm-5 text-center">
        <img src="image/iphone1.svg" height="500vh" alt="" style="background: transparent;">
      </div>
      <div class="col-sm pt-2 text-justify">
        <h1>
          What is WiPad?
        </h1>
        <p>
          WiPad is Wireless Touchpad, WiPad can turn your iPhone into a wireless user-friendly touchpad replacement for your Mac. 
          It simulates the function of your actual touchpad. The features which are designed for one-handed or two-handed uses with multiple
          gestures available to interact. In addition, The Experimental "Smart" Scrolling feature was added to give you a new way to
          interact with your mac
        </p>
        <button 
        class="button" 
        onClick="window.location.href = window.location.protocol + '//' + window.location.host + '/features';"
        > 
          Explore More
        </button>
      </div>
    </div>
  </div>
  <div class="appBlue">
    <div class="container pt-5 pb-5">
      <div class="row text-center text-white">
        <div class="col">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cursor-fill pb-1" viewBox="0 0 16 16">
              <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
            </svg>
            <p class="card-text">
              Smooth cursor movement using the latest method
            </p>
          </div>
        </div>
        <div class="col">
          <div class="card-body">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-ppt-fill" viewBox="0 0 16 16">
            <path d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5z"/>
            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5H7z"/>
          </svg>
            <p class="card-text">
              You can use the app for presentation tool
            </p>
          </div>
        </div>
        <div class="col">
          <div class="card-body">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
            <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
          </svg>
            <p class="card-text">
              Multitouch gesture are provided to ensure greatest experience
            </p>
          </div>
        </div>
      </div>
      <div class="row text-center text-white">
        <div class="col">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-laptop-fill" viewBox="0 0 16 16">
              <path d="M2.5 2A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
            </svg>
            <p class="card-text">
              Control your Mac from a <br> 
              distance wirelessly
            </p>
          </div>
        </div>
        <div class="col">
          <div class="card-body">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg>
            <p class="card-text">
              Movement detection scrolling, move your <br>
              iPhone down or up to scroll
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="parallax2 text-center pb-5">
    <div class="pl-5 pr-5 text-white" style="padding-top: 15vh">
      <h1>
        Do you have any question?
      </h1>
      <p>
        You can contact us by clicking the button below
      </p>
      <button 
        class="button2" 
        onClick="window.location.href = window.location.protocol + '//' + window.location.host + '/contact-us';"
      > 
          Contact Us
        </button>
    </div>
  </div>
  <footer class="appBlue text-center text-lg-start text-white">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 15px;">
      © 2022 Copyright: <a class="text-white" href="">WiPad.com</a> | Mockup design by 
      <a class="text-white" href="https://freepik.com">Freepik</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</body>
</html>