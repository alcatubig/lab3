<!DOCTYPE html>
<html lang="en">
<head>
  <title>INTERESTS</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      padding-top: 93px;
      background-color: #ffe1e1;
      
    }

    .topnav {
      overflow: hidden;
      background-color: #ffc3c3;
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
      background-color: #c9dff4;
    }

    .content {
      background-color: #ffd8d8;
      padding: 20px;
      text-align: center;
      font-family: superc;
      font-size:20px;
      color:#e38787;
    }

    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 20px;
      background-color: #ffe1e1;
      padding: 50px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .grid-item {
      background-color: #ffd2d2;
      text-align: center;
      padding: 25px;
      font-size: 18px;
      height: 400px;
      margin: 20px;
      margin-bottom: 0px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 10%;
    }

    .grid-item img {
      max-width: 100%;
      height: 70%;
      object-fit: cover; 
      border-radius: 10%;
    }

    .grid2-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-template-rows: 1fr; 
    gap: 20px;
    background-color: #ffe1e1;
    padding: 25px;
}

.grid2-item {
    background-color: #ffd2d2;
    text-align: center;
    padding: 25px;
    font-size: 18px;
    margin: 20px;
    margin-bottom: 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease-in-out;
    border-radius: 10%;
}

.grid2-item:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

.grid2-item img {
    width: 100%;
    height: 70%;
    object-fit: cover;
    border-radius: 10%;
}

    .song-title {
      font-family: superc;
      font-size: 20px;
      color: #e38787;
      margin-top: 10px;
    }

    .music-player {
      width: 100%;
      margin-top: 20px;
    }

    .transparent-gif {
      width: 400px;
  height: auto;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0px;
  
    }

    .footer {
      background-color: #ffd8d8;
      padding: 10px;
      margin-top: 30px;
      display: flex;
  justify-content: space-between;
  align-items: center;
  padding-left: 25px;
  padding-right: 25px;
    }

    .starline {
        width: 300px;
      height: 10x;
      text-align: center;
      margin-top: 0px;

    }

    .image-container { 
  text-align: center;
  margin-top: 10px;
}

.popup-viewport {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
      z-index: 1001;
    }

    .popup-content {
      background-color: #ffd2d2;
      padding: 20px;
      border-radius: 10px;
    }

    .popup-grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .popup-grid-item {
      background-color: #ffd2d2;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 10%;
      scale: 80%;
    }

    .popup-grid-item img {
      max-width: 100%;
      height: 70%;
      object-fit: cover;
      border-radius: 10%;
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
    <h1> I  N  T  E  R  E  S  T  S </h1>
  </div>
  <div class="grid-container">
    <div class="grid-item">
      <img src="images/timeless.jpg" alt="HIYORI">
      <p class="song-title">Timeless</p>
      <audio class="music-player" controls>
        <source src="songs/timeless.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
    </div>

    <div class="grid-item">
      <img src="images/middle.jpg" alt="HIYORI">
      <p class="song-title">"I'll Crawl Home To Her"</p>
      <audio class="music-player" controls>
        <source src="songs/worksong.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
    </div>

    <div class="grid-item">
      <img src="images/adore.jpg" alt="HIYORI">
      <p class="song-title">Everyone Adores You</p>
      <audio class="music-player" controls>
        <source src="songs/adore.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
    </div>

  </div>

  <div class="image-container">
    <img class="transparent-gif" src="images/top3songs.gif" alt="Transparent GIF">
  </div>
  <div class="image-container">
    <img class="starline" src="images/starline.png" alt="Starline">
  </div>
  

  <div class="grid2-container">
    
    <div class="grid2-item" onclick="openPopup1()">
      <img src="images/fashion.jpg" alt="fashion">
      <p class="song-title">fashion</p>
     
    </div>

    <div class="grid2-item" onclick="openPopup2()">
      <img src="images/vg.jpg" alt="videogames">
      <p class="song-title">videogames</p>
      
    </div>

    <div class="grid2-item" onclick="openPopup3()">
      <img src="images/read.jpg" alt="books">
      <p class="song-title">books</p>
     
    </div>

    <div class="grid2-item" onclick="openPopup4()">
        <img src="images/art.jpg" alt="art">
        <p class="song-title">art</p>
        
      </div>

  </div>
  <div class="popup-viewport" id="popup1" onclick="closePopup(event)">
    <div class="popup-content">
      <div class="popup-grid-container">
       
        <div class="popup-grid-item">
          <img src="images/art.jpg" alt="Image 1">
          <p class="song-title">art</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/art.jpg" alt="Image 2">
          <p class="song-title">art</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
       
      </div>
    </div>
  </div>

  <div class="popup-viewport" id="popup2" onclick="closePopup(event)">
    <div class="popup-content">
      <div class="popup-grid-container">
        
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/losark.jpg" alt="Image 2">
          <p class="song-title">lost ark</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> 300 ping raids -10/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/csgo2.jpg" alt="Image 2">
          <p class="song-title">csgo</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> "LEM is basically global i retire" 8/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/stardew.jpg" alt="Image 2">
          <p class="song-title">stardew valley</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> min-max or date the wizard 10/10</p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="popup-viewport" id="popup3" onclick="closePopup(event)">
    <div class="popup-content">
      <div class="popup-grid-container">
       
        <div class="popup-grid-item">
          <img src="images/prid.jpg" alt="Image 1">
          <p class="song-title"> pride and prejudice </p>
        </div>
        <div class="popup-grid-item">
          <img src="images/crul.jpg" alt="Image 2">
          <p class="song-title"> the cruel prince </p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
       
      </div>
    </div>
  </div>

  <div class="popup-viewport" id="popup4" onclick="closePopup(event)">
    <div class="popup-content">
      <div class="popup-grid-container">
       
        <div class="popup-grid-item">
          <img src="images/ic.jpg" alt="Image 1">
          <p class="song-title">the fall of icarus</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/art.jpg" alt="Image 2">
          <p class="song-title">art</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
        <div class="popup-grid-item">
          <img src="images/lux.jpg" alt="Image 1">
          <p class="song-title">league of legends</p>
          <p> ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚ ˚ʚ♡ɞ˚</p>
          <p> braindead brainrot 11/10</p>
        </div>
       
      </div>
    </div>
  </div>

  <div class="image-container">
    <img class="transparent-gif" src="images/hobbies.gif" alt="Transparent GIF">
  </div>
  <div class="image-container">
    <img class="starline" src="images/starline.png" alt="Starline">
  </div>

  <div class="footer">
    <p>ALSO WORK IN PROGRESS ;-; </p>
    <div class="digital-clock" id="digital-clock">  </div> 
  </div>
  
  <script src="jav.js"></script>
  <script>
    
    function openPopup1() {
      document.getElementById("popup1").style.display = "flex";
    }

    function openPopup2() {
      document.getElementById("popup2").style.display = "flex";
    }

    function openPopup3() {
      document.getElementById("popup3").style.display = "flex";
    }

    function openPopup4() {
      document.getElementById("popup4").style.display = "flex";
    }


    function closePopup(event) {
      if (event.target.id === "popup1") {
      document.getElementById("popup1").style.display = "none";}
      else if (event.target.id === "popup2") {
      document.getElementById("popup2").style.display = "none";}
      else if (event.target.id === "popup3") {
      document.getElementById("popup3").style.display = "none";}
      else if (event.target.id === "popup4") {
      document.getElementById("popup4").style.display = "none";}
    }
    
  </script>
</body>
</html>
