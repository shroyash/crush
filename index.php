<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Pickup Line Generator</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: cursive;
    }
     h2 {
      font-size: 2.5em;
      font-family: cursive;
      font-weight: 800;
      color: black;
      opacity: 0.7;
      margin-top:150px ;
    }
     .background-section {
      background-image: url('https://img.freepik.com/free-vector/little-red-heart-background_53876-98914.jpg');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      height: 650px;
      padding-top: 50px;
      z-index: 9;
    }
    .background-sectiion2{
      background-color: #fc6dfa;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      height: 650px;
      padding-top: 50px;
      z-index: -2;
    }
    .background-sectiion3{
      background-color: #b39cff;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      height: 650px;
      padding-top: 50px;
      z-index: -2;
    }
    .navbar li{
      margin-left:15px ;
    }

    /* geneartepickup css start */

    .GeneratePickup {
      max-width: 90%;
    }

    

    .GeneratePickup .main-heading {
      padding-top: 20px;
    }

   .GeneratePickup button {
      background-color: orangered;
      border: 2px solid orangered;
    }

    #result  #checkResult #Info {
      font-size: 1em;
      color: black;
      font-family: cursive;
      font-weight: bold;
      margin-top: 20px; /* Add some top margin for better spacing */
      opacity: 0.7;
      text-align: center;
      

  }
    
/* geneartepickup css finish */

  </style>
</head>
<body>

  <!-------------------------------------Nav Bar start -------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top"style="background-color: #C61786;">
  <div class="container">
    <div class="logs">
      <span style="color:#0e8696;font-size:1.4rem ;color: yellow;
font-family: cursive;">CheckCrush</span></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation"style="background-color: yellow;border: 1px solid yellow; border-radius:6px; width:15%">
      <span class="navbar-toggler-icon" style="color:orangered;" ></span>
      
    </button>
   <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav m-auto navbar-nav-scroll">
        
        <li class="nav-item active">
          <a class="nav-link active" href="#GeneratePickup" style="color: white;">Generate Pickup Line</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="#checkpercentage" style="color: white;">Check love percentage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mn" style="color: white;">See who Have crush on you</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>


<!-------------------------------------GeneratePickUp Start-------------------------------------->
  <section class="background-section" id="GeneratePickup">
    <div class="container GeneratePickup" >
      <div class="main-heading text-center">
        <h2>Generate PickUp Lines For Your Crush</h2>
      </div>
      <form id="form">
        <div class="form text-center">
          <button class="btn btn-success" onclick="generatePickUpLine(event)">Generate</button>
        </div>
      </form>
      <div id="result" class="text-center mt-3"></div>
      <div class="remove"></div>
    </div>
  </section>


<!-------------------------------------check love percentage Start-------------------------------------->
<section class="background-sectiion2" style="padding-top: 190px;">
  <div class="checkPer d-flex flex-column justify-content-center align-items-center">
    <div class="container " id="checkpercentage">
      <div class="main-heading text-center">
        <h3>Calculate the love percentage between you and your crush.</h3>
      </div>

      <form id="checkForm" class="text-center">
        <div class="d-flex justify-content-center">
          <input type="text" name="yourName" id="yourName" class="form-control" placeholder="Enter Your Name" style="max-width:30%; text-align: center; margin-right:10px;">
          <input type="text" name="crushName" id="crushName" class="form-control" placeholder="Enter Your Crush Name" style="max-width:30%; text-align: center;">
        </div>
        <button class="btn btn-success mt-3" onclick="checkPer(event)">Calculate</button>
      </form>
      <div id="checkResult" class="text-center mt-3"></div>
    </div>
  </div>
</section>

<!-------------------------------------check if some has crush on you or not Start-------------------------------------->
<section class="background-sectiion3 text-center" id="mn">
  <h3 style="padding-top: 110px;" class="text-center">Select Your Birth Day to find out if someone has a crush on you or not</h3>
  <select id="selectDay" onchange="displayInfo()" >
    <option value="1">Sunday</option>
    <option value="2">Monday</option>
    <option value="3">Tuesday</option>
    <option value="4">Wednesday</option>
    <option value="5">Thursday</option>
    <option value="6">Friday</option>
    <option value="7">Saturday</option>
  </select>

  <div id="Info" class="text-center mt-3">
  
  </div>

