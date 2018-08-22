<?php
	include_once("lib/WideImage/WideImage.php");

	$financeApi = "http://free.currencyconverterapi.com/api/v5/convert?q=USD_BRL&compact=y";
	$apiData = file_get_contents($financeApi);
	$data = json_decode($apiData);
	$rate = doubleval($data["USD_BRL"]);

	$cent50 = "R$ ".number_format($rate/2, 2, ',', '.');
	$rate = "R$ ".number_format($rate, 2, ',', '.');


	$images = array("50cent_1.jpg", "50cent_2.jpg", "50cent_3.jpg", "50cent_4.jpg", "50cent-newyork.jpg");
	$dollarPath = "/home/paulovelho/paulovelho.com/dollar";
	$imagePath = $dollarPath."/images/";
	
	$cent = $images[array_rand($images)];

	$fontBorder = 3;
	$fontMarginBottom = 20;
	$fontPath = $dollarPath."/lib/Impact.ttf";

	$image = WideImage::load($imagePath.$cent)->resize(500);
	$canvas = $image->getCanvas();
	$canvas->useFont($fontPath, 38, $image->allocateColor(0, 0, 0));
	$canvas->writeText('center+'.$fontBorder, 'bottom-'.($fontMarginBottom-$fontBorder), $cent50);
	$canvas->useFont($fontPath, 38, $image->allocateColor(0, 0, 0));
	$canvas->writeText('center+'.$fontBorder, 'bottom-'.($fontMarginBottom+$fontBorder), $cent50);
	$canvas->useFont($fontPath, 38, $image->allocateColor(0, 0, 0));
	$canvas->writeText('center-'.$fontBorder, 'bottom-'.($fontMarginBottom-$fontBorder), $cent50);
	$canvas->useFont($fontPath, 38, $image->allocateColor(0, 0, 0));
	$canvas->writeText('center-'.$fontBorder, 'bottom-'.($fontMarginBottom+$fontBorder), $cent50);
	$canvas->useFont($fontPath, 38, $image->allocateColor(255, 255, 255));
	$canvas->writeText('center', 'bottom-20', $cent50);


	$image->output('jpg', 100);

?>
