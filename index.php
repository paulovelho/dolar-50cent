<?php
	
	date_default_timezone_set("America/Sao_Paulo");
	$hoje = date("m/d/Y");

	$color1 = "#297A29";
	$color2 = "#EBF5EB";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="generator" content="Adobe GoLive" />
		<title>Quanto tá o dólar hoje?</title>
		<style type="text/css" media="screen">
			#radial-center { 
				/* fallback */ 
				background-color: <?=$color1?>; 
				background-position: center center; 
				background-repeat: no-repeat; 
				
				/* Safari 4-5, Chrome 1-9 */ 
				/* Can't specify a percentage size? Laaaaaame. */ 
				background: -webkit-gradient(radial, center center, 0, center center, 460, from(<?=$color2?>), to(<?=$color1?>)); 
				/* Safari 5.1+, Chrome 10+ */ 
				background: -webkit-radial-gradient(circle, <?=$color2?>, <?=$color1?>); 
				/* Firefox 3.6+ */ 
				background: -moz-radial-gradient(circle, <?=$color2?>, <?=$color1?>); 
				/* IE 10 */ 
				background: -ms-radial-gradient(circle, <?=$color2?>, <?=$color1?>); 
				/* Opera cannot do radial gradients yet */ 
			}
			#logo_container {
				width: 500px;
				height: 200px;
				left: 50%;
				top: 40px;
				position: absolute;
				margin: auto -250px;
				text-align: center;
			}
			#details_container{
				font-family: Verdana;
				text-align: center;
				font-family: Verdana;
			}
			.tiny {
				font-size: 10px;
			}
		</style>
	</head>

	<body id="radial-center">
		<div id="logo_container">
			<strong><?=$hoje?></strong><br/><br/>
			<img src="dollar.php" alt="Dólar em <?=$hoje?>" title="Dólar em <?=$hoje?>"/>
			<div id="details_container">
			<br/>
			<hr/>
			<img src="images/zebras.png" alt="PauloVelho" title="PauloVelho"/><br/>
			by: <a href="http://www.twitter.com/paulovelho">@paulovelho</a>
			<br/>
			<hr/>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 50cent_486px -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:468px;height:60px"
				     data-ad-client="ca-pub-2533906498863192"
				     data-ad-slot="9450797865"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</body>
	

</html>
