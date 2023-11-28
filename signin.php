<?php
include('koneksi.php');

function redirectBasedOnRole($role) {
    switch ($role) {
        case "pengguna":
          echo "<script>alert('Berhasil login sebagai User.'); window.location='home.php';</script>";
            break;
        case "admin":
          echo "<script>alert('Berhasil login sebagai Admin.'); window.location='admin.php';</script>";
            break;
        default:
            
            $error = "Invalid role";
            
            header("Location: default.php");
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    session_start();

    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;

            
            redirectBasedOnRole($row["role"]);

            exit();
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
  <style>
  body {
  margin: 0;
  padding: 0;
  display: flex;
  height: 100vh;
  overflow: hidden;
  overflow-x: hidden;  
  transition: margin 0.5s ease;
}

.bagian1 img {
      height: 100%;
    }

.bagian1 {
  flex: 0.635; /* 60% dari lebar */
  position: relative; /* Tambahkan posisi relatif pada bagian1 */
}

.bagian2 {
  flex: 0.365; /* 40% dari lebar */
  padding: 20px;
  position: relative; /* Tambahkan posisi relatif pada bagian2 */
  text-align: center;
  align-items: center;
  background-color: rgb(251, 242, 227);
}

.corner-image {
  position: absolute;
  width: 110px; /* Lebar gambar */
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
}

.submit{
  width: 400px;
  height:40px;
  background-color: rgb(242, 195, 78);
  padding: 10px; 
  border-radius: 8px; 
  border: 1px solid #ccc; 
  color: white;
  font-family: 'Poppins', sans-serif; 
  font-weight: bold; /* Mengatur teks pada tombol submit menjadi tebal */
  }
  .submit:hover{
  color: rgb(242, 195, 78);
  background-color: rgb(251, 242, 227);
  }

  .label {
  font-family: 'Poppins', sans-serif; 
  font-size: 12px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  opacity: 80%;
  text-align: left;
  margin-left: 30px;
  } 

  .text{
  font-family: 'Poppins', sans-serif; 
  font-size: 12px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  opacity: 80%;
  }

  .signup{
  font-family: 'Poppins', sans-serif; 
  font-size: 14px;
  color: rgb(255, 183, 4);
  font-weight: bold;
  text-decoration: none;
  }
  .signup:hover{
  font-family: 'Poppins', sans-serif; 
  font-size: 14px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  text-decoration: none;
  }

  .join-line {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin: 10px; /* Atur margin agar garis tidak terlalu dekat dengan teks */
}

/* Styling untuk teks "to join the journey" */
.join-text {
  font-family: 'Cinzel', sans-serif;
  font-size: 12px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  opacity: 80%;
  margin: 0; /* Hapus margin agar teks tetap di tengah */
}

/* Styling untuk garis */
.line {
  height: 2px; /* Ubah tinggi garis sesuai kebutuhan */
  background-color: rgb(242, 195, 78);
  margin-top: 5px; /* Sesuaikan margin atas untuk menambahkan jarak dengan teks di atasnya */
  width: 100px; 
}

    .input-container {
      position: relative;
      margin-bottom: 15px;
    }

    .input-field {
      width: 380px;
      height:15px;
      padding: 10px; 
      border-radius: 8px; 
      border: 2px solid #ccc; 
      background-color: rgb(251, 242, 227);
    }

    .icon {
      position: absolute;
      right: 40px; /* Atur posisi di sebelah kanan */
      top: 50%;
      transform: translateY(-50%);
      width: 20px; /* Atur lebar ikon */
      height: auto;
    }

  </style>
</head>
<body>

  <div class="bagian1">
    <img src="img/start.jpg" width="100%">
  </div>

  <div class="bagian2">

    <img class="corner-image top-left" src="img/decor1.png">
    <img class="corner-image top-right" src="img/decor2.png">
    <img class="corner-image bottom-left" src="img/decor3.png">
    <img class="corner-image bottom-right" src="img/decor4.png">

    <img class="left-image" src="img/decor5.png">
    <img class="right-image" src="img/decor5.png">

    
    <p class="header">Sign in<p>
    <div class="join-line">
    <p class="join-text">To Start the Journey</p>
    <div class="line"></div>
  </div><br>
  <?php if(isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
  <form method="post" action="">
    <p class="label">Enter your username</p>
    <div class="input-container">
        <img class="icon" src="img/person.png" alt="Icon Person"> <!-- Ganti 'ikon_person.png' dengan path gambar Anda -->
        <input type="text" class="input-field text" placeholder="example" name="username" required>
    </div>    
      
    <p  class="label">Enter your password</p>
    <div class="input-container">
        <img class="icon" src="img/eye.png" alt="Icon Person"> <!-- Ganti 'ikon_person.png' dengan path gambar Anda -->
        <input type="password" class="input-field text" placeholder="example@passsword" name="password" required>
    </div><br>

    <input class="submit" type="submit" value="Sign In"><br>

  </form>

  <p class="text">or</p>
  <a href="signup.php" class="signup"><p>Sign Up</p></a>

  <div class="join-line">
    <p class="join-text">To Join the Journey</p>
    <div class="line"></div>
  </div>
</div>


</body>
</html>
