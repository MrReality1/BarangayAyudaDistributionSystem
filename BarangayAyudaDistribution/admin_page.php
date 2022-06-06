<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="page.css">

</head>
<body>
<header>
<img src="logo.png" class="img"></a>
<input type="checkbox" id="menu-bar">
<label for="menu-bar">Menu</label>
    <nav class="navbar">
        <ul>
        <li><a href="login_form.php" class="btn">login</a></li>
        <li><a href="register_form.php" class="btn">register</a></li>
        <li><a href="logout.php" class="btn">logout</a></li>
        </ul>
</nav>
</header>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Barangay Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is a Barangay Admin page</p>
   </div>

</div>

</body>
</html>