<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=$home?>favicon.ico">

    <title>Rob Adams</title>
    
    <!-- Google Font Ek Mukta -->
    <link href='https://fonts.googleapis.com/css?family=Ek+Mukta' rel='stylesheet' type='text/css'>
    
    <!-- Foundation Icon set -->
    <link href="<?=$home?>css/foundation-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="<?=$home?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?=$home?>css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-2 col-sm-offset-5 brand">
					<a href="<?=$home?>">
						<img src="<?=$home?>images/LogoHoriz.svg" class="img-responsive visible-xs" />
						<img src="<?=$home?>images/LogoVert.svg" class="img-responsive hidden-xs vert-logo center-block" />
					</a>
				</div>
			</div>
			<nav class="navbar navbar-inverse navbar-static-top no-margin-bottom">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="<?=($navActive['home'] ? "active" : "")?>">
							<a href="<?=$home?>">Home</a>
						</li>
						<li class="<?=($navActive['brand-at-work'] ? "active" : "")?>">
							<a href="<?=$home?>brand-at-work">Brand at Work</a>
						</li>
						<li class="<?=($navActive['rob-branded'] ? "active" : "")?>">
							<a href="<?=$home?>rob-branded">Rob, Branded</a>
						</li>
						<li class="<?=($navActive['cause'] ? "active" : "")?>">
							<a href="<?=$home?>cause">Cause - It's Personal</a>
						</li>
						<li class="<?=($navActive['contact'] ? "active" : "")?>">
							<a href="<?=$home?>contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>