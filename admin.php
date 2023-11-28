<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
    <style>

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
body {
  margin: 0;
  padding: 0;
  background-color: rgb(251, 242, 227);
  display: flex;
  flex-direction: column;
  height: 100vh;
  text-align: center; /* Center align the content */
}
.welcome{
  font-family: 'Berkshire Swash', cursive;
  font-size: 90px;
  color: rgb(242, 195, 78);
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
    <a href="admin.php" class="navbar-active">Home</a>
    <a href="edit.php">Add Character</a>
    <a href="cast.php">Character</a>
        <img src="img/profile.jpg" class="fotoprofile" id="akun" onclick="showCustomBox()">
  </div>

<!--konten-->
<p class="welcome">
Welcome to the admin page!
</p>


  <!-- custom box -->
  <div class="overlay" id="customBoxOverlay" onclick="hideCustomBox()">
    <div class="custom-box">
      <img src="img/profile.jpg" class="photo"><br>
      <div class="role">Admin</div><br>
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