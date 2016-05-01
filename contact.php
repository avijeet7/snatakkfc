<!DOCTYPE html>
<!-- saved from url=(0042)club.php -->
<html lang="en" class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__alethemes_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Club</title>
    <meta name="description" content="HTML framework description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="./Club_files/general.css">
	<!-- Google fonts -->
	<link href="./Club_files/css" rel="stylesheet" type="text/css">
	<!-- Font awesome -->
	<link rel="stylesheet" href="./Club_files/font-awesome.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="./Club_files/modernizr-2.5.3.min.js"></script>

    <!-- Semantic HTML5 Support on old IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body data-gr-c-s-loaded="true">
    <!-- Header Section. If need a menu section, use tag: <nav> -->
     <header>
		<div class="top">
			<div class="container">
				<div class="col-12">
				  <div class="col-2">
					<div class="logo"><img src="./index_files/logo.png" alt=""></div>
				  </div>
					<nav id="top-menu">
						<ul class="clearfix">
							<li ><a href="index.php">Home</a></li>
							<li><a href="team.php">Team</a></li>
							<li><a href="blog.php">blog</a></li>
							<li><a href="club.php">club</a></li>
							<li><a href="gallery.php">gallery</a></li>
							<li class="active"><a href="contact.php">contacts</a></li>
							
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
	<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="contact.php#">Homepage</a></li><li><span class="sep">   →   </span></li><li><a href="contact.php#">Contacts</a></li>
		</ul>
		
		<h1 class="blog-title">Contacts</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
	
    <section id="blog-grid">
		<div class="container">
			<div class="col-8 cinfo">
				<p>In an ideal world this website wouldn’t exist, a client would acknowledge the importance having web copy before the design starts. Needless to say it’s very important, content is king and people are beginning to understand that. However, back over in reality some project schedules and  with the web copy, we want you.</p>
				<div class="di-wrap">
					<p class="detinfo"><span>E-mail</span>snatakkfc@gmail.com</p>
					<p class="detinfo"><span>Adress</span>Snatakk FC, IIT Bombay</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer Section -->
    <footer>
		<div class="container">
			<div class="col-2"><a href="contact.php#"><img src="./Contact us_files/footer-logo.png" alt=""></a></div>
			<div class="col-6">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as </p>
			<div class="col-4">
				<div class="social-icon">
					<ul id="social">
						<li><a href="contact.php#"><img src="./Contact us_files/soc-twitter.png" alt=""></a></li>
						<li><a href="contact.php#"><img src="./Contact us_files/soc-facebook.png" alt=""></a></li>
						<li><a href="contact.php#"><img src="./Contact us_files/soc-g.png" alt=""></a></li>
						<li><a href="contact.php#"><img src="./Contact us_files/soc-play.png" alt=""></a></li>
					</ul>
				</div>
			</div><div class="col-6"><p class="copyright">© 2014  - All Rights Reserved </p></div>
			</div>
			<div class="col-2">
			<h3>Information</h3>
				<ul>
					<li><a href="contact.php#">About club</a></li>
					<li><a href="contact.php#">Our team</a></li>
					<li><a href="contact.php#">Registration</a></li>
					<li><a href="contact.php#">Features</a></li>
					<li><a href="contact.php#">404 page</a></li>

				</ul>
			</div>
			<div class="col-2">
			<h3>Support</h3>
				<ul>
					<li><a href="contact.php#">Terms of Service</a></li>
					<li><a href="contact.php#">Security</a></li>
					<li><a href="contact.php#">Privacy PolicyHomepage</a></li>
					<li><a href="contact.php#">Sitemap</a></li>
					<li><a href="contact.php#">FAQ</a></li>
				</ul>
			</div>
		</div>
    </footer>

    <!-- Libs -->
    <script src="./Contact us_files/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./Contact us_files/jquery.flexslider-min.js"></script>
	<script src="./Contact us_files/jquery-ui.js"></script>
	<script src="./Contact us_files/jquery.bxslider.min.js"></script>
	<script src="./Contact us_files/js"></script>
    <!-- Custom -->
    <script src="./Contact us_files/scripts.js"></script>
	<script>
  function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body><div style="visibility: hidden; top: -9999px; position: absolute; opacity: 0;"></div><div style="visibility: hidden; top: -9999px; position: absolute; opacity: 0;"></div><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>