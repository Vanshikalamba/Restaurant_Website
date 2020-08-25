<?php 
session_start();
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php
				include "connection.php";
				$ids= $_GET['idAdd']; 
				$showquery =" select * from dishes where Id={$ids} ";
				$showdata = mysqli_query($connect,$showquery);

				$arrdata=mysqli_fetch_array($showdata);
				while($row=mysqli_fetch_array($arrdata)){
					?>
						<div class="col-md-3">

							<img src="<?php echo $row['dish_image']; ?>">
						</div>
						<div class="col-md-7">
							<h4><?php echo $row['dish_name']; ?></h4>
		                    <div><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
						</div>
					<?php
				}
				
			?>
		</div>
	</div>

</body>
</html>