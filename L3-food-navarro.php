<!DOCTYPE HTML>
<html>
<head>
<title>Single</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gourmet Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--start-smoth-scrolling-->
<!--webfonts-->
	<link href='http://fonts.useso.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<!--webfonts-->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
</head>
<body class="cbp-spmenu-push">


<!--header-->
	<div class="header-section2">
			<div class="container">
				<div class="header-top">
					<div class="top-nav"></div>
					<div class="header-logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>
					<div class="search-form">
						<form>
							<input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}" required="">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!--/header-->
		<!-- Blog -->
		<div class="blog">
			<div class="container">
				<div class="blog-content">
					<div class="container">
					<div class="blog-content-left">
						<div class="blog-articals">
							<div class="blog-artical">
							<div class="blog-artical-info">
								<ul class="product-head">
									<li><a href="index.html">Home</a> <span>::</span></li>
									<li class="active-page">single</li>
									<div class="clear"> </div>
								</ul>

								<div class="blog-artical-info-head single-head">
								<h2>Navarro Lounge</h2>

								</div>
								<div class="blog-artical-info-img single-head-img">
									 <img src="images/L3-food-navarro.png" alt="image">
								</div>

							<div class="blog-artical-info-text">
									<p>Lounges was founded in 2002 by a trio of long standing friends, Dave Reid, Alex Reilley and Jake Bishop. Having spent years in the restaurant and bar trade – not to mention just as many propping up the bars in Bristol (all of course in the name of research) – they decided it was time they did their own thing. The motivation was simple and very selfish; they wanted somewhere to drink themselves.</p>
									<p>Our menus reflect our personality. We take food really seriously, using the best fresh produce in really creative dishes, but we also make sure our menus are about pleasure, indulgence, and fun! A bit like us</p>
									<p>https://thelounges.co.uk/about/</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="reply">
                            <h4>Leave Your Reply</h4>
                            <form method="POST">
                                <input onblur="if (this.value == '') {this.value = 'Name';}" onfocus="this.value = '';" type="text" id="username" name="username" value="Name">
                                <input onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" type="text" id="email" name="email" value="Name">
                                <textarea onblur="if (this.value == '') {this.value = 'Reply';}" onfocus="this.value = '';" type="text" id="content" name="content">Comment</textarea>
                                <input type="submit" value="Submit"/>
                            </form>
                        </div>
                        
                        
                        <?php
                            function registerComment(){
                                $un = $_POST['username'];
                                $em = $_POST['email'];
                                $cm = $_POST['content'];
                                $time = date('Y-m-d H:i:s');

                                $sql = "INSERT INTO fiveguys (username, email, content, commentTime)
                                        VALUES (:userId, :userEmail, :userContent, :userCommentTime)";

                                $pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    'userId' => $un,
                                    'userEmail' => $em,
                                    'userContent' => $cm,
                                    'userCommentTime' => $time
                                ]);
                            }

                            function showComments(){
                                        
                                $sql = "SELECT * FROM fiveguys ORDER BY commentTime DESC";
                            
                                $pdo = new pdo('mysql:host=localhost;dbname=mmyyddbb', 'root', '12345687');
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                
                                foreach ($pdo->query($sql) as $row){
                                    echo '<div class="comments-main">';
                                    echo '  <div class="col-md-10 cmts-main-right">';
                                    echo ("     <h5>{$row['username']}&nbsp&nbsp&nbsp&nbsp{$row['email']}</h5>");
                                    echo ("     <p>{$row['content']}");
                                    echo '      <div class="cmts">';
                                    echo '          <div class="col-md-6 cmnts-left">';
                                    echo ("              <p>{$row['commentTime']}</p>");
                                    echo '          </div>';
                                    echo '          <div class="clearfix"></div>';
                                    echo '      </div>';
                                    echo '  </div>';
                                    echo '  <div class="clearfix"></div>';
                                    echo '</div>';
                                }
                            }
                        ?>

                        <div class="comments">
                            <h4>COMMENTS</h4>
                                    <?php
                                        if (empty($_POST)){
                                            showComments();
                                        }
                                        else{
                                            registerComment();
                                            showComments();
                                        }
                                    ?>
                                <div class="clearfix"></div>
                        </div>
                    </div>



                </div>
                <div class="blog-content-right">


                    <div class="menu">
                        <h3>RECOMMEND</h3>
                        <br>
                        <b>DOGS</b><br>
                        hot dogs<BR>
                        cheese dogs<br>
                        <br>
                        <b>BURGERS</b><br>
                        hamburger<br>
                        cheeseburger<br>
                        little hamburger<br>
                        little cheeseburger<br>
                        <br>
                        <b>SANDWICHES</b><br>
                        veggie sandwich<br>
                        cheese veggie sandwich<br>
                        grilled cheese<br>
                    </div>

                    <div class="detials">
                        <h3>DETAILS</h3>
                        <b>menu</b><br>
                        https://fiveguys.co.uk/menu/<br>
                        <br>
                        <b>address</b><br>
                        University Green, M13 9GP<br>
                        <br>
                        <b>contect us</b><br>
                        +441612733622


                    </div>

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