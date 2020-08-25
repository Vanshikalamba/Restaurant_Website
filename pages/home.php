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
    #cart_count {
      border-radius: 50%;
      background: black;
      width: 100px;
      color: white;
      padding: 4px;
      height: 20px;
    }
  </style>
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
                        <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-home fa-lg">Home</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><i class="fa fa-user fa-lg">AboutUs</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php"><i class="fa fa-bars fa-lg">Menu</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa fa-phone fa-lg">ContactUs</i></a></li>
                    </ul>  
                    <form class="form-inline my-2 my-lg-0">
                      <button class="btn btn-secondary" style="background-color: yellowgreen; margin: 5px; width: 100px;">
                        <i class="fa fa-shopping-cart" style="margin: 2px;"></i><a href="cart.php" style="text-decoration: none; color: black;">Cart</a>
                        <?php 
                          if(isset($_SESSION['shopping_cart'])) {
                            $count=count($_SESSION['shopping_cart']);
                            echo "<span id=\"cart_count\" >$count</span>";
                          }
                          else {
                            echo "<span id=\"cart_count\">0</span>";
                          }
                        ?>
                        
                      </button>
                      <a class="btn btn-success my-2 my-sm-0" type="submit" role="button" data-toggle="modal" data-target="#loginModal" style="background: yellowgreen; width: 100px;">Sign In</a>
                    </form> 
               </div>
                          
            </div>
            
        </nav>
    </div>
    
    <!--sign in  Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Sign In</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                  <label for="firstname" class="col-md-3 col-form-label">First Name</label>
                  <div class="col-md-8">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="lastname" class="col-md-3 col-form-label">Last Name</label>
                  <div class="col-md-8">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                  </div>
              </div>
              <div class="form-group row">
                <label for="telnum" class="col-12 col-md-3 col-form-label">Contact Tel.</label>
                <div class=" col-md-8">
                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                </div>
              </div>
              <div class="form-group row">
                <label for="emailid" class="col-md-3 col-form-label">Email</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="approve" value="">
                    <label class="form-check-label">Remember Me</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" style="background: yellowgreen;">Sign In</button>
          </div>
        </div>
      </div>
    </div>


    <!--Reserve a Table-->
    <div class="modal fade" id="Reserve_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Reserve a Table</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Number of Guests</label>
                  <div class="col-md-6">
                      <input type="radio" value="one">
                      <label for="one">1</label>&nbsp;&nbsp;
                      <input type="radio"  value="two">
                      <label for="one">2</label>&nbsp;&nbsp;
                      <input type="radio"  value="three">
                      <label for="one">3</label>&nbsp;&nbsp;
                      <input type="radio"  value="four">
                      <label for="one">4</label>&nbsp;&nbsp;
                      <input type="radio" value="five">
                      <label for="one">5</label>&nbsp;&nbsp;
                      <input type="radio" value="six">
                      <label for="one">6</label>&nbsp;&nbsp;
                  </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Date and Time</label>
                <div class="col-12 col-sm-3">
                    <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-12 col-sm-3">
                  <input type="time" class="form-control" placeholder="Time">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Section</label>
                <div class="col-12 col-md-6">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-success active">
                      <input type="radio" name="options" id="option1" autocomplete="off" checked>Vegertarian
                    </label>
                    <label class="btn btn-danger">
                      <input type="radio" name="options" id="option2" autocomplete="off">Non-vegetarian
                    </label>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" >Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel -->
    
    <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/check.png" alt="First slide">
                <div class="carousel-caption ">
                  <div class="d-none d-md-block" id="box">
                    <h6>RESTAURANTE</h6>
                    <p>PARALLAX</p><br>
                    <a class="btn btn-success" type="submit" role="button" data-toggle="modal" data-target="#Reserve_form" style="background: yellowgreen; width: 180px; margin-bottom: 45px; font-size: 20px;">Sign In</a>
                  </div>
                </div>
          </div>

          <div class="carousel-item">
            <img src="../images/four.png" alt="Second slide">
          </div>

          <div class="carousel-item">
            <img src="../images/one.png" alt="Third slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    
    <!-- Top dishes -->
    <div class="container">
      <h1 class="text-center" style="color: #fff;">TOP RECIPES</h1>
    <div class="row text-center py-5">
      <?php 

        $query="SELECT * FROM dishes ORDER BY id ASC";
          $result=mysqli_query($connect,$query);
          if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_assoc($result)) {
              ?>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form method="POST" action="home.php?action=add&id=<?php echo $row['id'];?>">
                      <div class="card shadow" style="background: rgba(0,0,0,0.2); border: none;">
                        <div>
                          <img src="<?php echo $row['dish_image'];?>" alt="media1" class=" card-img-top">
                        </div>
                        <div class="card-body" style="color: whitesmoke;">
                          <h5 class="card-title"><?php echo $row['dish_name'];?></h5>
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
                            <small><s class="text-secondary">$5.99</s></small>
                            <span class="price" name="dish_price"><?php echo $row['dish_price'];?></span>
                          </h5>
                          <button type="submit" name="add" class="btn btn-warning my-3" style="text-decoration: none; color: #000;"><a href="#?idAdd=<?php echo $row['id']; ?>">Add to Cart</a><i class="fa fa-shopping-cart"></i></button>
                          <center><input type="text" name="quantity" class="form-control w-25" value="1" style="text-align: center;"></center>
                          <input type="hidden" name="hidden_name" value=<?php echo $row['dish_name'];?>>
                          <input type="hidden" name="hidden_price" value=<?php echo $row['dish_price'];?>>

                        </div>
                      </div>
                    </form>
                  </div>
              <?php
            }
          }
      ?>
    </div>

    <div class="clear:both"></div>
    <br />
    <h3>Order Details</h3>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width="40%">Item Name</th>
          <th width="10%">Quantity</th>
          <th width="20%">Price</th>
          <th width="15%">Total</th>
          <th width="5%">Action</th>
        </tr>
        <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
              ?>
              <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td>$ <?php echo $values["item_price"]; ?></td>
                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
              </tr>
              <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
              ?>
              <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
              </tr>
          <?php
          }
          ?>
              
    </table>
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

<?php 
  
  if(isset($_POST["add"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id))
    {
    $count = count($_SESSION["shopping_cart"]);
    $item_array = array(
    'item_id'   =>  $_GET["id"],
    'item_name'   =>  $_POST["hidden_name"],
    'item_price'    =>  $_POST["hidden_price"],
    'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][$count] = $item_array;
    }
    else
    {
    echo '<script>alert("Item Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
    'item_id'   =>  $_GET["id"],
    'item_name'   =>  $_POST["hidden_name"],
    'item_price'    =>  $_POST["hidden_price"],
    'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}
 
if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
    if($values["item_id"] == $_GET["id"])
    {
    unset($_SESSION["shopping_cart"][$keys]);
    echo '<script>alert("Item Removed")</script>';
    echo '<script>window.location="index.php"</script>';
    }
    }
  }
}
 
?>