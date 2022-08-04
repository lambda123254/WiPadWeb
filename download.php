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
<body class="helvetica">
  <? include("item/navbar.php") ?>

  <div class="container">
    <div class="pt-5">
        <h1 style="padding: 0; margin: 0;">
            <b>Download WiPad for MacOS Version 1.0</b>
        </h1>
        <p style="padding: 0; margin: 0;">
            This is the latest version of the app, recommended for all users
        </p>

        <button 
        class="button mb-5 mt-3" 
        onClick="window.location.href = window.location.protocol + '//' + window.location.host + '/file/WiPad-Installer.dmg';"
        > 
          Download
        </button>
        <div class="card">
            <div class="card-body">
                <h2>How to install?</h2>
                1. After downloading the app, open the app and drag the app into applications folder
                <br>
                2. Open the app then you can see the app on menu bar
                <br>
                3. Open your iPhone app, connect your iPhone to the Mac
                <br>
                4. On Mac open System Preference -> Security & Privacy -> Privacy Tab -> Accesibility -> 
                Add WiPadMac to the list or Mark WiPadMac
                <br>
                5. You are done! WiPad is ready to be used.
            </div>
        </div>
    </div>
  </div>
  <footer class="appBlue text-center text-lg-start text-white footer">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 15px;">
      © 2022 Copyright:
      <a class="" href="">WiPad.com</a>
    </div>
  </footer>
  
</body>
</html>