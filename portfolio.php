<?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "style4.css">
</head>
<body>
    <!-- header -->
    <header>
        <nav class = "navbar">
            <div class = "navbar-sm">
                <a class = "navbar-brand">Portfolio</a>
                <button class = "navbar-toggler-show" type = "button" id = "navbar-toggler-show">
                    <i class = "fas fa-bars"></i>
                </button>
            </div>

            <div class = "navbar-collapse flex-center" id = "navbar-collapse">
                <button class = "navbar-toggler-close" id = "navbar-toggler-close">
                    <i class = "fas fa-times"></i>
                </button>
                <ul class = "navbar-nav">
                    
                    <li class = "nav-item">
                        <a href = "logout.php" class = "nav-link">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class = "header-content flex-center">
            <h1>Welcome To My Portfolio</h1>
            <div class = "btn-group">
           <a href="#aboutme">     <button type = "button" class = "btn btn-purple">Get Started</button></a>   
            </div>
        </div>
    </header>
    <!-- end of header -->    

    
    <section class = "sec-3 py-3 reveal" id="aboutme">
        <h1 class = "lg-title">About Me</h1>
        <div class = "container">
          <div class="container3"> <h3>Name :<?php echo $_SESSION['username']?></h3>
            <h3>Email:<?php echo $_SESSION['emails']?></h3>
            <h3>Branch:<?php echo  $_SESSION['branch']?></h3>
            <h3>Year :<?php echo $_SESSION['year']?></h3>
            <h3>Domain:<?php echo $_SESSION['domain']?> </h3>
        </div> 
            
        </div>
    </section>
    
    <section class = "sec-4 py-3">
        
        <i class="quote">“You only live once, but if you do it right, once is enough.” — Mae West</i>
    </section>
    

    <section class = "sec-5 py-3 reveal">
        <h1 class = "lg-title">Skills</h1>
        <h4><?php echo $_SESSION['skills']?></h4>
        <div class = "container">
            
        </div>
    </section>
    

    

    
    <section class = "sec-7 py-3 reveal">
        <h3 class = "lg-title">Qualifications</h3>
        <h4><?php echo $_SESSION['qualification']?></h4>
        <div class="container4">
            <h2></h2>
            </div>
        
    </section>
    
<section class = "sec-6 py-3 reveal">
    <h1 class = "lg-title">Projects</h1>
    <div class = "container">
        <div class = "sec-item">
            <div class = "item-img">
                <img src = "images/blog-img-1.jpg">
            </div>
            <div class = "item-content">
                <h3 class = "md-title">Project1</h3>
                
                <p class = "text"><?php echo $_SESSION['project1']?></p>
            </div>
        </div>
        <div class = "sec-item">
            <div class = "item-img">
                <img src = "images/blog-img-2.jpg">
            </div>
            <div class = "item-content">
                <h3 class = "md-title">Project2</h3>
                
                <p class = "text"><?php echo $_SESSION['project2']?></p>
            </div>
        </div>
    </div>
</section>


    <section class = "sec-8 py-3">
        <h1 class = "lg-title">Social Media</h1>
        <div class = "container">
              <div class = "sec-item reveal">
                <a href="<?php echo $_SESSION['github']?>">    <span class = "flex-center">
                    <i class = "fab fa-github"></i>
                </span> </a>
            </div>
            <div class = "sec-item reveal">
                <a href="<?php echo $_SESSION['linkedin']?>">     <span class = "flex-center">
                   <i class = "fab fa-linkedin"></i>
                </span></a>
              </div>
           <a href="<?php echo $_SESSION['facebook']?>"> <div class = "sec-item reveal">
                <span class = "flex-center">
                    <i class = "fab fa-facebook"></i>
                </span>
            </div></a>
            <a href="<?php echo $_SESSION['instagram']?>"><div class = "sec-item reveal">
                <span class = "flex-center">
                    <i class = "fab fa-instagram"></i>
                </span>
            </div></a>
        </div>
    </section>
    

    <footer class = "py-3">
       
        <div class = "footer-text">
            <p>&copy; Copyright 2021 
        </div>
    </footer>

    
    <script src = "script.js"></script>

</body>
</html>