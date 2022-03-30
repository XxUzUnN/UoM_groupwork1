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
	<title>Groceries</title>
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
				<h1 class="text-center" style="font-size:75px; color:grey"><b>GROCERIES</b></h1>
					<br>
					<br>
					<div class = "foodCards">
					
						<div class="card" style = "margin-left: -200px">
							<a style="text-decoration:none" href="L3-groceries-whlung.php">
								<img src="images/L2-groceries-whlung.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM facility WHERE facilityId='17'";

										$pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:55px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-groceries-sainsbury's.php">
								<img src="images/L2-groceries-sainsbury's.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM facility WHERE facilityId='18'";

										$pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:5px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-groceries-morrisons.php">
								<img src="images/L2-groceries-morrisons.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM facility WHERE facilityId='19'";

										$pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:60px; margin-top:10px; font-size:35px">';
											echo ("<b>{$row['facilityName']}</b></h3>");
										}
									?>
								</div>
							</a>
						</div>
				
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				
						<div class="card">
							<a style="text-decoration:none" href="L3-groceries-coop.php">
								<img src="images/L2-groceries-coop.png" style="width:100%">
								<div class="container">
								<?php
										$sql = "SELECT facilityName FROM facility WHERE facilityId='20'";

										$pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

										foreach ($pdo->query($sql) as $row){
											echo '<h3 style="margin-left:100px; margin-top:10px; font-size:35px">';
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

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

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