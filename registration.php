 <?php
session_start();
?> 
<!DOCTYPE html>
 <?php require_once("config.php"); ?> 
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
     -->
        <title>Signup</title> 
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"> -->
</head>
<body>

 <?php

include 'config.php';

if(isset($_POST['signup']))
{
    $username =mysqli_real_escape_string($dbcon,$_POST['username']);
    $email = mysqli_real_escape_string($dbcon,$_POST['email']);
    $mobile = mysqli_real_escape_string($dbcon,$_POST['mobile']);
    $branch = mysqli_real_escape_string($dbcon,$_POST['branch']);
    $year = mysqli_real_escape_string($dbcon,$_POST['year']);
    $domain = mysqli_real_escape_string($dbcon,$_POST['domain']);
    $password = mysqli_real_escape_string($dbcon,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($dbcon,$_POST['confirmpassword']);
    
     $pass = password_hash($password , PASSWORD_BCRYPT);
     $confirmpass = password_hash($confirmpassword , PASSWORD_BCRYPT);

     $emailq = "select * from user where email='$email'";
     $query = mysqli_query($dbcon,$emailq);
    $emailc= mysqli_num_rows($query);
    if($emailc>0){
        // echo "email already exists";
        ?>
        <script>
        alert("Email Already Exists");
        </script>
        <?php
    }else{
        if($password === $confirmpassword){
        $insertquery = " insert into user(username, email, mobile, branch, year, domain, password, confirmpassword) 
        values('$username','$email','$mobile','$branch','$year','$domain','$pass','$confirmpass')";
        
        $iquery = mysqli_query($dbcon,$insertquery);
        if($iquery){
            ?>
            <script>
            alert("Registered successfully");
            </script>
            
            <?php
            }else{
                ?>
                <script>
            alert("Registeration Not Successful");
            </script>
            <?php
            }

        }else{
            ?>
                <script>
            alert("password not matching");
            </script>
            <?php
        }
    }
}
?> 


    <div class="container1of2">
    <div class="container2">
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form2">
                
            <div class="heading2">
               <img src="urban-line-user-4.png" class="usericon2">
                
            </div>
            <div class="wrap2">
               <div class="f2">
                
                 <input type="text" placeholder="Name" name="username" required/>
                   <span class="focus-input"></span>
               </div> 
            </div>
            <div class="wrap2">
                <div class="f2">
                
                  <input type="email" placeholder="Email" name="email" required/>
                    <span class="focus-input"></span>
                </div> 
             </div>
             <div class="wrap2">
                <div class="f2">
                 
                  <input type="text" placeholder="Mobile Number" name="mobile" required/>
                    <span class="focus-input"></span>
                </div> 
             </div>
             <div class="wrap2">
                <div class="f2">
                  <input type="text" placeholder="Branch" name="branch" required/>
                    <span class="focus-input"></span>
                </div> 
             </div>
             
             <div class="wrap2">
                <div class="f2">
                  <input type="text" placeholder="Year" name="year" required>
                    <span class="focus-input"></span>
                </div> 
             </div>
             <div class="wrap2">
                <div class="f2">
                 
                  <input type="text" placeholder="Domain" name="domain" required>
                    <span class="focus-input"></span>
                </div> 
             </div>
               <div class="wrap2">
               <div class="f2">
                   
                <input type="password" placeholder="Password" name="password" required>
                  <span class="focus-input"></span>
              </div> 
            </div>
            <div class="wrap2">
                <div class="f2">
                   
                 <input type="password" placeholder="Confirm Password" name="confirmpassword" required/>
                   <span class="focus-input"></span>
               </div> 
             </div>
            
            <button type="submit" class="btn2" name="signup">Sign Up</button>
            <div class="textf2">
                <p>Already a member? <a href="login.php">Login Here</a></p>
            </div> 

            
        
        </form>
        <div class="image2">
            <img src="1678028.jpg" class="img2" alt=""/>
       
        </div>
        
    </div>
</div>

</body>
</html>