<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>


	<script src="http://www.livejs.com/live.js"></script>

	 
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Ljudkalendern 2014</title>
	<meta name="description" content="Ljudkalendern &mdash; En kalender fylld med h&auml;rlig musik fr&aring;n &aring;ret som g&aring;tt!">
	<meta name="author" content="Lenny Ekberg">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/custom.css?=new">

	<!-- Humans.txt
	================================================== -->
	<link type="text/plain" rel="author" href="http://ljudkalendern.se/humans.txt" />

	<!-- jQuery
	================================================== -->
	<!--<script src="javascripts/jquery-1.10.2.min.js"></script>-->
	<script  src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Parallax scroll
	================================================== -->
<!-- 	<script async src="javascripts/parallaxbg.js"></script> -->

	<!-- Smoothscroll (autoscroll till lucka)
	================================================== -->
	<script async type="text/javascript" src="javascripts/smoothscroll.js"></script>
	<!--<script type="text/javascript">window.addEvent('domready',function() { new SmoothScroll({ duration: 1800 }); });</script>-->

	<!-- Show/hide div
	================================================== -->
	<!--<script src="javascripts/jquery-1.7.1.min.js"></script>-->		 
	<script async src="javascripts/showhide-div.js"></script>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<!-- 	<meta name="viewport" content="minimal-ui"> -->
<!--
	Android
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="nice-highres.png">
-->
	<!-- Apple -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<!-- iPad Retina Landscape -->
<!-- iPhone -->
<link href="static/images/apple-touch-startup-image-320x460.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<!-- iPhone (Retina) -->
<link href="static/images/apple-touch-startup-image-640x920.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<!-- iPhone 5 -->
<link href="static/images/apple-touch-startup-image-640x1096.png"
      media="(device-width: 320px) and (device-height: 568px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<!-- iPad (portrait) -->
<link href="static/images/apple-touch-startup-image-768x1004.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<!-- iPad (landscape) -->
<link href="static/images/apple-touch-startup-image-748x1024.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<!-- iPad (Retina, portrait) -->
<link href="static/images/apple-touch-startup-image-1536x2008.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<!-- iPad (Retina, landscape) -->
<link href="static/images/apple-touch-startup-image-1496x2048.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico?v=2">
	
	<!-- Standard iPhone --> 
	<link rel="apple-touch-icon" sizes="57x57" href="touch-icon-iphone-114.png" />
	<!-- Retina iPhone --> 
	<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone-114.png" />
	<!-- Standard iPad --> 
	<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad-144.png" />
	<!-- Retina iPad --> 
	<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-144.png" />

	
	<!-- Open graph
	================================================== -->
	<meta property="og:title" content="Ljudkalendern.se" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="En adventskalender fylld med musik!" />      
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image1.jpg" />
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image2.jpg" />
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image3.jpg" />
	<meta property="og:url" content="http://ljudkalendern.se" />
		


	<!-- Insights -->
	<meta property="fb:admins" content="717632778" />
	
	<!-- gFonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,700' rel='stylesheet' type='text/css'>


</head>
<body>

