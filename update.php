<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $karakter = $_POST["karakter"];
    $deskripsi = $_POST["deskripsi"];
    $quotes = $_POST["quotes"];

    
    $id = $_GET['id'];

    
    $foto = $_FILES['foto']['name'];
    if ($foto != '') {
        $upload = 'img/'.$foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
    } else {
        
        $upload = $row['foto']; 
    }

    
    $sql = "UPDATE deskripsi_karakter SET karakter = ?, deskripsi = ?, quotes = ?, foto = ? WHERE id = ?";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("ssssi", $karakter, $deskripsi, $quotes, $upload, $id);

    
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('Data berhasil diperbarui.'); window.location='cast.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}


$id = $_GET['id'];


$sql = "SELECT * FROM deskripsi_karakter WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);


$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
    <style>
body{
            text-align:center;
            align-items:center;
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

  .container {
        width:70%;
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: helvetica;
        display: grid;
        grid-template-columns: 40% 60%;
    }
    .left-div {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: Arial, sans-serif;

    }
    .right-div {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;
        font-family: Arial, sans-serif;

    }
    .input{
        width: 250px; /* Sesuaikan dengan ukuran yang Anda inginkan */
        padding: 5px; /* Sesuaikan dengan padding yang Anda inginkan */
        border-radius: 10px; /* Mengatur sudut menjadi tumpul */
        border: 2px solid #ccc; /* Mengatur border dengan ketebalan 1px */
    }
    .submit{
        width: 265px;
        background-color: pink;
        padding: 5px; 
        border-radius: 10px; 
        border: 1px solid #ccc; 
        color: white;
        font-weight: bold; /* Mengatur teks pada tombol submit menjadi tebal */
    }

    .play{
  width: 340px;
  height:35px;
  background-color: rgb(242, 195, 78);
  padding: 5px; 
  border-radius: 8px; 
  border: 1px solid #ccc; 
  color: white;
  font-size: 17px;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; 
  text-align: center;
  align-items: center;
  }
  .play:hover{
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
    <a href="edit.php" class="navbar-active">Update</a>
    <a href="cast.php"></a>
    <img src="img/profile.jpg" class="fotoprofile" onclick="showCustomBox()">
  </div>

<!--konten-->
<div class="container">
<div class="left-div">
    <img src="img/add.png" width="350">
</div>
    <div class="right-div">
<!-- Form untuk menambahkan data -->
<form method="POST" action="" enctype="multipart/form-data" >

<table>
  <tr>
    <td><label>Character</label></td>
    <td>:</td>
    <td><input type="text" name="karakter" class="input" value="<?php echo $row['karakter']; ?>" required></td><br>
  </tr>
    <tr>
    <td><label>Description</label>
    <td>:</td>
    <td><textarea name="deskripsi" class="input" required><?php echo $row['deskripsi']; ?></textarea></td><br>
    </tr>
    <tr>
    <td> <label>Quotes</label>
    <td>:</td>
    <td><textarea name="quotes" class="input" required><?php echo $row['quotes']; ?></textarea></td><br>
    </tr>
    <tr>
    <td><label>Photo:</label>
    <td>:</td>
    <td><input type="file" name="foto"></td><br>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>

    <td colspan="3"><button type="submit" class="play">Update</button></td>
    </tr>

</form>
</div>
</div>


<!-- custom box -->
<div class="overlay" id="customBoxOverlay" onclick="hideCustomBox()">
    <div class="custom-box">
      <img src="img/profile.jpg" class="photo"><br>
      <div class="role">Admin</div><br>
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