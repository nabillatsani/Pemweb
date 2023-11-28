<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
    <style>
body {
  margin: 0;
  padding: 0;
  background-color: rgb(251, 242, 227);
  display: flex;
  flex-direction: column;
  height: 100vh;
  overflow: hidden; /* Mencegah scroll pada halaman */
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
.navbar-active{
    border-bottom: 2px solid rgb(242, 195, 78);
}
.fotoprofile{
  border-radius: 50%;
  width:40px;
  margin-top: 5px;
  border: 2px solid #F2C34E;
}

.container{
  width: 100%;
  height: 91%;
  display: flex;
  flex-direction: row;
}
.bagian1 {
  flex: 0.6; /* 60% dari lebar */
  position: relative; /* Tambahkan posisi relatif pada bagian1 */
}

.bagian2 {
  flex: 0.4; /* 40% dari lebar */
  padding: 20px;
  position: relative; /* Tambahkan posisi relatif pada bagian2 */
}

.corner-image {
  position: absolute;
  width: 120px; /* Lebar gambar */
}

.top-left {
  top: 10px; /* Jarak dari atas */
  left: 10px; /* Jarak dari kiri */
}

.top-right {
  top: 10px; /* Jarak dari atas */
  right: 10px; /* Jarak dari kanan */
}

.bottom-left {
  bottom: 10px; /* Jarak dari bawah */
  left: 10px; /* Jarak dari kiri */
}

.bottom-right {
  bottom: 10px; /* Jarak dari bawah */
  right: 10px; /* Jarak dari kanan */
}

.left-image {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  width: 13px;
}

.right-image {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  width: 13px;
}

.header {
  font-family: 'Berkshire Swash', cursive;
  font-size: 50px;
  color: rgb(255, 183, 4);
  margin-bottom: 5px;
  text-align: left;
  position: absolute;
  top: 10px; /* Menyesuaikan jarak dari atas */
}
.decor{
  position: absolute;
  width: 120px; /* Lebar gambar */
  top: 70px; /* Jarak dari atas */
  left: 10px; /* Jarak dari kiri */
}
.footer {
  font-family: 'Berkshire Swash', cursive;
  font-size: 50px;
  color: rgb(255, 183, 4);
  margin-bottom: 5px;
  text-align: left;
  position: absolute;
  bottom: 10px; /* Menyesuaikan jarak dari atas */
  left: 180px;
}

.text{
  font-family: 'Poppins', sans-serif; 
  font-size: 30px;
  color: rgb(242, 195, 78);
  font-weight: bold;
  margin-left: 50px; 
  margin-top: 70px;
  }

  .desc{
  font-family: 'Poppins', sans-serif; 
  font-size: 25px;
  color: #000000;
  opacity: 60%;
  margin-left: 50px; 
  margin-right: 50px; 
  }

  .play{
  margin-left: 150px;
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

  .cast{
  margin-left: 35px;
  width: 170px;
  height:40px;
  background-color: rgb(251, 242, 227);
  padding: 5px; 
  border-radius: 8px; 
  border: 1px solid #6E4B43; 
  color: #6E4B43;
  font-size: 20px;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; 
  text-align: center;
  }
  .cast:hover{
  color: rgb(242, 195, 78);
  background-color: rgb(251, 242, 227);
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
    <a href="home.php" class="navbar-active">Home</a>
    <a href="character.php">Character</a>
    <a href="story.php">Story</a>
    <a href="about.php">About</a>
    <img src="img/profile.jpg" class="fotoprofile" onclick="showCustomBox()">
  </div>

<!--konten-->
<div class="container">
  <div class="bagian1">
    <p class="text">Welcome to the Journey</p>
    <p class="desc">"Step into the enchanting world of Beauty and the Beast. Uncover the origins of the curse, meet the kind-hearted Belle, and witness a tale that celebrates love and inner beauty. lorem ipsum lorem ipsum
Begin your magical journey now..” </p>
 
<a href="story.php"><input class="play" type="submit" value="Play the Story"></a>
<a href="character.php"><input class="cast" type="submit" value="See the cast"></a>
  </div>

  <div class="bagian2">
    <div class="header">The Beauty &</div><br><br><br>
    <img class="decor" src="img/decor6.png">
    <img src="img/bb.png" width="380px">
    <div class="footer">The Beast</div><br><br><br>
    </div>
</div>


<!-- custom box -->
<div class="overlay" id="customBoxOverlay" onclick="hideCustomBox()">
    <div class="custom-box">
      <img src="img/profile.jpg" class="photo"><br>
      <div class="role">Users</div><br>
      <a href="logout.php"><input class="signout" type="submit" value="Sign Out"></a>
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