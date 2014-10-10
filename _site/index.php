<?php

include 'vendor/Mobile-Detect-2.8.3/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

?>

<!DOCTYPE html>
<html class="<?= $deviceType ?>">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Eduardo Bouças php html5 javascript web developer">
	<meta property="og:title" content="Eduardo Bouças"/>
	<meta property="og:image" content="http://eduardoboucas.com/images/Thumbnail.jpg"/>
	<meta property="og:url" content="http://eduardoboucas.com/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="I live in science, but I breathe art."/>	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">	
	<title>Eduardo Bouças</title>
	<link rel="stylesheet" href="css/main.css">
	<script data-main="js/main" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.8/require.min.js"></script>	
</head>

<body>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PHJ89F"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PHJ89F');</script>
	<!-- End Google Tag Manager -->	
		
	<div id="container">
		<h2 class="loading">HOLD ON, LET ME GRAB A SEAT...</h6>
	</div>

	<script src="js/VideoLooper.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXX-XX', 'example.com');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>	
</body>
</html>