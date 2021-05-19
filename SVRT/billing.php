
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no">
	
	<title>Service receipt</title>
	
	<link rel='stylesheet' type='text/css' href="css/billing.css">

</head>

<body>


	<div id="page-wrap">

		<div id="header">INVOICE</div>
		<hr>
		
		
		<div id="identity">
		
            <div id="address"><br>
			Shri Vitobha Rukumai Temple<br>
			Shrinivasapura Gundyadka<br>
			Moodbidri,DK<br>
			Phone:9902145643<br><br>
			

            
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

		<div id="address">
			<b>Billing Address:</b><br>
			<p><span>user</span><br>7th cross , 8th block,Banashankari, Blore</p><br>		</div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice No</td>
                    <td><div>
							1011</p>
						</div>
					</td>
                </tr>

                <tr>
                    <td class="meta-head">Date</td>
                    <td><div id="date"> <?php echo date("d-m-Y"); ?>  </p></div></td>
				</tr>

                <tr>
                    <td class="meta-head">Service delivery </td>
                    <td><div id="date">
							7 working days					</div>
					</td>
                </tr>

				<tr>
					<td class="meta-head">Payment method</td>
					<td><div class="due"> cash</div></td>
				</tr>

            </table>
		
		</div>
		
		<table >
          <tr>
            <th colspan=20>Sl no.</th>
            <th colspan=20>Item Name</th>
            <th colspan=20>Price</th>

          </tr>
           
                  <!-- fetch -->

			  <?php
			  
			  session_start();
			  include "config.php";
			  $dummy=$_SESSION['fname'];




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
            <td colspan=20>
              <?php
              echo $x;
              ?>

            </td colspan=20>
            <td>

            <?php
              echo $a;
              ?>

            </td>

            <td colspan=20>
            <?php
              echo $b;
              }
              ?>

            </td>
          </tr>

          



          
		  </table>
      
      <br>
      
      
      <br><br><br><br><br>
      
      



          <!-- fetch -->
           <!--  reset -->
    
          
        

		<form method="POST">
		
		<div id="terms">
			<br><br><br>
      <?php
              echo "Total= $sum";
             
              ?>
              <br><br><br>
		  <button onclick="window.print()">Print receipt</label></button>
		  <br><br><br>
		  <button type="submit" name="back" class="btn btn-primary">back</button> 
		  <div>Thank You for using SVRT Online services</div>
		</div>

		
	
	</div>
	<?php

	if(isset($_POST['back']))
    {
      

      ?>
      <script>location.replace("loginafter.php");</script>
      <?php
	}
	?>
	
</body>

</html>