</section>




  <script>
    // genrate the pickup line
    function generatePickUpLine(event) {
      event.preventDefault();

      const picklines = [
  'I hope you know CPR, because you just took my breath away!',
  'So, aside from taking my breath away, what do you do for a living?',
  'I ought to complain to Spotify for you not being named this week’s hottest single.',
  'Are you a parking ticket? ‘Cause you’ve got ‘fine’ written all over you.',
  'Your eyes are like the ocean; I could swim in them all day.',
  'When I look in your eyes, I see a very kind soul.',
  'If you were a vegetable, you’d be a ‘cute-cumber.’',
  'Do you happen to have a Band-Aid? ‘Cause I scraped my knees falling for you.',
  'I never believed in love at first sight, but that was before I saw you.',
  'No wonder the sky is gray (or dark, if at night)—all the color is in your eyes.',
  'You’ve got everything I’ve been searching for, and believe me—I’ve been looking a long time.',
  'You’re like a fine wine. The more of you I drink in, the better I feel.',
  'You’ve got a lot of beautiful curves, but your smile is absolutely my favorite. Are you as beautiful on the inside as you are on the outside?',
  'If being sexy was a crime, you’d be guilty as charged.',
  'I was wondering if you’re an artist because you were so good at drawing me in.',
  'I’d like to take you to the movies, but they don’t let you bring in your own snacks.',
  'You know what you would look really beautiful in? My arms.',
  'I would never play hide and seek with you because someone like you is impossible to find.',
  'Are you a magician? It’s the strangest thing, but every time I look at you, everyone else disappears.',
  'I think there’s something wrong with my phone. Could you try calling it to see if it works?',
  'Hi, I just wanted to thank you for the gift. (pause) I’ve been wearing this smile ever since you gave it to me.',
  'Are you an electrician? Because you’re definitely lighting up my day/night!',
  'I’ve heard it said that kissing is the ‘language of love.’ Would you care to have a conversation with me about it sometime?',
  'I always thought happiness started with an ‘h,’ but it turns out mine starts with ‘u.',
  'I believe in following my dreams. Can I have your Instagram?'
];

      let result = document.getElementById('result');
      let picklineResult = picklines[Math.floor(Math.random() * picklines.length)];
      result.textContent = picklineResult;
    }

    //check percentage

   //check percentage
  function checkPer(event) {
    event.preventDefault();
    let yourName = document.getElementById('yourName').value.trim();
    let crushName = document.getElementById('crushName').value.trim();
    let checkResult = document.getElementById('checkResult');
    let checkPercentage = Math.floor(Math.random() * 100);

    if (yourName !== "" && crushName !== "") {
      checkResult.textContent = `The love percentage between ${yourName} and ${crushName} is ${checkPercentage}%`;
    } else if (yourName === "") {
      alert('Name should not be empty');
    } else if (crushName === "") {
      alert('Crush Name should not be empty');
    }
  }

  // Check if someone has a crush on you or not
  function displayInfo() { 
    let selectDay = document.getElementById('selectDay').value;
    let info = document.getElementById('Info');
    
    switch (selectDay) {
      case "1":
        info.textContent = 'No one has a crush.';
        break;
      case "2":
        info.textContent = 'Someone might have a crush on you.';
        break;
      case "3":
        info.textContent = 'some one from Class 11  have crush on you.';
        break;
      case "4":
        info.textContent = 'Someone from your class has biggest crush on you.';
        break;
      case "5":
        info.textContent = 'No one has a crush.';
        break;
      case "6":
        info.textContent = 'Class topper has crush on you.';
        break;
      case "7":
        info.textContent = 'Someone might have a crush on you.';
        break;
      default:
        info.textContent = 'Invalid day selection.';
        break;
    }
  }
</script>

    


  </script>
</body>
</html>
