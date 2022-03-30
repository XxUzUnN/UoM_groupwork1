<!DOCTYPE html>
<html>
<head>

    <style>
        .flip-card {
        background-color: transparent;
        width: 250px;
        height: 200px;
        perspective: 1000px;
        }

        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }

        .flip-card-front {
        background-color: #bbb;
        color: black;
        }

        .flip-card-back {
        background-color: #990099;
        color: white;
        transform: rotateY(180deg);
        }

        #marker {
        position: relative;
        left:-2px;
        top:-10px;
        }

    </style>

    <title>Five Guys</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>

    <link href="css/bootstrap.css" media="all" rel='stylesheet' type='text/css'/>

    <link href="css/style.css" media="all" rel='stylesheet' type='text/css'/>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <link href='http://fonts.useso.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>

    <link href="css/component.css" rel="stylesheet" type="text/css"/>
</head>
<body class="cbp-spmenu-push">


<div class="header-section2">
    <div class="container">
        <div class="header-top">
            <div class="top-nav"></div>
            <div class="header-logo">
                <a href="index.html"><img alt="" src="images/logo.png"/></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


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
                                    <li><a href="L2-food.php">Food</a> <span>::</span></li>
                                    <li class="active-page"><a href="L3-food-fiveguys.php">Five Guys</a></li>
                                    <div class="clear"></div>
                                </ul>

                                <div class="blog-artical-info-head single-head">
                                    <h2>Five Guys</h2>
                                </div>

                                <div class="blog-artical-info-img single-head-img">
                                    <img alt="image" src="images/L3-food-fiveguys.png">
                                </div>

                                <div class="blog-artical-info-text">
                                    <p>
                                        HISTORY:<br>
                                        1986: The first Five Guys location opens in Arlington, VA.<br>
                                        1986 - 2001: Five Guys opens five locations around the DC metro-area and perfected
                                        their business of making burgers… and starts to build a cult-like following.<br>
                                        2002: Five Guys decides DC metro-area residents shouldn't be the only ones to
                                        experience their burgers and start to franchise in Virginia and Maryland.<br>
                                        2003: Five Guys sells out of franchise territory within 18 months and starts to open
                                        the rest of the country for franchise rights.<br>
                                        2003 - 2012: Five Guys expands to over 1,000 locations in the U.S. and Canada.<br>
                                        In July 2013, Five Guys opens the first location outside of North America in London,
                                        England.<br>
                                        Our International HQ in Amsterdam, NL opened in 2016.<br>
                                        Today, we have more than 1,500 locations open in North America, Canada, UK,, Middle
                                        East, Europe and growing.<br>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>                            
                        </div>

                        <span style="font-size: 30px;">Recommended Dishes</span> <span id="marker" style="color: grey; font-size: 20px;">*</span>
                        <br>
                        <p style="color:grey; font-size:8px;">*The ingredients/allergen list provided are all from the official website of the relative resaurant. The final interpretation of this list belongs to the relative resaurant. EAT shall not be held responsible for the content of the lists.</p>
                        <br>

                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <?php
                                    $sql = "SELECT dishName, dishIngredients FROM Dish WHERE dishId='1'";

                                    $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                    foreach ($pdo->query($sql) as $row){
                                        echo '<div class="flip-card-front">';
                                        echo ' <h2 style=" margin-top:82px">';
                                        echo ("<b>{$row['dishName']}</b></h2>");
                                        echo '</div>';
                                        echo '<div class="flip-card-back">';
                                        echo '  <h2>Allergen list</h2>';
                                        echo '  <p style="margin-top:30px">';
                                        echo (" {$row['dishIngredients']}</p>");
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>                        

                        <div class="flip-card" style="position:relative; margin-left:280px; margin-top: -200px">
                            <div class="flip-card-inner">
                                <?php
                                    $sql = "SELECT dishName, dishIngredients FROM Dish WHERE dishId='2'";

                                    $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                    foreach ($pdo->query($sql) as $row){
                                        echo '<div class="flip-card-front">';
                                        echo ' <h2 style=" margin-top:82px">';
                                        echo ("<b>{$row['dishName']}</b></h2>");
                                        echo '</div>';
                                        echo '<div class="flip-card-back">';
                                        echo '  <h2>Allergen list</h2>';
                                        echo '  <p style="margin-top:30px">';
                                        echo (" {$row['dishIngredients']}</p>");
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flip-card" style="position:relative; margin-left:560px; margin-top: -200px">
                            <div class="flip-card-inner">
                                <?php
                                    $sql = "SELECT dishName, dishIngredients FROM Dish WHERE dishId='3'";

                                    $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                    foreach ($pdo->query($sql) as $row){
                                        echo '<div class="flip-card-front">';
                                        echo ' <h2 style=" margin-top:70px">';
                                        echo ("<b>{$row['dishName']}</b></h2>");
                                        echo '</div>';
                                        echo '<div class="flip-card-back">';
                                        echo '  <h2>Allergen list</h2>';
                                        echo '  <p style="margin-top:50px">';
                                        echo (" {$row['dishIngredients']}</p>");
                                        echo '</div>';
                                    }
                                ?>
                            </div>
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
                                $id = 1;

                                $sql = "INSERT INTO Comment (userName, userEmail, userComment, userCommentTime, facilityId)
                                        VALUES (:userId, :userEmail, :userContent, :userCommentTime, :id)";

                                $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    'userId' => $un,
                                    'userEmail' => $em,
                                    'userContent' => $cm,
                                    'userCommentTime' => $time,
                                    'id' => $id
                                ]);
                            }


                            function showComments(){
                                        
                                $sql = "SELECT * FROM Comment WHERE facilityId='1' ORDER BY userCommentTime DESC";
                            
                                $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                $dbc = mysqli_connect('dbhost.cs.man.ac.uk', 't56091yd', '12345687', '2021_comp10120_r4');
                                $check=mysqli_query($dbc, $sql);
                                $checkrows=mysqli_num_rows($check);

                                if ($checkrows == 0){
                                    echo ("<p style='color:grey; text-align:center;'><i>There is no comment at the moment.</i></p>");
                                }else{
                                    foreach ($pdo->query($sql) as $row){
                                        echo '<div class="comments-main">';
                                        echo '  <div class="col-md-10 cmts-main-right">';
                                        echo ("     <h5>{$row['userName']}&nbsp&nbsp&nbsp&nbsp{$row['userEmail']}</h5>");
                                        echo ("     <p>{$row['userComment']}");
                                        echo '      <div class="cmts">';
                                        echo '          <div class="col-md-6 cmnts-left">';
                                        echo ("              <p>{$row['userCommentTime']}</p>");
                                        echo '          </div>';
                                        echo '          <div class="clearfix"></div>';
                                        echo '      </div>';
                                        echo '  </div>';
                                        echo '  <div class="clearfix"></div>';
                                        echo '</div>';
                                    }
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
                    <br><br><br>
                    <div class="detials">

                        <?php
                            $sql = "SELECT facilityWebsite, facilityAddress, facilityTel FROM Facility WHERE facilityId='1'";

                            $pdo = new pdo('mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_r4', 't56091yd', '12345687');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                            foreach ($pdo->query($sql) as $row){
                                echo '<h3>Details</h3>';
                                echo '<br><p><b>Website</b></p>';
                                echo '<a href="' . $row['facilityWebsite'] . '">' . $row['facilityWebsite'] . '</a>';
                                echo '<br><br><p><b>Address</b></p>';
                                echo ("{$row['facilityAddress']}");
                                echo '<br><br><p><b>Tel</b><p/>';
                                echo ("{$row['facilityTel']}");
                            }
                        ?>

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