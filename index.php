<!DOCTYPE html>
<!-- saved from url=(0043)index.php -->
<html lang="en" class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__alethemes_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Snatakk FC IITB</title>
    <meta name="description" content="HTML framework description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="./index_files/general.css">
	<!-- Google fonts -->
	<link href="./index_files/css" rel="stylesheet" type="text/css">
	<!-- Font awesome -->
	<link rel="stylesheet" href="./index_files/font-awesome.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="./index_files/modernizr-2.5.3.min.js"></script>

    <!-- Semantic HTML5 Support on old IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body data-gr-c-s-loaded="true">
    <!-- Header Section. If need a menu section, use tag: <nav> -->
    <?php
        $servername = "10.129.28.185";
        $username = "avijeet";
        $password = "delpiero";
        $dbname = "snatakkfc";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
	<div class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
					<img src="./index_files/slider.jpg" alt="" draggable="false">
					<div class="caption"><div class="container">
					<h1><span>Beginning of </span>Snatakk FC</h1>
					<a href="index.php" class="btn btn-bordered">read more</a>
					</div></div>
				</li>
				<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
					<img src="./index_files/slider2.jpg" alt="" draggable="false">
					<div class="caption"><div class="container">
					<h1><span>The new year</span>2016</h1>
					<a href="index.php" class="btn btn-bordered">read more</a>
					</div></div>
				</li>
				<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
					<img src="./index_files/slider3.jpg" alt="" draggable="false">
					<div class="caption"><div class="container">
					<h1><span>Lets Play </span>Football</h1>
					<a href="index.php" class="btn btn-bordered">read more</a>
					</div></div>
				</li>
			</ul>
		<ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="index.php#">Previous</a></li><li><a class="flex-next" href="index.php#">Next</a></li></ul></div>
	</div>
    <header>
		<div class="top">
			<div class="container">
				<div class="col-12">
				  <div class="col-2">
					<div class="logo"><img src="./index_files/logo.png" alt=""></div>
				  </div>
					<nav id="top-menu">
						<ul class="clearfix">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="team.php">Team</a></li>
							<li><a href="blog.php">blog</a></li>
							<li><a href="club.php">club</a></li>
							<li><a href="gallery.php">gallery</a></li>
							<li><a href="contact.php">contacts</a></li>
							
						</ul>
						<a href="index.php#" id="pull">Menu</a>
					</nav>
                    <nav class="mobilemenu">
                        <select>
                            <option value="index.php">Home</option>
                            <option value="team.php">Team</option>
                            <option value="blog.php">Blog</option>
                            <option value="club.php">Club</option>
                            <option value="gallery.php">Gallery</option>
                            <option value="contact.php">Contact</option>
                        </select>
                    </nav>
					
				</div>
			</div>
		</div>
    </header>
	
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="m-a-n">
	<div class="container">
		<div class="col-8">
			<div class="tab">matches</div>
			<div class="match">
				<div class="col-6">
					<div class="m-img"><img src="./index_files/bayern.jpg" alt=""></div>
				</div>
				<div class="col-6">
					<div class="m-img"><img src="./index_files/arsenal.jpg" alt=""></div>
				</div>
				<div class="m-result">
				<div class="logo-club col-3"><img src="./index_files/logo.png" width="127px" height="127px" alt=""></div>
				<span class="result col-6">5 <b>:</b> 2</span>
				<div class="logo-club col-3"><img src="./index_files/iitb.png" width="127px" height="127px" alt=""></div>
				<div class="club-name col-12">
				<span class="col-3">Snatakk FC</span>
				<div class="match-name col-6">Total Matches - 10<br><b>Draw - 3</b></div>
				<span class="col-3">Inter-IIT Staff Team</span>
				</div>
				</div>
			</div>
			<div class="a-games">
				<ul class="clearfix">
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">Borussia M'gladbach</span></li>
					<li><span class="text-right">Eintracht Frankfurt</span><span class="d-g">14 Apr 21:45</span><span class="text-left">FC Bayern München</span></li>
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">Hoffenheim</span></li>
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">VfB Stuttgart</span></li>
				</ul>
			</div>
		</div>
		<div class="col-4">
			<div class="tab">news</div>
			<div class="tab-small"><a href="index.php#">see all news</a></div>
			<div class="r-box-n">
                <?php
                    $sql = "SELECT id, title, details, date FROM news ORDER BY id DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                            if ($i++ >= 5)
                                break;
                            $date = new DateTime($row["date"]);
                            $newdate = $date->format('d M');
                            echo "<article><h3>" . $row["title"]. "</h3><p>" . $row["details"]. "</p><span class='date-n'>" . $newdate. "</span></article>";
                        }
                    }
                ?>
			</div>
		</div>
    </div>
	</section>
	<!-- Footer Section -->
    <footer>
		<div class="container">
			<div class="col-2"><a href="team.php#"><img src="./Team_files/footer-logo.png" width="140px" height="166px" alt=""></a></div>
			<div class="col-6">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as </p>
			<div class="col-4">
				<div class="social-icon">
					<ul id="social">
						<li><a href="index.php#"><img src="./index_files/soc-twitter.png" alt=""></a></li>
						<li><a href="index.php#"><img src="./index_files/soc-facebook.png" alt=""></a></li>
						<li><a href="index.php#"><img src="./index_files/soc-g.png" alt=""></a></li>
						<li><a href="index.php#"><img src="./index_files/soc-play.png" alt=""></a></li>
					</ul>
				</div>
			</div><div class="col-6"><p class="copyright">© 2016  - All Rights Reserved </p></div>
			</div>
			<div class="col-2">
			<h3>Information</h3>
				<ul>
					<li><a href="club.php">About club</a></li>
					<li><a href="team.php">Our team</a></li>
					<li><a href="index.php#">Registration</a></li>
					<li><a href="index.php#">Features</a></li>
					<li><a href="index.php#">404 page</a></li>

				</ul>
			</div>
			<div class="col-2">
			<h3>Support</h3>
				<ul>
					<li><a href="index.php#">Terms of Service</a></li>
					<li><a href="index.php#">Security</a></li>
					<li><a href="index.php#">Privacy PolicyHomepage</a></li>
					<li><a href="index.php#">Sitemap</a></li>
					<li><a href="index.php#">FAQ</a></li>
				</ul>
			</div>
		</div>
    </footer>

    <!-- Libs -->
    <script src="./index_files/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./index_files/jquery.flexslider-min.js"></script>
	<script src="./index_files/jquery-ui.js"></script>
	<script src="./index_files/jquery.bxslider.min.js"></script>

    <!-- Custom -->
    <script src="./index_files/scripts.js"></script>

</body></html>