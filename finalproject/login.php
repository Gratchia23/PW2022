<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

    
if (isset($_SESSION['username'])) {
    header("Location: index.php");
} 
 
if (isset($_POST['submit'])) {
    $email = $_POST['email']; 
    $password = md5($_POST['password']); 
 
    $databasecheck = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 

    $result = mysqli_query($conn, $databasecheck);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['username'] = $row['username']; 
        header("Location: index.php"); 
    } else {
        echo "<script>alert('Email atau password Anda Tidak Valid. Silahkan coba lagi!')</script>"; 
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Dream Store</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">  
        <?php echo $_SESSION['error']?> 
    </div>
 
    <div class="container"> 
        <form action="" method="POST" class="login-email"> 
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group"> 
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group"> 
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> 
            </div>
            <div class="input-group"> 
                <button name="submit" class="btn">Ayo login </button> 
            </div>
            <p class="login-register-text">Belum punya akun? <a href="registrasi.php">Daftar Sekarang</a></p> 
        </form>
    </div>
</body>
</html>