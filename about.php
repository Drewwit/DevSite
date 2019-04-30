<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pulse Labs - Immersive Solutions for Enterprise</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#0d0d0d">
	<meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#0d0d0d">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-grid.css" rel="stylesheet">
	<link href="css/aos.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<script src="js/aos.js"></script>
	<script type="text/javascript">
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"../images/facebook-blk.png",
				"../images/facebook-prpl.png",
				"../images/mail-blk.png",
				"../images/mail-prpl.png",
				"../images/twitter-blk.png",
				"../images/twitter-prpl.png",
				"../images/linkedin-blk.png",
				"../images/linkedin-prpl.png",
				"../images/vimeo-blk.png",
				"../images/vimeo-prpl.png"
			)
	</script>
	</head>

	<body>
		<div class="overflow-fix">
		<?php include("header.php"); ?>
		
		<div class="container-fluid parallax-window-2 m-auto pt-5" data-parallax="scroll" data-image-src="images/Parallax-Purple.jpg">
			<div class="row justify-content-center">
				<div class="col">
				</div>
			</div>
		</div>
			
			
		<!-- team members -->
		<div class="container greenshapes m-auto text-center pt-5">
			<hr>
			<p class="pt-5 display-5 font-weight-bold">Meet the Team!</p>
			<div class="row pt-5">
				<div class="col" data-aos="flip-right">
					<div class="team-circle shadowed2"><img src="images/team/rick1.jpg" alt="Rick Embers" /></div>
					<p class="display-6 font-weight-bold pt-4">Rick Embers</p>
					<p>CEO</p>
				</div>	
				<div class="col" data-aos="flip-right">
					<div class="team-circle shadowed2"><img src="images/team/steve1.jpg" alt="Steve Biegun" /></div>
					<p class="display-6 font-weight-bold pt-4">Steve Biegun</p>
					<p>Manager of Virtual Design</p>
				</div>	
				<div class="col" data-aos="flip-right">
					<div class="team-circle shadowed2"><img src="images/team/andrew1.jpg" alt="Andrew London" /></div>
					<p class="display-6 font-weight-bold pt-4">Andrew London</p>
					<p>AR/VR Developer</p>
				</div>	
				<div class="col" data-aos="flip-right">
					<div class="team-circle shadowed2"><img src="images/team/travys1.jpg" alt="Travys Keto" /></div>
					<p class="display-6 font-weight-bold pt-4">Travys Keto</p>
					<p>Digital Designer</p>
				</div>		
			</div>
		</div>
			
			
		<?php include("footer.php"); ?>
			
			
		
		
		
		<!-- Required Scripts -->

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/scripts.js"></script>

		<!-- Scroll Transition Script -->
		<script>
		  AOS.init();
		</script>
			
		<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '4528668b-135f-4690-b7e1-e56370272e40', f: true }); done = true; } }; })();</script>
		
		</div>	
	</body>
</html>
