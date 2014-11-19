<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<script src="http://www.livejs.com/live.js"></script>

	<!-- Standalone (iOS full screen web app)
	================================================== -->
	<script type="text/javascript" src="javascripts/swapheader.js"></script>
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Android (Chrome full-screen app mode / application shortcut) -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="nice-highres.png"> <!--NB! NEED ICON FOR ANDROID-->

	<!-- Apple -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Ljudkalendern">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	
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
	<link rel="stylesheet" href="stylesheets/custom.css?=qwe">

	<!-- jQuery
	================================================== -->
	<!--<script src="javascripts/jquery-1.10.2.min.js"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Smoothscroll (auto-scroll to number)
	================================================== -->
	<script type="text/javascript" src="javascripts/smoothscroll.js"></script>
	<!--<script type="text/javascript">window.addEvent('domready',function() { new SmoothScroll({ duration: 1800 }); });</script>-->


	<!-- iOS startup images
	================================================== -->
	<!-- iPhone -->
	<link href="apple-touch-startup-image-320x460.jpg" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
	<!-- iPhone (Retina) -->
	<link href="apple-touch-startup-image-640x920.jpg" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPhone 5 -->
	<link href="apple-touch-startup-image-640x1096.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPhone 6 -->
	<link href="apple-touch-startup-image-750x1294.jpg" media="(device-width: 375px) and (device-height: 667px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPhone 6+ Portrait -->
	<link href="apple-touch-startup-image-1242x2148.jpg" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image">
	<!-- iPhone 6+ Landscape -->
	<link href="apple-touch-startup-image-2208x1182.jpg" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image">
	<!-- iPad (portrait) -->
	<link href="apple-touch-startup-image-768x1004.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
	<!-- iPad (landscape) -->
	<link href="apple-touch-startup-image-748x1024.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
	<!-- iPad (Retina, portrait) -->
	<link href="apple-touch-startup-image-1536x2008.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPad (Retina, landscape) -->
	<link href="apple-touch-startup-image-1496x2048.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

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


	<!-- iPhone & iPod Touch (Non-Retina) -->
	<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png">
	<!-- iPad 2 & iPad mini (Non-Retina) -->
	<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
	<!-- iPhone & iPod Touch (Retina) -->
	<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
	<!-- iPad & iPad mini (Retina) -->
	<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
	
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

	<!-- Humans.txt
	================================================== -->
	<link type="text/plain" rel="author" href="http://ljudkalendern.se/humans.txt" />

</head>
<body>

