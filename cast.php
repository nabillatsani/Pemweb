<?php
  include "koneksi.php";
  $read= "SELECT * FROM deskripsi_karakter";
  $query=mysqli_query($conn,$read);
 
?>

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
    .container {
    align-items: center;
    width: 85%;
    height: 100%;
    display: flex;
    flex-direction: row;
    margin-left: auto;
    margin-right: auto;

    }
    .right{
      height: 100%;
      width: 65%;
    }
    .left{
      height: 100%;
      width: 25%;
    }
    .quot{
      width: 100%;
    }
    .char {
      width: 250px;
    }

    .header {
      font-family: 'Berkshire Swash', cursive;
      font-size: 50px;
      color: rgb(255, 183, 4);
      text-align: left;
      position: absolute;
      margin-left: 30px;
      margin-top: 30px;
    }
    .decor1 {
      width: 120px;
      position: absolute;
      margin-top : 0px;
      margin-left : 0px;
    }
    .decor2 {
      width: 120px;
      position: absolute;
      margin-top : 170px;
      margin-left : 495px;
    }
    .decor3 {
      width: 120px;
      position: absolute;
      margin-top : 120px;
      margin-left : 495px;
    }
    .desc {
      width: 500px;
      font-family: 'Poppins', sans-serif;
      font-size: 17px;
      color: #000000;
      opacity: 60%;
      margin-top : 110px;
      margin-left :60px;
      font-weight: bold;
      text-align: justify;
    }
    .quotes{
      font-family: 'Poppins', sans-serif;
      font-size: 24px;
      color: rgb(255, 183, 4);
    }
    .back{
        width:5%;
        height: 100%;
    }
    .next{
        width:5%;
        height: 100%;
    }
    .btn{
      width: 40px;
    }
    @media screen and (max-width: 600px) {
  .slide-content {
    font-size: 14px;
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
    <a href="admin.php">Home</a>
    <a href="edit.php">Add Character</a>
    <a href="cast.php" class="navbar-active">Character</a>
    <img src="img/profile.jpg" class="fotoprofile" onclick="showCustomBox()">
  </div>


  <!--konten-->
  <div class="slider">

<div>
    &nbsp;<br>&nbsp;
<div class="container">
  <div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="left">
    <img src="img/beast.png" class="char">
  </div>
  <div class="right">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">The Beast</div>
    <p class="desc">
    Cursed by the Enchantress, the Beast, a once arrogant prince, transforms into a fearsome creature. Despite his tough exterior, he harbors a wounded and compassionate soul. The only cure is love, leading to a profound transformation as he learns kindness and humility, ultimately finding redemption through love's power.    </p>
  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
  <div class="quot">
    &nbsp;
    <p class="quotes">"Love transforms even the darkest hearts into a beacon of light."</p>
  </div>
</div>

<div>
&nbsp;<br>&nbsp;
<div class="container">
  <div class="back">
    <img src="img/button1.png" class="btn" onclick="prevSlide()"></img>
  </div>
  <div class="left">
    <img src="img/belle.png" class="char">
  </div>
  <div class="right">
    <img class="decor1" src="img/decor6.png">
    <img class="decor2" src="img/decor7.png">
    <div class="header">Belle</div>
    <p class="desc">
    Belle, a kind and independent young woman, becomes entangled in the enchanted castle's story. Despite initial challenges, she sees past the Beast's exterior and discovers his compassionate nature. Throughout the tale, Belle's love and courage play a pivotal role in breaking the curse, highlighting the transformative power of genuine connection
    </p>
  </div>
  <div class="next">
    <img src="img/button2.png" class="btn" onclick="nextSlide()"></img>
  </div>
</div>
  <div class="quot">
    &nbsp;
    <p class="quotes">"Beauty lies not just in appearances, but in the depth of one's heart."</p>
  </div>
</div>

<?php
while ($row = mysqli_fetch_array($query)) {
    echo '<div>';
    echo '&nbsp;<br>&nbsp;';
    echo '<div class="container">';
    echo '<div class="back">';
    echo '<img src="img/button1.png" class="btn" onclick="prevSlide()"></img>';
    echo '</div>';
    echo '<div class="left">';
    echo '<img src="' . $row['foto'] . '" class="char">';
    echo '</div>';
    echo '<div class="right">';
    echo '<img class="decor1" src="img/decor6.png">';
    echo '<img class="decor2" src="img/decor7.png">';
    echo '<div class="header">' . $row['karakter'] . '</div>'; 
    echo '<p class="desc">' . $row['deskripsi'] . '</p>'; 
    echo '</div>';
    echo '<div class="next">';
    echo '<img src="img/button2.png" class="btn" onclick="nextSlide()"></img>';
    echo '</div>';
    echo '</div>';
    echo '<div class="quot">';
    echo '&nbsp;';
    echo '<p class="quotes">' . $row['quotes'] . '</p>';
    echo "<a class='play' href='update.php?id=$row[id]'>Edit</a>  <a class='play' href='cast.php?id_delete=$row[id]'>Hapus</a>";
    echo '</div>';
    echo '</div>';
}

if(isset($_GET['id_delete'])){
  $id = $_GET['id_delete'];
  $read = "SELECT * FROM deskripsi_karakter WHERE id = '$id'";
  $query = mysqli_query($conn, $read);
  $row = mysqli_fetch_array($query);
  $gambar = $row['foto'];
  unlink($gambar);
  $sql = "DELETE FROM deskripsi_karakter WHERE id = '$id'";
  $query = mysqli_query($conn, $sql);
  if ($query) {
  ?>
  <script>
      alert("berhasil dihapus");
      location = "cast.php";    
  </script>
  <?php
  } else {
      echo "Error: " . mysqli_error($conn);
  }   
}

?>

</div>

  <script>
    $(document).ready(function () {
      $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
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