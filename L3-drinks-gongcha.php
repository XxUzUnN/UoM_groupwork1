<html>
<head>
    <title>GONG CHA</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="Gourmet Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" name="keywords"/>
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


    <link href='http://fonts.useso.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
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
            <div class="search-form">
                <form>
                    <input onblur="if (this.value == '') {this.value = 'Search...';}" onfocus="this.value = '';" required=""
                           type="text" value="Search...">
                </form>
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
                                    <li class="active-page">GONG CHA</li>
                                    <div class="clear"></div>
                                </ul>

                                <div class="blog-artical-info-head single-head">
                                    <h2>GONG CHA</h2>

                                </div>
                                <div class="blog-artical-info-img single-head-img">
                                    <img alt="image" src="images/L3-drinks-gongcha.png">
                                </div>

                                <div class="blog-artical-info-text">
                                    <p>Gong cha was founded in Kaohsiung, Taiwan in 2006 and has now become one of the
                                        most recognisable quality tea providers.
                                        With approximately 1500 stores worldwide, customers are enjoying our quality
                                        drinks in territories
                                        throughout Asia, USA, Canada, Mexico, Australia, New Zealand and now England.We
                                        believe in offering natural, healthy freshly brewed tea.</p>
                                    <p>In-line with our philosophies, we at Gong cha aim to provide the best quality tea
                                        and beverages to our customers.
                                        We believe in offering natural, healthy, freshly brewed tea and beverages with
                                        most drinks’ sweetness levels being able to be tailored to individual
                                        preferences.
                                        We only use the best quality teas at Gong cha and our teas are freshly brewed in
                                        our outlets to ensure optimal freshness and flavor in each cup of tea.</p>
                                    <p>https://www.gong-cha.co.uk/about-us/</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
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