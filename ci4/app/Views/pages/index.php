<!DOCTYPE html>
<html lang="en">
<head>
  <title>HELLO</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100vh;
      background-color: #c3d4e7; 
    }

    .large-image-container {
      margin-bottom: 2px;
      text-align: center;
    }

    .large-image-container img {
      width: 60%; 
      height: auto;
      border-radius: 8px;
      cursor: pointer;
    }

    .text-container {
      text-align: center;
      margin-bottom: 20px;
    }

    .image-container {
      display: flex;
      justify-content: center;
      gap: 7px; 
      text-align: center; 
      margin-bottom: 30px;
    }

    .image-container a:hover img {
      transform: scale(1.35);
    }

    .image-container img {
      width: 40%; 
      height: auto;
      border-radius: 8px;
      cursor: pointer;
    }

  

  h1 {

    font-family: rubik;
  }

  p {
    font-family: superc;
  }

  #cuteMessage {
    opacity: 1;
    transition: opacity 1s ease-in-out;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
  }
  </style>
</head>
<body>
  
  <div id="cuteMessage"></div>

  <script>
    
    const cuteMessages = [
      "let's fly like fluffy clouds~",
      "my tail is pretty, right?",
      "you're the sprinkles on my cupcake!",
      "you're as sweet as honey!",
      "you light up my day like stars in the night sky!",
      "make each day your masterpiece.",
      "hi po tagal niyo naman dito",
      "shoo na",
      "wala na ba tao? hehe",
      "...",
      "i love you bubby mwamwa",
    ];

    let currentIndex = 0;

  
  function displayCuteMessage() {
    
    const cuteMessageElement = document.getElementById('cuteMessage');

   
    const currentMessage = cuteMessages[currentIndex];

   
    cuteMessageElement.textContent = currentMessage;

   
    currentIndex = (currentIndex + 1) % cuteMessages.length;
  }
    
    displayCuteMessage();

    
    setInterval(displayCuteMessage, 3000);
  </script>

  <br>



  <div class="large-image-container">
    <img src="images/cinnap.png" alt="cinna p face"></a>
  </div>

  <div class="text-container">
    
    <h1>hi hello hi hello hi</h1>
    <p>pick a puppy</p>
  
  </div>
  <div class="image-container">
    <a href="home"><img src="images/milksolo1.png" alt="Home"></a>
    <a href="aboutme"><img src="images/chiffonsolo1.png" alt="About Me"></a>
    <a href="interests"><img src="images/mochasolo1.png" alt="Interests"></a>
    <a href="gallery"><img src="images/expressosolo1.png" alt="Gallery"></a>
  </div>

 

</body>
</html>
