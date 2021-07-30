<?php
session_start();


if(!isset($_SESSION['username'])){
  header('Location:login.php');
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
  

    <div class="container">
      <div class="header">
      <a href="logout.php">  <button class="btn" >Log Out</button></a>
      </div>

<div class="card">  
    <div class="card-background">
     
      <img src="gummy-mask.png" class="card-image">
  
    </div>
  
  
    <div class="card-info">
     
      <h1>Profile</h1>
  <br/>
      <p>Name : <?php echo $_SESSION['username']; ?> <br>Email:<?php echo $_SESSION['email']; ?> <br>Branch:<?php echo $_SESSION['branch']; ?> <br>Year: <?php echo $_SESSION['year']; ?> <br>Domain: <?php echo $_SESSION['domain']; ?> </p>
  </div>    
  </div>
  </div>
</body>
</html>