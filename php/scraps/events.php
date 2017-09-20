<?php
	//get the q parameter from URL
	$q=$_GET["q"];

	//find out which feed was selected
		$xml=("all.rss");
	// $xml = preg_replace('~(</?|\s)([a-z0-9_]+):~is', '$1$2_', $xml);
	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	$x=$xmlDoc->getElementsByTagName('item');
	for ( $i = 0; $i < 5; $i++ ) {
		$item_title=$x->item($i)->getElementsByTagName('title')
			->item(0)->childNodes->item(0)->nodeValue;
		$item_link=$x->item($i)->getElementsByTagName('link')
			->item(0)->childNodes->item(0)->nodeValue;
		$item_desc=$x->item($i)->getElementsByTagName('description')
			->item(0)->childNodes->item(0)->nodeValue;


		echo ("<p><a href='" . $item_link
		. "'>" . $item_title . "</a>");
		echo ("<br>");
		echo ($item_desc . "</p>");
		echo ($item_start_date . "</p>");
	}
?>