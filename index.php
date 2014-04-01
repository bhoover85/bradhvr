<?php include('php/title.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script src="/js/responsiveslides.min.js"></script>

	<title><?php echo $pageTitle; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/slideshow.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>

<body class="background-img">

<?php

include('page/nav.php');

if ($page != '' && $page != 'home') {
	echo '<main class="section container background">';
}

switch($page) {
	case '':
		include('page/home.php');
	break;

	case 'about':
		include('page/about.php');
	break;

	case 'portfolio':
		if ($item != '') { include('page/project.php'); }
		else { include('page/portfolio.php'); }
	break;
};

if ($page != '' && $page != 'home') {
	include('page/social.php');
	echo '</main>';
}

?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script src="/js/main.js"></script>

<?php include('page/ga.php'); ?>

</body>
</html>