<div class="bg"></div> <!-- bg class used by Parallax scroll -->
<span id="top">&nbsp;</span><!-- scroll to top, ej aktiv. -->

	<!-- Primary Page Layout
	================================================== -->
	
	<div class="container">

			<?php include('menuitems.php'); ?>

					<!-- menu -->
					<div id="nav" class="sixteen columns nav-fade">
						<ul id="kalendern" class="center">
						<?php foreach(range(1,24) as $n) {
							echo('<li><a href="#'.$n.'">'.$n.'</a></li>'."\n");
						} ?>
						</ul>
					</div>
					
					<!-- albums -->
					<?php 
					
					$data = array(
						1 => array('4KyGV3oBIMDeP2C5OmhYsd'), /* svenska björnstammen */
						2 => array('1dKh4z5Aayt8FFDWjO5FDh'), /* future islands */
						3 => array('7aC8ce2LQ6IZRROYJw63oS'), /* faråker */
						4 => array('22cFcAQkydpTzeSKQZEKv0'), /* foster the people */
						5 => array('6a8GZWPmLWWTUDsQ61yAro'), /* timbuktu */
						6 => array('4cntNMQjpROMQmevKb8H9f'), /* of mice & men */
						7 => array('2jgb0dt6ix8RRvJWmDRb5Z'), /* yelle */
						8 => array('7lzl1Qfv4NqSmypuKmF07l'), /* röyksopp */
						9 => array('2pza66DUreALycIoqlieMo'), /* milky chance */
						10 => array('6TbkWAqqY4nhQnYim61IU8'), /* alt-j */
						11 => array('5sCsfubNchaI9RCpP7K7aB'), /* jenny lewis */
						12 => array('0U78mbujuFjpprS0G9QcTx'), /* chromeo */
						13 => array('0cnNCK2xpudXjB8pzsrYy9'), /* bleechers */
						14 => array('3GsZ6BxwhIVtOUrOZg8Jm7'), /* cazzette */
						15 => array('22F5JWqnUh0qchqI2wQfS0'), /* the kooks */
						16 => array('7HxQpGRaQXPudaP1t8E6n9'),
						17 => array('0t0QkoTnDz5uj5I92C7wwE'),
						18 => array('7DJgfpwm8MT0Kd3yqjb6eg'),
						19 => array('7DQ9r7wFUUtpJcQrKiiS02'),
						20 => array('4WnkQO4xD9ljQooB3VIxCV'),
						21 => array('67y5PUQ8B4qX7BpWu55uF6'),
						22 => array('1L19oPU0umN0bd2N1QQXJw'),
						23 => array('3PYpxrfvtSy2OmgiDbrjGM'),
						24 => array('2Qi2SySN2ePZwMLDSv9Krn'),
					);


					/*
						1 => array('3YHf7ooFmrTOsp4jPM3aFj'),
						2 => array('39q3ilAGf1QcBwIzKkAhO6'),
						3 => array('6HN0urVcVzm44FDDz1ZssA'),
						4 => array('3WequSBxJjxLL24Nvf3u0i'),
						5 => array('2DeOjL5WprdaQb4vTWCWrE'),
						6 => array('1xRzeGYhvel6QKEuRPLFXh'),
						7 => array('6eTkAY5V7N2xPAovJWRFSr'),
						8 => array('5lyGNHr9RNfyckKzNN1dq2'),
						9 => array('30p1meHBKVwMY9lsOabmwd'),
						10 => array('37xl28qGX45H01dsex3nUx'),
						11 => array('1mGPHj7IomG8gBUW3wRi8G'),
						12 => array('6FDDd5kzWGXVm1qbKRGqEg'),
						13 => array('4IpHjxzT5iQXP0SNWQFCsK'),
						14 => array('6HTFCEmpEwbkJMzX3IB7xG'),
						15 => array('5WNh9jz9m5PEfH5lKlaipA'),
						16 => array('7HxQpGRaQXPudaP1t8E6n9'),
						17 => array('0t0QkoTnDz5uj5I92C7wwE'),
						18 => array('7DJgfpwm8MT0Kd3yqjb6eg'),
						19 => array('7DQ9r7wFUUtpJcQrKiiS02'),
						20 => array('4WnkQO4xD9ljQooB3VIxCV'),
						21 => array('67y5PUQ8B4qX7BpWu55uF6'),
						22 => array('1L19oPU0umN0bd2N1QQXJw'),
						23 => array('3PYpxrfvtSy2OmgiDbrjGM'),
						24 => array('2Qi2SySN2ePZwMLDSv9Krn'),
					*/
					
					
					date_default_timezone_set('Europe/Stockholm');
					
					foreach($data as $i => $d) {
						echo('<div id="'.$i.'" class="four columns album-margin">
								<div class="feature-image fade">');
									//dagens datum och månad ELLER efter årsskiftet
									if(date('d') >= $i && date('n') >= 10 || date('Y') > 2013 ) {
									
										//get album art url from Spotify
										$album = "spotify:album:".$d[0]."";
										$url = "https://embed.spotify.com/oembed/?url=".$album."&format=json";
										
										$ch = curl_init();
										curl_setopt($ch, CURLOPT_URL, $url);
										curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
										curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; curl)");
										curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
										curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
										$json = curl_exec($ch);
										curl_close($ch);
										
										$json  = json_decode($json);
										$cover = $json->thumbnail_url;
										
										//artistens eller gruppens namn (minus allt efter tankestrecket som av någon anledning är namnet på albumets sista spår)
										$artist = strtok($json->title, '-');

										//byt ut "cover" i länken mot "640" vilket genererar en högre upplösning av själva bilden (60, 85, 120, 300, eller 640)
										$largecover = str_replace("cover","640","$cover");
									
										
									  /////////////////////////
									 // server image chache //
									/////////////////////////
										
										// cdn link output from Spotify curl request
 										//$spotify_cdn_url = "https://d3rt1990lpmkn.cloudfront.net/640/032141dbc0c946bfc0347fc42cfed43c27df5300"; */
										$spotify_cdn_url = $largecover;
										
										// server cache folder
										$folder = 'images/cache/2014/';
										
										// server cache filename
										$file = basename($spotify_cdn_url);
										
										// complete server filepath
										$filepath = ''.$folder.''.$file.'';


										if (file_exists($filepath)) {
											echo('<a href="spotify://album/'.$d[0].'">
													<img class="album-cover" src="'.$filepath.'" alt="'.$artist.'">
												<span class="album-number-active">'.$i.'</span>
												</a>');
											flush(); //visar albumen efterhand de laddas
										}
										else {
										    $destdir = ''.$folder.'';
										    $img=file_get_contents($spotify_cdn_url);
										    file_put_contents($destdir.substr($spotify_cdn_url, strrpos($spotify_cdn_url,'/')), $img);
										    
										    echo('<a href="spotify://album/'.$d[0].'">
													<img class="album-cover" src="'.$filepath.'" alt="'.$artist.'">
												<span class="album-number-active">'.$i.'</span>
												</a>');
											flush(); //visar albumen efterhand de laddas
										}
									
									} 
									else {
										echo('<img class="album-shadow" src="images/albumcovers/empty_transp.png" alt="empty_dark.png">
											<div class="album-number">'.$i.'</div>');
									}
								echo('</div>
						 </div>');
					}
					?>

	</div><!--end container-->
				
		<!-- footer --->
		<div class="footer">
		
		    <div class="container">
				    
		    	<div id="mainnav" style="margin-bottom:0px;" class="sixteen columns center">
					<!--<ul>
						<li class="link"><a href="https://www.facebook.com/Ljudkalendern">Facebook</a></li>
						<li class="link"><a href="http://instagram.com/ljudkalendern">Instagram</a></li>
						<li class="link"><a href="https://twitter.com/ljudkalendern">Twitter</a></li>
						<li class="link"><a href="http://open.spotify.com/user/ljudkalendern">Spotify</a></li>
					</ul>-->
					<ul style="margin-top:-25px;">
						<li class="link"><a href="mailto:hej@ljudkalendern.se?subject=Ljudkalendern">hej@ljudkalendern.se</a></li>
					</ul>
				</div>
			</div>
		    
		</div>

</body>

	<!-- Analyics
	================================================== -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-46037681-1', 'ljudkalendern.se');
	  ga('send', 'pageview');
	</script>
	
</html>

