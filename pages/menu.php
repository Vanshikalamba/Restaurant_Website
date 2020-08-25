<?php
  session_start();
  include 'connection.php';
  include 'project.css';

?>


<!DOCTYPE html>
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
<body>

    <!--Navbar-->
    <div id="nav">
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
            <div class="container">
                <a href="logo.html"><img src="../images/logo.png" id="logo" class="img-fluid"></a>  
                <a class="navbar-brand" href="home.html">Parallax</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="home.php"><i class="fa fa-home fa-lg">Home</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><i class="fa fa-user fa-lg">AboutUs</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-bars fa-lg">Menu</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa fa-phone fa-lg">ContactUs</i></a></li>
                    </ul>  
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="btn btn-success my-2 my-sm-0" type="submit" role="button" data-toggle="modal" data-target="#loginModal" style="background: yellowgreen; width: 100px;">Search</a>
                    </form> 
                </div>
            </div>
            
        </nav>
    </div>

    <!-- Dishes -->
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-3 dishes_filters">
                <h4 class="menu_options text-center" style="font-size: 35px;"><i class="fa fa-bars"></i>MENU</h4>
                <h3 class="menu_options "><a href="contact.html" onclick="">Burgers</a></h3>
                <h3 class="menu_options"><a href="#">Pizza</a></h3>
                <h3 class="menu_options"><a href="#">Deserts</a></h3>
                <h3 class="menu_options"><a href="#">Vegetarian</a></h3>
                <h3 class="menu_options"><a href="#">Snacks</a></h3>
            </div>
            <div class="col-md-9 dish_card">
                <h1 class="text-center" style="font-size: 35px; color: yellowgreen;">FOODIES</h1>
                <div class="row dish_row" >
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish1.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-danger" style="margin: 10px;">NEW</span><span class="badge badge-secondary" style="margin: 10px;">$9.22</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row" style="margin-bottom: 10px;">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish2.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px;">$5.22</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish3.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px;">$7.45</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish4.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-danger" style="margin: 10px;">HOT</span><span class="badge badge-secondary" style="margin: 10px;">$8.38</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish5.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px;">$6.34</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/dish6.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px">$7.43</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/recipe2.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px">$7.43</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
                <div class="row dish_row">
                    <div class="col-lg-3" style="padding-left: 0px;">
                        <img src="../images/recipe3.png"  style="width:220px; height:150px;">
                   </div>
                   <div class="col-md-7 dish_desc" style="color: whitesmoke;">
                       <h4>Uthappizza<span class="badge badge-secondary" style="margin: 10px">$7.43</span></h4>
                       <p><i class="fa fa-map-marker"></i> Calangute,Goa</p>
                       <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                       <div>
                       <span class="user_rating">
                        <span>8.1</span>
                       </span>
                       &nbsp;
                       <span>
                       Excellent!!
                       </span>
                       </div>
                   </div>
                    <div class="col-md-2" style="margin-top:50px; text-align: center;">
                        <button type="button" class="btn btn-primary active form-control" style="background: rgb(122, 161, 43); border: none; font-size: 15px;">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 3px;"></i></button>
                   </div>
                </div>
            </div>
        </div>
        
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>