<?php
	
$home = "/";
	
$page = rtrim(strtolower($_GET['p']), '/');
$url = "404.php";
$navActive = [	'home' => false,
				'brand-at-work' => false,
				'rob-branded' => false,
				'cause' => false,
				'contact' => false,
];

switch($page) {
	case "":
		$page = "home";
	case "home":
	case "brand-at-work":
	case "rob-branded":
	case "cause":
	case "contact":
		$url = $page . ".php";
		$navActive[$page] = true;
		break;
	case "brands/ets":
	case "brands/spirits":
	case "brands/att":
	case "brands/maxim":
		$url = $page . ".php";
		$navActive['brand-at-work'] = true;
		break;
	case "causes/msride":
	case "causes/sayrevillemarchingband":
	case "causes/tealtea":
		$url = $page . ".php";
		$navActive['cause'] = true;
		break;
}
	
include('includes/header.php');

include('pages/' . $url);

include('includes/footer.php');
?>