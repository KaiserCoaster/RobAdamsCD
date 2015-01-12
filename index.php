<?php
	
$page = $_GET['p'];
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
}
	
include('includes/header.php');

include('pages/' . $url);

include('includes/footer.php');
?>