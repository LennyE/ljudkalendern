<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Standalone (iOS full screen web app)
	================================================== -->
	<script type="text/javascript" src="javascripts/swapheader.js" async></script>
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Android (Chrome full-screen app mode / application shortcut) -->
	<meta name="mobile-web-app-capable" content="yes">

	<!-- Apple -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Ljudkalendern">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Ljudkalendern 2014</title>
	<meta name="description" content="Ljudkalendern fylls varje år i december månad med ett urval av den utgivna musiken från året som gått.">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/custom.css">

	<!-- jQuery
	================================================== -->
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
	<link href="apple-touch-startup-image-1182x2208.jpg" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image">
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

	<!-- Favicons & web app icons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<!-- non-Retina iPhone and iPod Touch (@1× display) --> 
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png">
	<!-- iPad mini and the first- and second-generation iPad (@1× display) on iOS 7 or higher -->
	<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76-precomposed.png">
	<!-- iPhone 4+ (with @2× display) on iOS 7 or higher -->
	<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120-precomposed.png">
	<!-- iPad 3+ (with @2× display) -->
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152-precomposed.png">
	<!-- Phone 6+ (with @3× display) -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180-precomposed.png">
	
	<!-- Chrome & Android -->
	<link rel="icon" sizes="192x192" href="touch-icon-192x192.png">
	
	<!-- Fallback -->
	<link rel="icon" href="apple-touch-icon.png">
	
		
	<!-- Open graph
	================================================== -->
	<meta property="og:title" content="Ljudkalendern.se" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Ljudkalendern fylls varje år i december månad med ett urval av den utgivna musiken från året som gått" />      
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image1.jpg" />
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image2.jpg" />
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image3.jpg" />
	<meta property="og:image" content="http://ljudkalendern.se/images/share/fb_share_image4.jpg" />
	<meta property="og:url" content="http://ljudkalendern.se" />
		
	<!-- Insights -->
	<meta property="fb:admins" content="717632778" />
	
	<!-- gFonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

	<!-- Humans.txt
	================================================== -->
	<link type="text/plain" rel="author" href="http://ljudkalendern.se/humans.txt" />

</head>
<body>

<span id="top">&nbsp;</span><!-- scroll to top, inactive -->

	<!-- Primary Page Layout
	================================================== -->
	
	<?php include('header.php'); ?>
	
	<div class="container">

<?php include('header.php'); ?>

<div class="container">

	<!-- menu -->
	<div id="nav" class="sixteen columns nav-fade">
		<ul id="kalendern" class="center">
			<?php foreach(range(1, 24) as $n) {
				echo('<li><a href="#'.$n.'">'.$n.'</a></li>'."\n");
			} ?>
		</ul>
	</div>

	<!-- albums -->
	<?php

	$data = array(
		 1 => array('4KyGV3oBIMDeP2C5OmhYsd', 'svenska björnstammen'),
		 2 => array('1dKh4z5Aayt8FFDWjO5FDh', 'future islands'),
		 3 => array('7aC8ce2LQ6IZRROYJw63oS', 'faråker'),
		 4 => array('22cFcAQkydpTzeSKQZEKv0', 'foster the people'),
		 5 => array('5sCsfubNchaI9RCpP7K7aB', 'jenny lewis'),
		 6 => array('6a8GZWPmLWWTUDsQ61yAro', 'timbuktu'),
		 7 => array('2jgb0dt6ix8RRvJWmDRb5Z', 'yelle'),
		 8 => array('7lzl1Qfv4NqSmypuKmF07l', 'röyksopp'),
		 9 => array('2pza66DUreALycIoqlieMo', 'milky chance'),
		10 => array('34YOUaExxiAdv7ismVvz31', 'atmosphere'),
		11 => array('4cntNMQjpROMQmevKb8H9f', 'of mice & men'),
		12 => array('0U78mbujuFjpprS0G9QcTx', 'chromeo'),
		13 => array('1wHOjPgthvvf35Hne9XCbB', 'catey shaw'),
		14 => array('3GsZ6BxwhIVtOUrOZg8Jm7', 'cazzette'),
		15 => array('59cst3IGDjIGjXYX0WGONI', 'maybeshewill'),
		16 => array('0AzzkKWd53eUoJOl4gl7Ns', 'haerts'),
		17 => array('6VJyshPiSoQP4kreHOl3Ul', 'we are twin'),
		18 => array('4Z1kH6bfeeMYtCuhnR4vEr', 'the fray'),
		19 => array('5IRRC3nCfo3LygsxQ6AWKB', 'biffy clyro'),
		20 => array('26OaztCSd0sLflvdtQRmWa', 'blackbird blackbird'),
		21 => array('2CslpGBJenq4K5NtuMXMgM', 'architecture in helsinki'),
		22 => array('1DXIAzh9HNmv1q06kcMIXB', 'wolf gang'),
		23 => array('0fBbwN05YlFoCbpmhxte2G', 'fanfarlo'),
		24 => array('0rk5czGKHLHVD0UYSz2cNB', 'seinabo sey'),
	);

	date_default_timezone_set('Europe/Stockholm');

	foreach($data as $i => $v) {

		list($d, $artist) = $v;

		echo('<div id="'.$i.'" class="four columns album-margin"><div class="feature-image">');

		// date and month OR past new year
		if(date('d') >= $i && date('n') >= 12 || date('Y') > 2013) {

			$path = 'images/cache/2014/'.$d.'.jpg';

			// only get info from Spotify if image does not exist
			if(!file_exists($path)) {

				$url = 'https://embed.spotify.com/oembed/?url=spotify:album:'.$d.'&format=json';

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; curl)");
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$json = curl_exec($ch);
				curl_close($ch);

				$json = json_decode($json);
				$cover = str_replace('cover', '640', $json->thumbnail_url);

				// save image from Spotify as albumID.jpg
				file_put_contents($path, file_get_contents($cover));
			}

			echo('<div class="album-cover-wrap">
				<a href="spotify://album/'.$d.'" onclick="window.open(\'https://open.spotify.com/album/'.$d.'\'); return true;">
					<img class="album-cover" src="'.$path.'" alt="'.$artist.'">
					<div class="album-number-active">'.$i.'</div>
				</a>
			  </div>');

		} else {
			echo('<img class="album-shadow" src="images/backgrounds/empty_transp.png" alt="'.$i.'">
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
					Ljudkalendern fylls varje &aring;r i december m&aring;nad med ett urval av utgiven musik fr&aring;n &aring;ret som g&aring;tt, med f&ouml;rhoppningar om att v&auml;cka nyfikenhet inf&ouml;r framtiden. Lyssna &auml;ven p&aring; tidigare &aring;rg&aring;ngar genom att f&ouml;lja Ljudkalendern p&aring; Spotify! 
										
 			    	<a href="spotify://user/ljudkalendern" onclick="window.open('https://open.spotify.com/user/ljudkalendern'); return true;">
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
							Var med och r&ouml;sta fram 2015 &aring;rs kalender, f&aring; nyheter och tips p&aring; sp&auml;nnande musik.
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
						<li><a target="_blank" href="http://twitter.com/home?status=Jag%20lyssnade%20precis%20p%C3%A5%20dagens%20album%20i%20%23ljudkalendern!%20http%3A%2F%2Fljudkalendern.se%2F"><img src="images/icons/twitter-32-white.png"></a></li>
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