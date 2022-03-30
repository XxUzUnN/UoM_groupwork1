<!DOCTYPE HTML>
<html>
<head>
	<style>
		.logo {
            text-align: center;
            margin-top: 10px;
        }

        .title {
            text-align: center;
            margin: 10px 0;
            color: #666;
            font-size: 100px;
        }

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		  height: 300px;
		  width: 30%;
		}
		
		.foodCards {
			display: flex;
			flex-direction: row;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		
		.container {
		  padding: 2px 16px;
		}

	</style>
	<title>Food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all" />


	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<link href="css/component.css" rel="stylesheet" type="text/css"  />

</head>

<body class="cbp-spmenu-push">



	<div class="header-section2">
			<div class="container">
				<div class="header-top">
					<div class="top-nav"></div>
					<div class="header-logo">
						<a href="index.html"><img src="images/logo.png"/></a>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
	</div>


		<div class="featured-section">
			<div class="review">
				<div class="container">
					<h1 class="text-center" style="font-size:75px; color:grey"><b>FOOD</b></h1>
					<br>
					<br>
					<div class = "foodCards">
					
						<div class="card" style = "margin-left: -200px">
							<a style="text-decoration:none" href="L3-food-fiveguys.php">
								<img src="images/L2-food-fiveguys.png" style="width:100%">
								<div class="container">
									<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='1'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:65px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-food-nando's.php">
								<img src="images/L2-food-nando's.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='2'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:80px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-food-taiwu.php">
								<img src="images/L2-food-taiwu.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='3'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:87px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-food-subway.php">
								<img src="images/L2-food-subway.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='4'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:85px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

				    </div>

					<br>
					<br>
					<br>

					<div class = "foodCards">
					
						<div class="card" style = "margin-left: -200px">
							<a style="text-decoration:none" href="L3-food-archie's.php">
								<img src="images/L2-food-archie's.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='5'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:77px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-Brewdog.php">
								<img src="images/L2-food-Brewdog.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='6'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:74px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-navarro.php">
								<img src="images/L2-food-navarro.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='7'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:80px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-pret.php">
							<img src="images/L2-food-pret.png" style="width:100%">
							<div class="container">
							<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='8'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:28px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
							</div>
							</a>
						</div>

				    </div>

					<br>
					<br>
					<br>

					<div class = "foodCards">
					
						<div class="card" style = "margin-left: -200px">
							<a style="text-decoration:none" href="L3-food-chimaek.php">
								<img src="images/L2-food-chemaek.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='9'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:70px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-zouk.php">
								<img src="images/L2-food-zouk.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='10'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:107px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-etci_mehmet.php">
								<img src="images/L2-food-etci_mehmet.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='11'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:45px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>

						<div class="card">
							<a style="text-decoration:none" href="L3-food-wasabi.php">
								<img src="images/L2-food-wasabi.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM Facility WHERE facilityId='12'";

										$pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:83px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>

				    </div>

				</div>
			</div>
		</div>	                                                            


		<div class="copy-right-section">
			<div id="footer">
				<div class="container">
					<div class="footer-grids">
								<p>Created by Jiho Park, Xinyu Li, Yining Du, Yuanye Dong, Zihao Chen and Zixun Zhou &copy 2022</p>	
						<div class="clearfix"> </div>							
					</div>
				</div>
			</div>
		</div>
</body>
</html>