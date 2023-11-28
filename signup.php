<?php
include('koneksi.php');


$error = "";

function hashPassword($password) {
    
    return password_hash($password, PASSWORD_DEFAULT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $checkUsernameQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
        
        $error = "Username already exists. Please choose a different username.";
    } else {
        

        
        $hashedPassword = hashPassword($password);

        session_start();
        $_SESSION["username"] = $username;

        
        $insertUserQuery = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashedPassword', 'pengguna')";

        if ($conn->query($insertUserQuery) === TRUE) {
            
            $successMessage = "Registration successful!";
        } else {
            $error = "Error: " . $insertUserQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
  <script>
        function showAlert(message) {
            alert(message);
        }
  </script>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
  <style>
  body {
  margin: 0;
  padding: 0;
  display: flex;
  height: 100vh;
  overflow: hidden; /* Mencegah scroll pada halaman */
  }
  .bagian1 {
  flex: 0.365; /* 40% dari lebar */
  padding: 20px;
  position: relative; /* Tambahkan posisi relatif pada bagian2 */
  text-align: center;
  align-items: center;
  background-color: rgb(251, 242, 227);
}

.bagian2 {
  flex: 0.635; /* 60% dari lebar */
  position: relative;
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

.join-line {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin: 10px; 
}
.join-text {
  font-family: 'Cinzel', sans-serif;
  font-size: 12px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  opacity: 80%;
  margin: 0; 
}
.line {
  height: 2px; 
  background-color: rgb(242, 195, 78);
  margin-top: 5px; 
  width: 100px; 
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

  .signin{
  font-family: 'Poppins', sans-serif; 
  font-size: 14px;
  color: rgb(255, 183, 4);
  font-weight: bold;
  text-decoration: none;
  }
  .signin:hover{
  font-family: 'Poppins', sans-serif; 
  font-size: 14px;
  color: rgb(72, 72, 73);
  font-weight: bold;
  text-decoration: none;
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

    .bagian2 img {
      height: 100%;
      }
</style>
</head>

<body>

<div class="bagian1">
    <img class="corner-image top-left" src="img/decor1.png">
    <img class="corner-image top-right" src="img/decor2.png">
    <img class="corner-image bottom-left" src="img/decor3.png">
    <img class="corner-image bottom-right" src="img/decor4.png">

    <img class="left-image" src="img/decor5.png">
    <img class="right-image" src="img/decor5.png">

    <p class="header">Sign Up<p>
    <div class="join-line">
    <p class="join-text">To Start the Journey</p>
    <div class="line"></div>
    </div><br>

    <?php
            if (isset($error) && !empty($error)) {
                echo "<p style='color: red;'>$error</p>";
            } elseif (isset($successMessage) && !empty($successMessage)) {
                echo "<script>showAlert('$successMessage');</script>";
            }
        ?>

    <form action="" method="post">
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

    <input class="submit" type="submit" value="Sign Up"><br>
    </form>

    <p class="text">or</p>
    <a href="signin.php" class="signin"><p>Sign In</p></a>

    <div class="join-line">
    <p class="join-text">To Join the Journey</p>
    <div class="line"></div>
    </div>

</div>

  <div class="bagian2">
  <img src="img/start.jpg">
  </div>

</body>
</html>