<!DOCTYPE html>
<html lang="en">
<head>
  <title> ABOUT ME </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      padding-top: 93px;
      background-color:  #fae1bb; 
    }

    .topnav {
      overflow: hidden;
      background-color: #f2d29f;
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
      background-color: #f8f4b8;
    }

    .content {
      background-color: #fff4d6;
      padding: 20px;
      text-align: center;
      font-family: superc;
      font-size:20px;
      color: #b27e69;
    }

    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 20px;
      background-color: #fae1bb;
      padding: 50px;
      
    }

    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 0 auto;
      font-size: 30px;
      height: 400px; 
      margin: 30px; 
      border-radius: 20px;
      
    }

    .grid-item img {
      max-width: 100%;
      height: 100%;
      object-fit: cover; 
      border-radius: 20px;
    }

    .footer {
      background-color: #fff4d6;
      padding: 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-left: 25px;
      padding-right: 25px;
    }

    #linkedin,
    #github {
      color: #925e49;
      text-decoration: none; 
    }

    #linkedin:hover,
    #github:hover {
      color: #f2d29f;
    }

    
    .view-album {
      text-align: center;
      padding-bottom: 30px;
    }

    
    .view-album a {
      text-decoration: none;
      color: #925e49;
      font-size: 20px;
      font-family: superc;
      margin-bottom: 10px;
    }

    .view-album a:hover {
      text-decoration: none;
      color: #b27e69;
      font-size: 20px;
      font-family: superc;
      margin-bottom: 10px;
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
    <h1> ABOUT THE CREATOR </h1>
    <p>Connect with me on <a href="#" id="linkedin">LinkedIn</a> and <a href="#" id="github">GitHub</a>!</p>
  </div>

  <div class="grid-container">
    <div class="grid-item"><img src="images/hiyori1.jpg" alt="HIYORI"></div>
    <div class="grid-item"><img src="images/hiyori2.jpg" alt="HIYORI"></div>
    <div class="grid-item"><img src="images/hiyori3.jpg" alt="HIYORI"></div>
  </div>

 
  <div class="view-album">
    <a href="album">View Album</a>
  </div>

  <div class="footer">
    <footer id="footer">WORK IN PROGRESS SORRY</footer>
    <div class="digital-clock" id="digital-clock">  </div> 
  </div>
  
  <script src="jav.js"></script>
  <script>
    class FooterText {
      constructor(statements) {
        this.statements = statements;
        this.footer = document.getElementById('footer');
        this.interval = null;
      }
    
      startUpdating() {
        this.updateText();
        this.interval = setInterval(() => {
          this.updateText();
        }, 4300);
      }
    
      stopUpdating() {
        clearInterval(this.interval);
      }
    
      updateText() {
        const randomIndex = Math.floor(Math.random() * this.statements.length);
        const randomStatement = this.statements[randomIndex];
        this.footer.textContent = randomStatement;
      }
    }
    
    const statements = [
  "Imagine being loved by me",
  "I hear you tell me lightly, You were quite a mess, But I worship you no less this way",
  "But I swear I thought I dreamed her, she never asked me once about the wrong I did",
  "Girl I've never loved one like you",
  "Home is wherever I'm with you",
  "In the dead of night, I want to live with you",
  "My attachment to you, Isn’t subject to change",
  "You still would've been mine, We would have been timeless",
  "And when we're apart, and I'm missing you, I close my eyes and all I see is you",
  "I don't wanna think of anything else now that I thought of you"
];


    
    const footerText = new FooterText(statements);
    footerText.startUpdating();
    </script>
     <script type="module">
      
      import { openLinkedInProfile, openGitHubProfile } from './socialLinks.js';
      
      document.getElementById('linkedin').addEventListener('click', function() {
        openLinkedInProfile();
      });
  
     
      document.getElementById('github').addEventListener('click', function() {
        openGitHubProfile();
      });
    </script>
     
</body>
</html>
