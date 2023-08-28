<?php
@include 'config.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <div class="content">
         <h3>hi, <span>user</span></h3>
      <p>Welcome, you are logged in</p>
      <a href="home.php" class="btn">Login Home</a>
      <a href="NEP1.php" class="btn">NEP 1</a>
      <a href="NEP2.php" class="btn">NEP 2</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>
</body>
</html>