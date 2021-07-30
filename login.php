<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Login</title> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</head>
<body>
<?php

include 'config.php';
if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_s = "select * from user where email = '$email' ";
    $query = mysqli_query($dbcon,$email_s);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

       $db_pass = $email_pass['password'];

       $_SESSION['username'] = $email_pass['username'];
       $_SESSION['email'] = $email_pass['email'];
       $_SESSION['branch'] = $email_pass['branch'];
       $_SESSION['year'] = $email_pass['year'];
       $_SESSION['domain'] = $email_pass['domain'];
       $pass_d = password_verify($password,$db_pass);

       if($pass_d){
           
        ?>
        <script>alert("Logged In");
</script>
        <?php
        ;
           ?>
           <script>location.replace("details.php")</script>
           <?php
       }else {
        ?>
        <script>alert("Password Incorrect");
</script>
        <?php   
        
       }
       
    }else{
        ?>
        <script>alert("Invalid Email");
</script>
        <?php
       }
    
}

?>

    <div class="container1">
    <div class="container">
        <div class="image">
            <img src="1678028.jpg" class="img" alt=""/>
       <h1>WELCOME BACK !</h1>
        </div>
        <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="heading">
               <img src="urban-line-user-4.png" class="usericon">
            </div>
            <div class="wrap">
               
                <label class="label">Email</label> 
                
                 <input type="email" name="email" placeholder="person_outline">
                 
                   <span class="focus-input"></span>
            
            </div>
               <div class="wrap">
               
                   <label class="label">Password</label>
                <input type="password" name="password" placeholder="vpn_key">
                  <span class="focus-input"></span>
              
            </div>
            
            <button class="btn" name="signin">Sign In</button>
            <div class="textf">
                <p>New Here? <a href="registration.php">Register Here</a></p>
            </div> 

            
</form>
        
    </div>
</div>

</body>
</html>