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

.container {
  display: flex;
  flex-direction: column;
  margin-top: 30px; /* Add some top margin for spacing */
}

.photo {
  border-radius: 50%;
  width: 100px;
  border: 4px solid #6E4B43;
  margin-bottom: 20px; /* Add some bottom margin for spacing */
}

/* Add some styling for the tables */
table {
  margin-left: 150px;
  margin-top: 20px; /* Add top margin for spacing between tables */
  width: 600px; /* Set a fixed width for the tables */
  text-align: left;
}
.nama{
  font-family: 'Poppins', sans-serif; 
  font-size: 32px;
  color: rgb(242, 195, 78);
}
.as{
  font-family: 'Berkshire Swash', cursive;
  font-size: 20px;
  color: rgb(242, 195, 78);
}
.role{
  font-family: 'Poppins', sans-serif; 
  font-size: 20px;
  color: #000000BD;
  opacity: 74%;
  font-weight: bold;
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
    .rolee{
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
    <a href="story.php">Story</a>
    <a href="about.php"  class="navbar-active">About</a>
    <img src="img/profile.jpg" class="fotoprofile" onclick="showCustomBox()">
  </div>

<!--konten-->
<div class="container">
  <table>
    <tr>
      <td rowspan="3"><img src="img/bagus.png" class="photo"></td>
      <td class="nama">Bagus Wijoyoseno</td>
    </tr>
    <tr>
    <td class="as">As</td>
    </tr>
    <tr>
    <td class="role">UI/UX</td>
    </tr>
  </table>

  <table>
    <tr>
      <td rowspan="3"><img src="img/nabilla.png" class="photo"></td>
      <td class="nama">Nabilla Tsani Ayasi</td>
    </tr>
    <tr>
    <td class="as">As</td>
    </tr>
    <tr>
    <td class="role">Front End</td>
    </tr>
  </table>

  <table>
    <tr>
      <td rowspan="3"><img src="img/rafli.jpeg" class="photo"></td>
      <td class="nama">Rafli Hudanul Sidiq</td>
    </tr>
    <tr>
    <td class="as">As</td>
    </tr>
    <tr>
    <td class="role">Back End</td>
    </tr>
  </table>

</div>

<!-- custom box -->
<div class="overlay" id="customBoxOverlay" onclick="hideCustomBox()">
    <div class="custom-box">
      <img src="img/profile.jpg" class="photo"><br>
      <div class="role">Users</div><br>
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