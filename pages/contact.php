<?php
  session_start();
  include 'connection.php';
  include 'project.css';

?>


<!DOCTYPE html>  
<html>  
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link href="project.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>contact</title>
        <style>
            #contact {
              background: rgba(0, 0, 0, 0.5);
            }
        </style>
        
    </head>
<body>  
    
    <!--Navbar-->
    <div id="nav">
        <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
            <div class="container">
              <a href="#"><img src="../images/logo.png" id="logo" class="img-fluid"></a>  
               <a class="navbar-brand" href="home.html">Parallax</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
               <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a class="nav-link" href="home.php"><i class="fa fa-home fa-lg">Home</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="./about.php"><i class="fa fa-user fa-lg">AboutUs</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-bars fa-lg">Menu</i></a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-phone fa-lg">ContactUs</i></a></li>
                    </ul>   
               </div>
                          
            </div>
            
        </nav>
    </div>

    <!--Map-->
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223978.74205610622!2d77.25494152390773!3d28.69958101366755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bb41c50fdf%3A0xe6f06fd26a7798ba!2sGhaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1594843897840!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0; margin-bottom: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> 
    
    <!--Contact us-->
    <div class="container" >
        <div class="row row-content">
            <div class="col-12">
                <div>
                    <h1 style="color: honeydew; text-align: center;">CONTACT US</h1>
                    <p style="color: aliceblue; text-align: center;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="row row-content" style="margin: 5px;">
          <div class="col-12 col-sm-7" id="contact">
            <h2 style="color:azure; margin-top: 20px;">GET IN TOUCH</h2>
                <input class="col-sm-10" type="text" placeholder="First Name" style="height: 40px; margin: 7px;"><br>
                <input class="col-sm-10 type="text" placeholder="Last Name" style="height: 40px; margin: 7px;"><br>
                <input class="col-sm-10" type="number" placeholder="Phone Number" style="height: 40px; margin: 7px;"><br>
                <input class="col-sm-10" type="email" placeholder="Email Address" style="height: 40px; margin: 7px;"><br>
                <input class="col-sm-10" type="text" placeholder="Country" style="height: 40px; margin: 7px;"><br>
                <textarea class="col-sm-10" placeholder="Message" style="height: 80px; margin: 7px;"></textarea><br>
                <a class="btn btn-primary btn-lg" role="button" style="color: white; margin-bottom: 5px; margin: 7px;">Submit</a>
            </div>
            <div class="col-12 col-sm-5">
              <div style="background: whitesmoke;">
                <iframe class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223978.74205610622!2d77.25494152390773!3d28.69958101366755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bb41c50fdf%3A0xe6f06fd26a7798ba!2sGhaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1594843897840!5m2!1sen!2sin"  height="357" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item"><i class="fa fa-phone fa-lg">+91 8797066541</i></li>
                  <li class="list-group-item"><i class="fa fa-fax fa-lg">+91 7667809762</i></li>
                  <li class="list-group-item"><i class="fa fa-envelope"> <a href="#" style="font-size: 20px;">parallax@food.net</a> </i></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-5">
              
            </div>
            
            
          </div>
        </div>
            
      </div>

    <!--Footer-->

    <footer class="footer">
      <div class="container">

        <div class="row">
          <div class="col-4 col-sm-2">
            <h3>Links</h3>
            <ul class="list-unstyled">
              <li> <a href="#" style="color: azure;">Home</a> </li>
              <li> <a href="#" style="color: azure;">AboutUs</a> </li>
              <li> <a href="#" style="color: azure;">Menu</a> </li>
              <li> <a href="#" style="color: azure;">ContactUs</a> </li>
            </ul>
          </div>
          <div class="col-8 col-sm-6">
            <h3>Our Address</h3>
            <address>
              "T2-701 Signature Hieghts Rajnagar Extension, Ghaziabad",INDIA<br>
              <i class="fa fa-phone fa-lg">+91 8797066541</i><br>
              <i class="fa fa-fax fa-lg">+91 7667809762</i><br>
              <i class="fa fa-envelope"> <a href="#" style="color: azure; font-size: 20px;">parallax@food.net</a> </i><br>
            </address>
          </div>
          <div class="col-12 col-sm-4">
              <h3>Follow Us</h3>
              <a class="btn btn-social-icon btn-google" href="https://google.com"><i class="fa fa-google fa-lg" style="color:red; font-size:25px"></i></a>
              <a class="btn btn-social-icon btn-facebook" href="https://facebook.com"><i class="fa fa-facebook fa-lg" style="color: dodgerblue; font-size: 25px;"></i></a>
              <a class="btn btn-social-icon btn-linkedin" href="https://linkedin.com"><i class="fa fa-linkedin fa-lg" style="color:midnightblue; font-size: 25px;"></i></a>
              <a class="btn btn-social-icon btn-twitter" href="https://twitter.com"><i class="fa fa-twitter fa-lg" style="font-size: 25px;"></i></a>
              <a class="btn btn-social-icon btn-youtube" href="https://youtube.com"><i class="fa fa-youtube fa-lg" style="color: crimson; font-size: 25px;"></i></a>
              <a class="btn btn-social-icon" href="#"><i class="fa fa-envelope fa-lg" style="color: darkblue; font-size: 25px;"></i></a>
          </div>
        </div>
      </div>
      <div class="col-12 justify-content-center">
        <div class="container">
          <p style="color:azure; text-align: center;">&copy; Copyright 2020 PARALLAX RESTAURANTE</p>
        </div>
      </div>
    </footer>
 
</body>  
</html>  