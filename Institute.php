<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>BlackBoard.lk | Institute</title>
	<style>
  		table
  		{
   			border-collapse: collapse;
   			width: 92%;
   			color: #000;
   			font-size: 15px;
   			margin-left: 50px;
     	}
     	td
     	{
     		float: left;
     		padding-left: 350px;
     	}
     	@media (max-width: 1131px)
     	{
     		td
     		{
     			padding-left: 180px;
     		}
     	}
  tr:nth-child(even) {background-color: transparent;}
 </style>
	<link rel="stylesheet" type="text/css" href="Institute.css">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="demo.css">
  	<link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
	<script src="script.js" defer></script>
</head>
<body>
	<nav class="navbar">
	<div class="brand-title">
	<img src="Logo.png">
	</div>
	<a href="#" class="toggle-button">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</a>
	<div class="navbar-links">
		<ul>
			<li class="active1"><a href="Index.php"><b>News Feed</b></a></li>
			<li class="active2"><a href="Class.php"><b>Classes</b></a></li>
      <li class="active3"><a href="Papers.php"><b>Past Papers</b></a></li>
			<li class="active4"><a href="About Us.php"><b>About Us</b></a></li>
		</ul>
	</div>
</nav>

<div class="title">
	<h1>
		<?php
			$uname = $_REQUEST["name"];
				echo "Institutes of $uname";
		?>
	</h1>
</div>

		<?php
  			$conn = mysqli_connect("localhost", "root", "", "tution");
  			// Check connection
  				if ($conn->connect_error) 
  				{
   					die("Connection failed: " . $conn->connect_error);
  				} 
  					$sql = "SELECT name,tel,image FROM class WHERE district = '$uname'";
  					$result = $conn->query($sql);
  				if ($result->num_rows > 0) 
  				{
   					// output data of each row
   					while($row = $result->fetch_assoc()) 
   					{
						?>

							<table>
								<tr>
									<td>
										<a href="#"><?php echo "<img src=" . $row['image'] . ">"; ?></a>
									</td>

									<td style="padding-left: 50px;">
										<a href="http://localhost/Tution/load.php?cname=Name" onMouseOver="this.style.color='#FF5100'" onMouseOut="this.style.color='#000'" style="text-decoration: none; color: #000;"><?php echo "<h2>" . $row['name'] . "</h2>"; ?>
										<?php echo "<h2>" . $row['tel'] . "</h2>"; ?></a>
									</td>
								</tr>
							</table>

						<?php
					}
				} 
				else 
					{ 
						echo ""; 
					}
			$conn->close();
		?>
<footer class="footer-distributed">

      <div class="footer-left">

        <h3><span>BlackBoard.lk</span></h3>

        <p class="footer-links">
          <a href="Index.html">News Feed</a>&nbsp;&nbsp;&nbsp;
          <a href="Class.html">Classes</a>&nbsp;&nbsp;&nbsp;
          <a href="Papers.html">Past Papers</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="About Us.html">About US</a>&nbsp;&nbsp;&nbsp;
        </p>

        <p class="footer-company-name">Solution by<br>BlackBoard.lk &copy; 2020</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>NSBM Green University</span> Homagama, Sri lanka</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>(+94) 2 746 781, (+94) 77 369 7070</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">info@blackboard.lk</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span><h3 style="font-family: Century Gothic">About The Company</h3></span>
          OWINRO HOTEL SUPPLIERS (PVT) LIMITED, Importing and locally purchasing raw materials of Bed Linen, Barth Linen and Table Linen and processing high quality Bed Line, Barth Linen and Table Linen for HORECA market & Household market under “OKLI HOLDINGS” brand name. “OKLI HOLDINGS” will be the trusted brand name in HOREKA & Household market shortly.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook" style="color: #fff;"></i></a>
          <a href="#"><i class="fa fa-twitter"style="color: #fff;"></i></a>
          <a href="#"><i class="fa fa-linkedin" style="color: #fff;"></i></a>
          <a href="#"><i class="fa fa-instagram" style="color: #fff;"></i></a>
          <a href="#"><i class="fa fa-google-plus" style="color: #fff;"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>
