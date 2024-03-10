<!DOCTYPE html>
<html lang="en">
<head>
  <title>GALLERY</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
 
    .topnav {
      overflow: hidden;
      background-color: #ecdcbc;
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
      background-color: #fffbc8;
    }

    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 93px;
            background-color: #fefce5;
          background-image: url(images/yel1.jpg);
        
  background-position: center;
  
          
        }

    

    main {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #dbf2ff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .post {
    border: 1px solid #ddd;
    background-color: #fffeee;
    border-radius: 5%;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

    .post:hover {
            transform: scale(1.05);
            
        }

        .post img {
    max-width: 100%;
    height: 400px;
    display: block;
    margin-top: 20px;
    margin-bottom: 5px;
    margin-left: 33px;
}

    .post-content {
            padding: 15px;
        }

    .post h2 {
            margin-bottom: 5px;
            color: #333;
        }

    .post p {
            color: #555;
        }

    .content {
      background-color: #fff4d6;
      padding: 20px;
      text-align: center;
      font-family: superc;
      font-size:20px;
      color: #d09b86;
      
    
    }

    .footer {
      background-color: #fff4d6;
      padding: 10px;
      display: flex;
  justify-content: space-between;
  align-items: center;
  padding-left: 25px;
  padding-right: 25px;
      
    }

    .profile-info {
    display: flex;
    flex-direction: row;
    justify-content: flex-start; 
    margin-bottom: 0px;
    }


    .profile-info img {
            width: 50px; 
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            padding-top: 2px;
        }

    .user {
        font-weight: bold;
        font-size: 85%;
    }

    .date {
        font-size: 80%;
        font-weight: lighter;
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
    <h1> WHAT'S ON MY MIND? </h1>
  </div>



<main>
    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 10, 2024</span>
            </p>
        </div>
        <img src="images/hiyoricard.jpg" alt="Post Image 1">
        <div class="post-content">
            <h2>Enstars Babygirl</h2>
            <p>Hiyori Tomoe. My favorite cabbage head !! This is his prettiest JP card fr no cap</p>
        </div>
    </div>

    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 8, 2024</span>
            </p>
        </div>
        <img src="images/blair1.jpg" alt="Post Image 2">
        <div class="post-content">
            <h2>realest gossipgirl character</h2>
            <p>she is me i am her.</p>
        </div>
    </div>

    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 7, 2024</span>
            </p>
        </div>
        <img src="images/ppj.jpg" alt="Post Image 2">
        <div class="post-content">
            <h2>MR. DARCY'S HAND FLEX</h2>
            <p>THE TENSIONNNNNNN. Died dead did not help with my delusions. Needed more angst tbh.</p>
        </div>
    </div>

    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 4, 2024</span>
            </p>
        </div>
        <img src="images/tcp.jpg" alt="Post Image 2">
        <div class="post-content">
            <h2> ME AND WHO ?!?! </h2>
            <p>THE TENSIONNNNNNN (2). This illustration has me on a chokehold. CARDAN'S POV WHEN PLEASE GOD</p>
        </div>
    </div>

    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 3, 2024</span>
            </p>
        </div>
        <img src="images/dag.jpg" alt="Post Image 2">
        <div class="post-content">
            <h2>DAGGIE</h2>
            <p>our dog is getting old huhuhu i wanna get him a pup cup</p>
        </div>
    </div>

    <div class="post">
        <div class="profile-info">
            <img src="images/hiyori1.jpg" alt="Profile Image 1">
            <p class="user">
                <br> Arwen Catubig <br>
                <span class="date">January 1, 2024</span>
            </p>
        </div>
        <img src="images/ahr.jpg" alt="Post Image 2">
        <div class="post-content">
            <h2>AO HARU RIDE</h2>
            <p>i cried too much over this. no idea why it's my favorite shoujo manga.</p>
        </div>
    </div>
   

</main>

  <div class="footer">
    <p> GALLERY SLASH NEWS FEED BUT IT'S JUST ME BEING MESSY </p> <div class="digital-clock" id="digital-clock">  </div> 
  </div>
  
  <script src="jav.js"></script>

</body>
</html>
