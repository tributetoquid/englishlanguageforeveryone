<?php
session_start();
require_once "util.php";
require_once "pdo.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Using Font Awesome -->
    <script src="https://kit.fontawesome.com/3d9f0ba563.js" crossorigin="anonymous"></script>
    <!-- Title Icon -->
    <link rel="icon" type="image/png" href="images/logo.png">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/log_in.css">
    	<!-- Syling notification -->
	<link rel="stylesheet" href="styles/notification.css">
    <title>Password Message</title>
</head>
<body class="body_login">
     <header class="text-primary">
     <div class="nav">
            <!-- Nav menu with side menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light pmd-navbar pmd-z-depth fixed-top">
              
              <button class="navbar-toggler pmd-navbar-toggle" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="index.php" title="Home">English Language for Everyone</a>
              <div class="pmd-sidebar-overlay"></div>
              <div class="collapse navbar-collapse pmd-navbar-sidebar bg-light p-2 notify-menu" id="navbarSupportedContent" >
                  <ul class="navbar-nav ml-auto items text-center">
                      <li class="nav-item dropdown pmd-dropdown ">
                          <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" data-sidebar="true" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Courses
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <i class="dropdown-item">Level Classes
                                  <ul class="submenu dropdown-menu">
                                      <li class="dropdown-item"><a href="#">Level 1</a> </li>
                                      <li class="dropdown-item"><a href="#">Level 2</a> </li>
                                      <li class="dropdown-item"><a href="#">Level 3</a> </li>
                                      <li class="dropdown-item"><a href="#">Level 4</a> </li>
        
                                  </ul>
                            </i>
                              <i class="dropdown-item" href="#">Advance Classes
                                      <ul class="submenu dropdown-menu">
                                      <li class="dropdown-item"><a href="#">Perspective 1</a> </li>
                                      <li class="dropdown-item"><a href="#">Perspective 2</a> </li>
                                      <li class="dropdown-item"><a href="#">Perspective 3</a> </li>
                                     </ul>
                              </i>
        
                              <div class="dropdown-divider"></div>
                              <i class="dropdown-item" href="#">Special classes
                                     <ul class="submenu dropdown-menu">
                                      <li class="dropdown-item"><a href="#">Intercom Grammar</a> </li>
                                      <li class="dropdown-item"><a href="#">Special Grammar</a> </li>
                                      <li class="dropdown-item"><a href="#" title="Professional English Language Class">PELC</a> </li>
                                      <li class="dropdown-item"><a href="#">Writing Class</a> </li>
                                      <li class="dropdown-item"><a href="#">Conversation Class</a> </li>
                                      <li class="dropdown-item"><a href="#">Vocabulary Class</a> </li>
                                      <li class="dropdown-item"><a href="#">Special Grammar</a> </li>
                                    </ul>
                              </i>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-primary" href="about.php">About Us</a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link text-primary active" href="log_in.php" title="Continue to your Account">Log In</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-primary" href="sign_up.php" title="Create Account">Sign Up</a>
                     </li>
                      <li class="nav-item">
                      
                      </li>
            </ul>
                
                       
                        
                  </div>
                 
                  </ul> 
              </div>
             
              <div class="pmd-sidebar-overlay"></div>
          </nav>
          </div>
    
        
    </header> 

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class=" col-md-5 offset-md-5  form-div">
                        <h3 class="text-center">Password Recovery</h3>
                        <p class="text-center">An email has just been sent to the email provided. Please check your inbox
                            for further process. </p>

                        <hr>
                   

                </div>
            </div>
        </div>

    </main>
    <footer>
    <?php
       footer();
       ?>
    </footer>
    <script src="script.js"></script>

<!-- Bootstrap JavaScript and Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </html>