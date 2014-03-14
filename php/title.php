<?php 
$page = $_GET['page'];
$item = $_GET['item'];
$title = "Brad Hoover";

if ($page != '' && $item == '') {
	$pageTitle = ucwords($page) . " - " . $title;
}
elseif ($page != '' && $item != '') {
	switch($item) {
		case '';
		break;

		case 'cog';
		$projName = "Casualties of the Gridiron";
		break;

		case 'uxe';
		$projName = "UX Entertainment";
		break;

		case 'revival41';
		$projName = "REvival 41";
		break;

		case 'tcs';
		$projName = "Thin Crust Square";
		break;

		case 'gem';
		$projName = "GEM Archive Search";
		break;

		case 'rfid';
		$projName = "RFID Tracking System";
		break;
	};

	$pageTitle = $projName . " | " . ucwords($page) . " - " . $title;
}
else {
	$pageTitle = $title;
}


?>