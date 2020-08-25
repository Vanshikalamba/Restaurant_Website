<?php
  session_start();
  include 'connection.php';
  include 'project.css';

?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="project.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>home</title>
  </head>

  <style>
    img {
      max-width: 100%;
      height: 170px;
      /* background: rgb(252, 229, 100);
      background: radial-gradient(rgb(235, 211, 80) 30%, yellow); */
      background-blend-mode: multiply;
    }
    .fa-star , .fa-star-o {
      color: yellow;
      padding: 3% 0%;
    }
  </style>
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
                        <li class="nav-item"><a class="nav-link" href="home.php"><i class="fa fa-home fa-lg">Home</i></a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-user fa-lg">AboutUs</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php"><i class="fa fa-bars fa-lg">Menu</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa fa-phone fa-lg">ContactUs</i></a></li>
                    </ul>   
               </div>
                          
            </div>
            
        </nav>
    </div>
    
    <!-- About Us Jumbotron -->
    <div class="jumbotron jumbotron-fluid col-12">
        <div class="container">
            <div id="jumbotron_caption">
                <h1>ABOUT US</h1>
            </div>
        </div>
    </div>

    



    <!-- rough -->
    
    <div class="container">
      <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card1.png" alt="media1" class=" card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card2.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card3.png" alt="media1" class=" card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card4.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card5.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card6.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card7.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form method="POST">
            <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
              <div>
                <img src="../images/card8.png" alt="media1" class="card-img-top">
              </div>
              <div class="card-body" style="color: whitesmoke;">
                <h5 class="card-title">Product1</h5>
                <h6>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </h6>
                <p class="card-text">
                  Some quick example text to build on the card.
                </p>
                <h5>
                  <small><s class="text-secondary">$5.19</s></small>
                  <span class="price">$5.99</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart<i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </form>
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
                "T2-701 Signature Hieghts Rajnagar Extension, Ghaziabad",INDIA<br><br>
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
  
  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>