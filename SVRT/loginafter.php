<?php
session_start();
if(!isset($_SESSION['fname'])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SVRT</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<?php
if(!isset($dummy)){
  $dummy=0;
}
include "config.php";
  if(isset($_POST["sp"]))
   {
     $dummy=$_SESSION['fname'];
  $str="insert into item(itemname,price,dummy) values('Shashwatha Pooje',1000,'$dummy')";
  $query=mysqli_query($con,$str);
  ?>
  <script>alert("Shashwatha Pooje Seva has been added to your cart");</script>
   <script>location.replace("#pricing");</script>
   <?php
  }
  if(isset($_POST["hp"]))
  {
    $dummy=$_SESSION['fname'];
  $str2="insert into item(itemname,price,dummy) values('Hoovina Pooje',200,'$dummy')";
  $query=mysqli_query($con,$str2);
  ?>
  <script>alert("Hoovina Pooje Seva has been added to your cart");</script>
  <script>location.replace("#pricing");</script>
  <?php
  }
    if(isset($_POST["nd"]))
    
    {
      $dummy=$_SESSION['fname'];
      $str3="insert into item(itemname,price,dummy) values('Nandadeepa',300,'$dummy')";
      $query=mysqli_query($con,$str3);
      ?>
      <script>alert("Nandadeepa Seva has been added to your cart");</script>
      <script>location.replace("#pricing");</script>
      <?php
    }

?>


















  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="">SVRT</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Seva</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#history">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>

        </div>
      </nav>

      <h5 class="navbar-brand">'विठ्ठलं चिन्तयामि!'</h5>


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Find innner peace <span class="spirit">spiritually.</span></h1>
          <h3>Welcome to the web page of <br> Sri Vitobha Rukumai Temple,<br> Gundyadka, Moodbidri</h3>
        </div>

        <div class="col-lg-6">
        <img class="title-image" src="images/svr_pic_trans.png" alt="statue-pic">
        </div>

      </div>

    </div>

  </section>


  <!-- History -->

  <section class="white-section" id="history">

    <div class="container-fluid">

      <div class="row">
        <div class="history-box col-lg-4">
          <img class="history-img" src="images/vphoto.jpeg" alt="imgss"><br><br>
          <h3 class="history-title">Year</h3>
          <p>SVRT got established as a Bhajana Mandira in year of 1945, under the guidance of 7 leaders from 7 different houses</p>
        </div>

        <div class="history-box col-lg-4">
          <img class="history-img" src="images/v5.jpeg" alt="imgss"><br><br>
          <h3 class="history-title">Temple history</h3>
          <p>Pooja is being be done to the God everyday both during morning and evening since the bhajana mandira was established</p>
        </div>

        <div class="history-box col-lg-4">
          <img class="history-img" src="images/v2.jpg" alt="imgss"><br><br>
          <h3 class="history-title">Brahmakalasha</h3>
          <p>Brahmakalasha of the bhajana mandira was done from May 1-5 of 2020 and the temple got renamed as SVRT</p>
        </div>
      </div>


    </div>
  </section>


  <!-- Priests -->

  
  <section class="colored-section" id="priests">

<div id="priest-carousel" class="carousel slide" data-ride="false">
  <div class="carousel-inner">
    <div class="carousel-item active container-fluid">
      <h2 class="priest-text">Priests and Committee members</h2>

      <img class="priest-image" src="images/mahad.jpeg" alt="priest-profile">
      <em>Mahadev Paradkar</em>
      
      

      <section class="colored-section" id="p-details">
        <p><i class="fas fa-envelope"></i>paradkarmahadev@gmail.com <i class="fas fa-phone"></i>9467383648</p>

      </section>
    </div>
    <div class="carousel-item container-fluid">
      <h2 class="priest-text">Priests and Committee members</h2>
      <img class="priest-image" src="images/priest2.jpg" alt="lady-profile">
      <em> Subrahmanya Bhat</em>
      <section class="colored-section" id="p-details">
        <p><i class="fas fa-envelope"></i>subbhat@gmail.com <i class="fas fa-phone"></i>9256985698</p>

      </section>
    </div>
  </div>
  <a class="carousel-control-prev" href="#priest-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#priest-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>
  <!-- Pricing -->

 



  <form method="POST">


  <section class="white-section" id="pricing">

    <h2 class="section-heading">Seva offered in Sri Vitobha Rukumai Temple</h2>

    <p>Seva details are as follows</p> 



     <!-- cart -->



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Cart <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <th col span=20>Sl no.</th>
            <th col span=20>Item Name</th>
            <th col span=20>Price</th>

          </tr>
           
                  <!-- fetch -->

              <?php



               $x = 0;
               $sum=0;
              $str=" select * from item where dummy='$dummy'";
              $query=mysqli_query($con,$str);
             
              while($fet=mysqli_fetch_array($query))
              { ++$x;

                $a=$fet[1];  //itemname
                $b=$fet[2]; //price
                $sum=$sum+$b;
                
            


              ?>



          <tr>
            <td col span=20>
              <?php
              echo $x;
              ?>

            </td col span=20>
            <td>

            <?php
              echo $a;
              ?>

            </td>

            <td col span=20>
            <?php
              echo $b;
              }
              ?>

            </td>
          </tr>

          




          <!-- fetch -->
           <!--  reset -->
           <?php

           if(isset($_POST['reset']))
         {
       $str = "delete from item where fname='$dummy'";
       
     $query=mysqli_query($con,$str);
    
         }

     ?>
     <?php

      if(isset($_POST['confirm']))
    {
      

      ?>
      <script>location.replace("billing.php");</script>
      <?php
    }



      ?>

          
        </table>
      </div>
      <div class="modal-footer">
        <table method="POST">
      <button type="submit" class="btn btn-danger" name="reset">Reset Cart</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="confirm" class="btn btn-primary">Confirm Order</button> 
          <?php
          echo "Total=$sum";

          ?>                                                            
        </table>
      </div>
    </div>
  </div>
</div>


<!-- cart -->


    

    <div class="row">
    
    
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Shashwatha Pooje</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">₹1000</h2>
            <p>Nitya archane</p>
            <p>Duration : 1 year</p>
            <button name="sp" class="btn btn-lg btn-block btn-dark" type="submit">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Hoovina Pooje</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">₹200</h2>
            <p>Hoovinalankara</p>
            <p>Duration : 1 day</p>
            <button name="hp" class="btn btn-lg btn-block btn-dark" type="submit">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Nandadeepa</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">₹300</h2>
            <p>Nitya Tuppada Deepa</p>
            <p>Duration : 3 days</p>
            <button name="nd" class="btn btn-lg btn-block btn-dark" type="submit">Add to cart</button>

          </div>
        </div>
      </div>



    </div>

  </section>
  </form>

  <div id="gallery">

<br><br>



<h3 class="big-heading">Gallery</h3>

<br><br>

  <!-- Gallery -->

  <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */

</style>
</head>
<body>

<!-- Header -->


<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="images/1.jpeg" style="width:100%">
    <img src="images/2.jpeg" style="width:100%">
    <img src="images/6.jpeg" style="width:100%">
    
   
  </div>
 
  <div class="column">
  <img src="images/4.jpeg" style="width:100%">
  <img src="images/5.jpeg" style="width:100%">
    <img src="images/7.jpeg" style="width:100%">
  </div>
  
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


</div>








  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
    <a href="https://www.facebook.com/"><i class="social-icon fab fa-facebook-f"></i></a>
      <a href="https://www.twitter.com/"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/"><i class="social-icon fab fa-instagram"></i></a>
      <a href="https://www.gmail.com/"><i class="social-icon fas fa-envelope"></i></a>
      <p>© Copyright 2020 SVRBM</p>
      <a href="https://www.youtube.com/watch?v=yx_tdUNUumM&t=1443s">Click here for documentary</a>
    </div>

<!-- map -->

    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="1400" height="310" id="gmap_canvas"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62180.45724849944!2d74.9135922145267!3d13.08152297782299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba3552540d6b9f3%3A0xdb32b0d0ae5f5270!2sVithobha%20Bhajana%20Mandira!5e0!3m2!1sen!2sus!4v1607448649765!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

        
        
      <style>
        .mapouter {
          position: relative;
          text-align: right;
          height: 310px;
          width: 1500px;
        }

        .gmap_canvas {
          overflow: hidden;
          background: none !important;
          height: 310px;
          width: 1500px;
        }
      </style>
    </div>
  </footer>


</body>

</html>
