<?php
$file = 'visitor_count.txt';

$current_count = file_get_contents($file);

$current_count++;

file_put_contents($file, $current_count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WELCOME</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      padding-top: 93px;
    }

    .topnav {
      overflow: hidden;
      background-color: #9abddc;
      text-align: center; 
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .topnav a {
      display: inline-block;
      padding: 1px; 
      margin: 10px;
      text-decoration: none;
      border-radius: 10%;
    }

    .topnav a img {
      width: 70px; 
      height: auto;
    }

    .topnav a:hover {
      background-color: #ffd1dc;
    }

    .content {
      background-color: #d1e5f4;
      padding: 20px;
      text-align: center;
      font-family: superc;
      font-size:20px;
      color:#749dc1;
    }

    .grid-container {
      grid-template-columns: auto auto auto;
      gap: 20px;
      background-color: #bad5ec;
      padding: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .grid-item {
      text-align: center;
      padding-bottom: 0;
      font-size: auto;
      height: 100%; 
      margin-bottom: 0;
      position: sticky;
      overflow: hidden;
      border-radius: 20px;
    }

    .grid-item video {
      max-width: 100%;
      height: auto;
      object-fit: cover; 
      border: 10px solid #ffcad3; 
      border-radius: 15px; 
    }

    .footer {
      background-color: #d1e5f4;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-left: 25px;
  padding-right: 25px;
    }

   p {
    font-size: 17px;
   }

  </style>
</head>
<body>

  <div class="topnav">
    <a href="home"><img src="images/milkf.png" alt="Home"></a>
    <a href="aboutme"><img src="images/chiffonf.png" alt="About Me"></a>
    <a href="index"><img src="images/heartcinna.png" alt="About Me"></a>
    <a href="interests"><img src="images/mochaf.png" alt="Interests"></a>
    <a href="gallery"><img src="images/expressof.png" alt="Gallery"></a>
  </div>

  <div class="content">
    <h1> WELCOME </h1>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <video controls autoplay>
        <source src="vids/josh.mp4" type="video/mp4">
      </video>
    </div>

  </div>

  <div class="footer">
    <p style="font-family: superc;"><?php echo "TOTAL VISITS: " . file_get_contents("visitor_count.txt"); ?></p>
    <div class="digital-clock" id="digital-clock">  </div> 
</div>

  <script src="jav.js"></script>

</body>
</html>
