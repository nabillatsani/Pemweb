<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: rgb(251, 242, 227);
      display: flex;
      flex-direction: column;
      height: 100vh;
      overflow: hidden;
    }

    .navbar {
      width: 100%;
      height: 9%;
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .navbar a {
      color: rgb(110, 75, 67);
      text-decoration: none;
      display: inline-block;
      font-size: 30px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      margin-top: 10px;
      padding: 0px 50px;
    }

    .navbar a:hover {
      color: rgb(255, 183, 4);
    }

    .navbar-active {
      border-bottom: 2px solid rgb(242, 195, 78);
    }

    .fotoprofile {
      border-radius: 50%;
      width: 40px;
      margin-top: 5px;
      border: 2px solid #F2C34E;
    }
    
    .slider div {
      text-align: center;
      padding: 11px;
      padding-top: 4px;
    }

    .slider-btn {
      margin-top: 10px;
      margin-left: 0px;
      text-align: center;
    }
    .corner-image,
    .left-image,
    .right-image {
      position: absolute;
      width: 120px;
    }

    .top-left {
      top: 10px;
      left: 10px;
    }

    .top-right {
      top: 10px;
      right: 10px;
    }

    .bottom-left {
      bottom: 10px;
      left: 10px;
    }

    .bottom-right {
      bottom: 10px;
      right: 10px;
    }

    .left-image {
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      width: 13px;
    }

    .right-image {
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      width: 13px;
    }

    .btn{
      width: 40px;
    }
    .header{
      font-family: 'Poppins', sans-serif;
      font-size: 35px;
      color: #F2C34E;
      padding: 0px;
    }
    .konten{
      height: 100%;
      width: 90%;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }
    .text{
      width: 700px;
      font-family: 'Poppins', sans-serif;
      font-size: 20px;
      color: #000000;
      opacity: 60%;
      font-weight: bold;
      padding-top: 0px;
    }
    .container{
      align-items: center;
      width: 90%;
      height: 100%;
      display: flex;
      flex-direction: row;
      margin-left: auto;
      margin-right: auto;
      margin-top: 0px;
    }
    .back{
        width:5%;
        height: 100%;
    }
    .next{
        width:5%;
        height: 100%;
    }
    .decor1 {
      width: 120px;
      position: absolute;
      margin-top : 300px;
      margin-right : 650px;
    }
    .decor2 {
      width: 120px;
      position: absolute;
      margin-top: 340px;
      margin-left : 670px;
    }
    .decor3 {
      width: 120px;
      position: absolute;
      margin-top: 310px;
      margin-left : 670px;
    }
    .decor4 {
      width: 120px;
      position: absolute;
      margin-top : 250px;
      margin-right : 680px;
    }
    .decor5 {
      width: 120px;
      position: absolute;
      margin-top : 270px;
      margin-right : 670px;
    }
    .play{
  width: 170px;
  height:40px;
  background-color: rgb(242, 195, 78);
  padding: 5px; 
  border-radius: 8px; 
  border: 1px solid #ccc; 
  color: white;
  font-size: 20px;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; 
  text-align: center;
  }
  .play:hover{
  color: rgb(242, 195, 78);
  background-color: rgb(251, 242, 227);
  }

  .give{
  width: 170px;
  height:40px;
  background-color: rgb(242, 78, 127);
  opacity: 100%;
  padding: 5px; 
  border-radius: 8px; 
  border: 1px solid #ccc; 
  color: white;
  font-size: 20px;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; 
  text-align: center;
  }
  .give:hover{
  color:white;
  background-color: #6E4B43;
  }

  .popup{
        width:100%;
        height:100vh;
        background-color: rgba(0,0,0, .8);
        position: fixed;
        top:0;
        left:0;

        opacity:0;
        visibility: hidden;

        transition: all .3s;
        z-index: 1500;
    }
    .popup__content{
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 40%;
        height: 50%;
        box-shadow: 0 20px 40px rgba(0,0,0, .2);

        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%) scale(0.25);
        opacity:0;

        transition: all .5s .1s;
    }
    #popup:target{
        opacity:1;
        visibility: visible;
    }
    #popup:target .popup__content{
        opacity:1;
        transform: translate(-50%, -50%) scale(1);
    }

    .animated-image {
  position: relative;
  animation: slideIn 3.5s ease-in-out;
}

    @media screen and (max-width: 600px) {
  .slide-content {
    font-size: 14px;
  }
}

