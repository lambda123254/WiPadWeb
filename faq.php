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
            <b>Frequently Asked Question</b>
        </h1>
        <hr>
        <div class="card-body h4-bold">
          <div class="mb-5">
            <h4>How to open setting?</h4>
            You can simply shake your phone to open setting menu
          </div>
          <div class="mb-5">
            <h4>Failed to connect to Mac?</h4>
            Please refer to the following steps for troubleshooting:
            <br>
            <?php 
              $stringArr = [
                "Make sure that the WiPadMac is running on your Mac. (You can see the app on menu bar on top of your Mac Screen)",
                "Make sure your mobile device and computer are connected to the same Wi-Fi",
                "Some router settings may affect the connection. You can try to “Forget this network” to reset the Wi-Fi, and then reconnect.",
                "Restart your Mac and your iPhone"
              ];
              for($i = 0; $i < count($stringArr) ; $i++) {
                echo $i + 1 . ". " . $stringArr[$i];
                echo "<br>";
              }
            ?>
          </div>
          <div class="mb-5">
            <h4>I can't move the cursor?</h4>
            Make sure that you WiPadMac are checked in Accesibility list 
            <br>
            Open System Preferences -> Security & Privacy -> Privacy -> Choose Accesibility -> Allow WiPadMac
          </div>
          <div class="mb-5">
            <h4>Sometimes it feel a little bit laggy, what should I do?</h4>
            If it is very laggy, try to use 5 GHz Wi-Fi Router and move your device closer to the router, 
            the usual 2.4 GHz band Wi-Fi can be unstable sometimes. Using 5 GHz band can be much stable,
            but it sacrifices range of the Wi-Fi, so you have to get close to the router.
          </div>
          <div class="mb-5">
            <h4>How to disconnect the connection?</h4>
            When you close the app, you will be disconnected automatically
          </div>
          <div class="mb-5">
            <h4>How do I know if WiPad is running on my Mac?</h4>
            WiPad Mac app works in the background, which does not have an active window 
            like other Mac apps. You will find the Mouse icon on the Menu Bar if it is running.
          </div>
        </div>
    </div>
  </div>
  <footer class="appBlue text-center text-lg-start text-white">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 15px;">
      © 2022 Copyright:
      <a class="" href="">WiPad.com</a>
    </div>
  </footer>
  
</body>
</html>