<div class="bg"></div> <!-- bg class used by Parallax scroll -->
<span id="top">&nbsp;</span><!-- scroll to top, inactive -->

	<!-- Primary Page Layout
	================================================== -->
	
	<?php include('header.php'); ?>
	
	<div class="container">


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
						1 => array('4KyGV3oBIMDeP2C5OmhYsd'),	/* svenska björnstammen */
						2 => array('1dKh4z5Aayt8FFDWjO5FDh'),	/* future islands */
						3 => array('7aC8ce2LQ6IZRROYJw63oS'),	/* faråker */
						4 => array('22cFcAQkydpTzeSKQZEKv0'),	/* foster the people */
						5 => array('5sCsfubNchaI9RCpP7K7aB'),	/* jenny lewis */
						6 => array('6a8GZWPmLWWTUDsQ61yAro'),	/* timbuktu */
						7 => array('2jgb0dt6ix8RRvJWmDRb5Z'),	/* yelle */
						8 => array('7lzl1Qfv4NqSmypuKmF07l'),	/* röyksopp */
						9 => array('2pza66DUreALycIoqlieMo'),	/* milky chance */
						10 => array('5PFlV6ufZ6kR4znYJC1HB2'),	/* casa murilo  */
						11 => array('4cntNMQjpROMQmevKb8H9f'),	/* of mice & men */ 
						12 => array('0U78mbujuFjpprS0G9QcTx'),	/* chromeo */
						13 => array('1wHOjPgthvvf35Hne9XCbB'),	/* catey shaw */
						14 => array('3GsZ6BxwhIVtOUrOZg8Jm7'),	/* cazzette */
						15 => array('59cst3IGDjIGjXYX0WGONI'),	/* maybeshewill */
						16 => array('0AzzkKWd53eUoJOl4gl7Ns'),	/* haerts */
						17 => array('6VJyshPiSoQP4kreHOl3Ul'),	/* we are twin */
						18 => array('4Z1kH6bfeeMYtCuhnR4vEr'),	/* the fray */ 
						19 => array('5IRRC3nCfo3LygsxQ6AWKB'),	/* biffy clyro */
						20 => array('26OaztCSd0sLflvdtQRmWa'),	/* blackbird blackbird */
						21 => array('2CslpGBJenq4K5NtuMXMgM'),	/* architecture in helsinki */
						22 => array('1DXIAzh9HNmv1q06kcMIXB'),	/* wolf gang */
						23 => array('0fBbwN05YlFoCbpmhxte2G'),	/* fanfarlo */
						24 => array('0rk5czGKHLHVD0UYSz2cNB'),	/* seinabo sey */
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
								<div class="feature-image">');
									//dagens datum och månad ELLER efter årsskiftet
									if(date('d') >= $i && date('n') >= 11 || date('Y') > 2014 ) {
									
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
											echo('<div class="album-cover-wrap">
													<a href="spotify://album/'.$d[0].'">
														<img class="album-cover" src="'.$filepath.'" alt="'.$artist.'">
														<div class="album-number-active">'.$i.'</div>
													</a>
												  </div>');
											
/* 											flush(); // show content while loading */
										}
										else {
											/* adds uncached images to server */
										    $destdir = ''.$folder.'';
										    $img=file_get_contents($spotify_cdn_url);
										    file_put_contents($destdir.substr($spotify_cdn_url, strrpos($spotify_cdn_url,'/')), $img);
										    
											echo('<div class="album-cover">
													<a href="spotify://album/'.$d[0].'">
														<img class="album-cover" src="'.$filepath.'" alt="'.$artist.'">
														<div class="album-number-active">'.$i.'</div>
													</a>
												  </div>');
												  
/* 											flush(); // show content while loading */
										}
									
									} 
									else {
										echo('<img class="album-shadow" src="images/backgrounds/empty_transp.png" alt="empty_dark.png">
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
		    
		    	<div class="seven columns space-bottom">
					<label>Om Ljudkalendern</label>
					Ljudkalendern delger december månad ett axplock av den utgivna musiken från det gångna året, med förhoppningar om att väcka nyfikenhet inför framtiden — kanske blir det så att du finner en eller flera nya godbitar här i jul!
 			    	<a href="spotify://user/ljudkalendern">
						<div class="spotifybutton"><img src="images/icons/spotify-32-white.png"><span class="buttontext">Follow</span></div>
					</a>
		    	</div>
		    
		    	<div class="five columns">
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//ljudkalendern.us9.list-manage.com/subscribe/post?u=3ec2953a011ec25e52b8bea44&amp;id=03ed4f7fdc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group">
						<label for="mce-EMAIL">Nyhetsbrev</label>
						De senaste nyheterna om Ljudkalendern, tävlingar och erbjudanden med mera.
						<input type="email" value="" placeholder="E-postadress" name="EMAIL" class="required email half-bottom half-top" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3ec2953a011ec25e52b8bea44_03ed4f7fdc" tabindex="-1" value=""></div>
					    <div class="show"><input type="submit" value="Prenumerera" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>
					<!--End mc_embed_signup-->
		    	</div>
		    	
		    	<div class="four columns">
					<label>Kontakta</label>
					<a href="mailto:hej@ljudkalendern.se?subject=Ljudkalendern">hej@ljudkalendern.se</a>
					<label class="full-top">Media</label>
					<a target="_blank" href="http://www.hashatit.com/hashtags/ljudkalendern">&#35;ljudkalendern</a><br>
					
					<ul class="social-media-icons">
						<li><a target="_blank" href="http://open.spotify.com/user/ljudkalendern"><img src="images/icons/spotify-32-white.png"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/Ljudkalendern"><img src="images/icons/facebook-32-white.png"></a></li>
						<li><a target="_blank" href="https://twitter.com/ljudkalendern"><img src="images/icons/twitter-32-white.png"></a></li>
						<li><a target="_blank" href="http://instagram.com/ljudkalendern"><img src="images/icons/instagram-32-white.png"></a></li>
					</ul>
		    	</div>
		    	
			</div><!--end container-->
		    
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