@keyframes slideIn {
      0% {
        transform: translateY(100%);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      justify-content: center;
      align-items: center;
    }

    .custom-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      width: 200px;
      height: 250px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  .photo{
  border-radius: 50%;
  width:100px;
  margin-top: 5px;
  border: 2px solid #F2C34E;
    }
    .role{
      font-family: 'Poppins', sans-serif;
      font-size: 25px;
      color: #6E4B43;
      font-weight: bold;
      text-align: center;
    }
    .signout{
  width: 130px;
  height:40px;
  background-color: rgb(242, 195, 78);
  padding: 5px; 
  border-radius: 20px; 
  border: 1px solid #ccc; 
  color: white;
  font-size: 20px;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; 
  text-align: center;
  }
  .signout:hover{
  color: rgb(242, 195, 78);
  background-color: rgb(251, 242, 227);
  }
  </style>
</head>

<body>
  <img class="corner-image top-left" src="img/frame1.png">
  <img class="corner-image top-right" src="img/frame2.png">
  <img class="corner-image bottom-left" src="img/frame3.png">
  <img class="corner-image bottom-right" src="img/frame4.png">

  <img class="left-image" src="img/decor5.png">
  <img class="right-image" src="img/decor5.png">

  <!--navbar-->
  <div class="navbar">
    <a href="home.php">Home</a>
    <a href="character.php">Character</a>
    <a href="story.php" class="navbar-active">Story</a>
    <a href="about.php">About</a>
    <img src="img/profile.jpg" class="fotoprofile" onclick="showCustomBox()">
  </div>

  <!--konten-->
  <div class="slider">

<div>
<div class="container">
  <div class="back">
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - A Tale of Enchantment"</div>
    <img src="img/1.png" width="500px">
    &nbsp;<br>&nbsp;
    <p class="text">
    Once upon a time, in a faraway land, a young Prince lived in a shining castle.Although he had everything his heart desired, the Prince was spoiled, selfish, and unkind.  
    </p>
  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
</div>

<div>
<div class="container">
  <div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor3" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - A Tale of Enchantment"</div>
    <img src="img/2.png" width="500px">
    &nbsp;<br>&nbsp;
    <p class="text">
    One day, an Old Lady sought a shelter from a cold winter storm by offering a petal of rose...    </p>
    <a href="#"><input class="play" type="submit" value="Turn Her Down" onclick="nextSlide()"></a>
  </div>
  <div class="next">
    <a href="#popup"><img src="img/button2.png" class="btn"></img></a>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - A Tale of Enchantment"</div>
    <img src="img/3.png" width="500px">
    &nbsp;<br>&nbsp;
    <p class="text">
    Repulsed by her haggard appearance, the Prince sneered at the gift and turned the old woman away. But she warned him not to be deceived by appearances, for beauty is found within    </p>
  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - A Tale of Enchantment"</div>
    <img src="img/4.png" width="500px">
    &nbsp;<br>&nbsp;
    <p class="text">
    And when he dismissed her again, the old woman's ugliness melted away to reveal a beautiful Enchantress. The Prince tried to apologize, but it was too late...  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - The Curse Begin"</div>
    <img src="img/5.png" width="500px">
    &nbsp;<br>&nbsp;
    <p class="text">
    she transformed him into a hideous Beast, and placed a powerful spell on the castle, and all who lived there...  </div>
  <div class="next">
  <button id="reset1"><img src="img/button2.png" class="btn" onclick="nextSlide()" id="startAnimation"></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - The Curse Begin"</div>
    <br>&nbsp;&nbsp;
    <table><tr>
    <td><img src="img/s1.png" width="100px" class="animated-image"></td>
    <td><img src="img/s2.png" width="100px" class="animated-image"></td>
    <td><img src="img/s3.png" width="100px" class="animated-image"></td>
    <td><img src="img/s4.png" width="100px" class="animated-image"></td>
    <td><img src="img/s5.png" width="160px" class="animated-image"></td>
    </tr></table>
    &nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;
    <p class="text">
    she transformed him into a hideous Beast, and placed a powerful spell on the castle, and all who lived there...  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - The Curse Begin"</div>
    <img src="img/s6.png" width="350px">
    <p class="text">
    The rose she had offered was truly an enchanted rose, which would bloom until his 21st year. If he could learn to love another, and earn her love in return, by the time the last petal fell, then the spell would be broken. If not, he would be doomed to remain a beast for all time....  </div>
  <div class="next">
  <button id="reset2"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Fateful Encounter"</div>
    <table><tr>
    <td><img src="img/s7.png" width="200px" class="animated-image"></td>
    <td><img src="img/s8.png" width="120px" class="animated-image"></td>
    </tr></table>
    <p class="text">
    Belle, the youngest of three sisters, was known for her kindness and beauty, while her sisters were vain and self-absorbed. When their father, a merchant, fell upon hard times and was forced to journey to a distant city, he promised to bring back gifts for his daughters. Belle, unlike her sisters who requested extravagant jewels and silks, simply asked for a rose, a symbol of her father's love.  </div>
  <div class="next">
  <button id="reset3"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Fateful Encounter"</div><br><br>
    <table><tr>
    <td><img src="img/s1.png" width="120px" class="animated-image"></td>
    <td><img src="img/s2.png" width="120px" class="animated-image"></td>
    <td><img src="img/s9.png" width="220px" class="animated-image"></td>
    </tr></table>
    <p class="text">
    On his way home, the merchant lost his way in a dense forest. As darkness fell, he stumbled upon a magnificent castle, its windows glowing with warmth and light. In The Morning As he left the castle, he noticed a beautiful rose garden in bloom. Remembering Belle's request, he plucked a single rose, unaware that it belonged to the Beast, the castle's enchanted master.  </div>
  <div class="next">
  <button id="reset4"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Fateful Encounter"</div>
    <table><tr>
    <td><img src="img/s1.png" width="120px" class="animated-image"></td>
    <td><img src="img/s2.png" width="120px" class="animated-image"></td>
    <td><img src="img/s10.png" width="100px" class="animated-image"></td>
    <td><img src="img/s11.png" width="80px" class="animated-image"></td>
    </tr></table>
    <br>&nbsp;
    <p class="text">
    As the merchant hurried home, a booming voice echoed from the castle, accusing him of theft and demanding his return. The merchant, terrified, pleaded for mercy, offering to send one of his daughters to take his place. And so Belle is willingly agreed to take his place  </div>
  <div class="next">
  <button id="reset5"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Blossoming Connection"</div>
    <table><tr>
    <td><img src="img/s2.png" width="120px" class="animated-image"></td>
    <td><img src="img/s11.png" width="100px" class="animated-image"></td>
    </tr></table>
    <br>&nbsp;
    <p class="text">
    Belle, still shaken by the Beast's imposing appearance and the eerie castle, found herself drawn to the enchanted rose. Its delicate petals, glowing with an otherworldly light, seemed to beckon her closer. She reached out and carefully touched one, feeling a surge of warmth and energy coursing through her veins.
  </div>
  <div class="next">
  <button id="reset6"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Blossoming Connection"</div>
    <table><tr>
    <td><img src="img/s12.png" width="150px" class="animated-image"></td>
    <td><img src="img/s11.png" width="80px" class="animated-image"></td>
    </tr></table>
    <br>&nbsp;
    <p class="text">
    As days turned into weeks, Belle gradually grew accustomed to her strange new surroundings. The Beast, though still gruff and intimidating, showed her a grudging respect and even a hint of kindness. They spent their evenings together, sharing stories and meals, and Belle began to glimpse the gentle soul hidden beneath the Beast's monstrous exterior.  </div>
  <div class="next">
  <button id="reset7"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Blossoming Connection"</div>
    <table><tr>
    <td><img src="img/s1.png" width="150px" class="animated-image"></td>
    <td><img src="img/s13.png" width="70px" class="animated-image"></td>
    <td><img src="img/s14.png" width="60px" class="animated-image"></td>
    </tr></table>
    <p class="text">
    One day, the Beast revealed the true nature of the curse that bound him. He had once been a vain and arrogant prince, transformed into a beast by an enchantress as punishment for his cruelty. The only way to break the curse was to find someone who could love him despite his appearance.  </div>
  <div class="next">
  <button id="reset8"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor4" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Blossoming Connection"</div>
    <td><img src="img/s15.png" width="360px" class="animated-image"></td>
    <p class="text">
    One day, the Beast revealed the true nature of the curse that bound him. He had once been a vain and arrogant prince, transformed into a beast by an enchantress as punishment for his cruelty. The only way to break the curse was to find someone who could love him despite his appearance.  </div>
  <div class="next">
  <button id="reset9"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor3" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Love Conquers All"</div>
    <table><tr>
    <td><img src="img/s12.png" width="190px" class="animated-image"></td>
    <td><img src="img/s16.png" width="180px" class="animated-image"></td>
    </tr></table>
    <br>&nbsp;<br>&nbsp;
    <p class="text">
    Belle, touched by the Beast's story and the loneliness that had tormented him for so long, confessed her own growing affection for him.<br>
    <button id="reset10"><a href="#"><input class="give" type="submit" value="GIVE THE ROSE" onclick="nextSlide()"/></a></button>
  </div>
  <div class="next">
    <a href="#popup"><img src="img/button2.png" class="btn"></img></a>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor1" src="img/decor6.png">
    <img class="decor3" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Love Conquers All"</div>
    <img src="img/s17.png" width="280px" class="animated-image">
    <br>&nbsp;
    <p class="text">
    Belle, touched by the Beast's story and the loneliness that had tormented him for so long, confessed her own growing affection for him.</div>
  <div class="next">
  <button id="reset11"><img src="img/button2.png" class="btn" onclick="nextSlide()" ></img></button>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <img class="decor5" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">"Beauty and the Beast - Love Conquers All"</div>
    <img src="img/bellebeast.png" width="230px" class="animated-image">
    <p class="text">
    The Beast, overwhelmed with joy, felt the curse begin to lift. The enchanted rose, once vibrant and full of life, began to wither. But as the last petal fell, a radiant light filled the castle, and the Beast was transformed back into the handsome prince he once was.  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
</div>

<div>
<div class="container">
<div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="konten">
    <div class="header">"Beauty and the Beast - Love Conquers All"</div>
    <video width="750" controls>
    <source src="beauty&thebeast.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </div>
  <div class="next">
  </div>
</div>
</div>


</div>



<div class="popup" id="popup">
    <div class="popup__content">
      <div class="image-container">
         <img src="img/chose1.png" width="400px">
       </div>
    </div>
</div>

  <script>
    $(document).ready(function () {
      $('.slider').slick({
        autoplay: false,
        autoplaySpeed: 200000,
        dots: true,
        arrows: false
      });
    });

    
    function prevSlide() {
      $('.slider').slick('slickPrev');
    }

    
    function nextSlide() {
      $('.slider').slick('slickNext');
    }
  </script>

  

<script>
    document.addEventListener('DOMContentLoaded', function () {
      var isAnimationStarted = false;
      var imageElements = document.querySelectorAll('.animated-image');

      document.getElementById('startAnimation').addEventListener('click', function () {
        if (!isAnimationStarted) {
          startAnimation();
          isAnimationStarted = true;
        }
      });

      document.getElementById('reset1').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset2').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset3').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset4').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset5').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset6').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset7').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset8').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset9').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset10').addEventListener('click', function () {
        resetAnimation();
      });
      document.getElementById('reset11').addEventListener('click', function () {
        resetAnimation();
      });

      function startAnimation() {
        imageElements.forEach(function (imageElement) {
          imageElement.style.animation = 'slideIn 3.5s ease-in-out';
        });
      }

      function resetAnimation() {
        imageElements.forEach(function (imageElement) {
          
          imageElement.style.animation = 'none';
          
          setTimeout(function () {
            startAnimation();
          }, 10);
        });
      }
      document.getElementById('reset1').style.border = 'none';
      document.getElementById('reset1').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset2').style.border = 'none';
      document.getElementById('reset2').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset3').style.border = 'none';
      document.getElementById('reset3').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset4').style.border = 'none';
      document.getElementById('reset4').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset5').style.border = 'none';
      document.getElementById('reset5').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset6').style.border = 'none';
      document.getElementById('reset6').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset7').style.border = 'none';
      document.getElementById('reset7').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset8').style.border = 'none';
      document.getElementById('reset8').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset9').style.border = 'none';
      document.getElementById('reset9').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset10').style.border = 'none';
      document.getElementById('reset10').style.backgroundColor = 'rgb(251, 242, 227)';
      document.getElementById('reset11').style.border = 'none';
      document.getElementById('reset11').style.backgroundColor = 'rgb(251, 242, 227)';
    });
  </script>


<!-- custom box -->
<div class="overlay" id="customBoxOverlay" onclick="hideCustomBox()">
    <div class="custom-box">
      <img src="img/profile.jpg" class="photo" align-items="center"><br>
      <div class="role">User</div><br>
      <a href="logout.php"><input class="signout" type="" value="Sign Out"></a>
    </div>
  </div>

  <script>
    function showCustomBox() {
      document.getElementById('customBoxOverlay').style.display = 'flex';
    }

    function hideCustomBox() {
      document.getElementById('customBoxOverlay').style.display = 'none';
    }
  </script>

</body>

</html>