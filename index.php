<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bankstyle.css">
    <link rel="stylesheet" type="text/css" href="css/navig.css">
    <title>Banking System</title>	
  </head>
  <body> 
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.10)), url(img/p12.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
				<h1 style="color:white">
                  Welcome to<span style="color:white"> OVISVA BANK</span><img style="width:10%;  height:10%;" src="img/p10.png"></h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img style="width:50%;  height:80%;"src="img/p3.png" class="img-fluid">
                    <br>
                    <a href="User.php"><button style="background-color: #3c73a8; color:black">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img style="width:50%;  height:80%;"src="img/p4.png" class="img-fluid">
                    <br>
                    <a href="MoneyTransfer.php"><button style="background-color: #3c73a8; color:black">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img style="width:50%;  height:80%;"src="img/p6.png" class="img-fluid">
                    <br>
                    <a href="TranstionDet.php"><button style="background-color: #3c73a8; color:black">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Oviya Svapna</b> <br> The Sparks Foundation</p>
		<a class="button"< href="https://www.linkedin.com/in/oviya-svapna-v-a769a2206/">
       <i class="fab fa-linkedin"></i>
     </a>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>