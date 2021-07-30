<?php
session_start();
?> 
<!DOCTYPE html>
<?php require_once("config.php");?> 

<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
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

if(isset($_POST['submit']))
{
    $emails =mysqli_real_escape_string($dbcon,$_POST['emails']);
    $skills = mysqli_real_escape_string($dbcon,$_POST['skills']);
    $qualification = mysqli_real_escape_string($dbcon,$_POST['qualification']);
    $project1 = mysqli_real_escape_string($dbcon,$_POST['project1']);
    $project2 = mysqli_real_escape_string($dbcon,$_POST['project2']);
    $github = mysqli_real_escape_string($dbcon,$_POST['github']);
    $linkedin = mysqli_real_escape_string($dbcon,$_POST['linkedin']);
    $facebook = mysqli_real_escape_string($dbcon,$_POST['facebook']);
    $instagram = mysqli_real_escape_string($dbcon,$_POST['instagram']);
    
    $emailq = "select * from details";
     $query = mysqli_query($dbcon,$emailq);
    $emailc= mysqli_num_rows($query);


    
        $insertquery = " insert into details(emails,skills,qualification,project1,project2,github,linkedin,facebook,instagram) 
        values('$emails','$skills','$qualification','$project1','$project2','$github','$linkedin','$facebook','$instagram')";
        
        $iquery = mysqli_query($dbcon,$insertquery);
        if($iquery){

            ?>
            <script>
            alert("Submitted Successfully");
            </script>
            
            <?php
            ;
            ?>
            <script>location.replace("portfolio.php")</script>
            <?php
            }else{
                ?>
                <script>
            alert("Submission Not Successful");
            </script>
            <?php
             }
    
        }  
        
        if(isset($_POST['submit'])){
            $email = $_POST['emails'];        
            $email_s = "select * from details where emails = '$email' ";
            $newquery = mysqli_query($dbcon,$email_s);
        
            $email_c = mysqli_num_rows($newquery);
        
            if($email_c){
                $email_passs = mysqli_fetch_assoc($newquery);
        
        
               $_SESSION['emails'] = $email_passs['emails'];
               $_SESSION['qualification'] = $email_passs['qualification'];
               $_SESSION['skills'] = $email_passs['skills'];
               $_SESSION['project1'] = $email_passs['project1'];
               $_SESSION['project2'] = $email_passs['project2'];
               $_SESSION['github'] = $email_passs['github'];
               $_SESSION['facebook'] = $email_passs['facebook'];
               $_SESSION['linkedin'] = $email_passs['linkedin'];
               $_SESSION['instagram'] = $email_passs['instagram'];
               
            }else{
               
               }
            
        }
        
       

?> 


<div class="container1of2">
    <div class="container2">
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form2">
                
            <div class="heading2">
               <!-- <img src="urban-line-user-4.png" class="usericon2"> -->
                <h1>Let's Fill Up Your Details</h1>
            </div>
            <div class="wrap2">
               <div class="f2">
                
                 <input type="email" placeholder="Email" name="emails" required/>
                   <span class="focus-input"></span>
               </div> 
            </div>
            <div class="wrap2">
               <div class="f2">
               <h3>Skills</h3>
                 <input type="text" placeholder="Skills" name="skills" required/>
                   <span class="focus-input"></span>
               </div> 
            </div>
                
            
             <div class="wrap2">
                <h3>Qualification</h3>
               <div class="f2">
                 <input type="text" placeholder="Qualification" name="qualification" required/>
                   <span class="focus-input"></span>
               </div> 
            </div>
             <div class="wrap2">
                 <h3>Projects</h3>
                <div class="f2">
                  <input type="text" placeholder="Project-1" name="project1" required/>
                    <span class="focus-input"></span>
                </div> 
             </div>
             
             <div class="wrap2">
                <div class="f2">
                  <input type="text" placeholder="Project-2" name="project2" required>
                    <span class="focus-input"></span>
                </div> 
             </div>
             <div class="wrap2">
                 <h3>Social Media</h3>
                <div class="f2">
                 
                  <input type="text" placeholder="Github" name="github" required>
                    <span class="focus-input"></span>
                </div> 
             </div>
               <div class="wrap2">
               <div class="f2">
                   
                <input type="text" placeholder="Linkedin" name="linkedin" required>
                  <span class="focus-input"></span>
              </div> 
            </div>
            <div class="wrap2">
                <div class="f2">
                   
                 <input type="text" placeholder="Facebook" name="facebook" required/>
                   <span class="focus-input"></span>
               </div> 
             </div>
             <div class="wrap2">
                <div class="f2">
                   
                 <input type="text" placeholder="Instagram" name="instagram" required/>
                   <span class="focus-input"></span>
               </div> 
             </div>
            
            <button type="submit" class="btn2" name="submit">Submit</button>
            <div class="textf2">
                <!-- <p>Filled Already? <a href="portfolio.php">Click Here</a></p> -->
            </div> 

            
        
        </form>
        <div class="image2">
            <img src="1678028.jpg" class="img2" alt=""/>
       
        </div>
        
    </div>
</div>

</body>
</html>