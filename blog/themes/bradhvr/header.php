<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo page_title(); ?> - <?php echo site_name(); ?></title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery.js"></script>
	
	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/main.css" rel="stylesheet">
	
	<!-- Add per-post CSS -->
	<?php if(article_css()): ?>
		<style><?php echo article_css(); ?></style>
	<?php endif; ?>
	
	<!-- Add per-post JS -->
	<?php if(article_js()): ?>
		<script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>

<body class="background-img">
	<!-- <header>
		<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
		<?php if(has_menu_items()) : ?>
		    <nav role="main">
		        <?php while(menu_items()) : ?>
		            <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
		        <?php endwhile; ?>
		    </nav>
		<?php endif; ?>
	</header> -->

<?php include('../page/nav.php'); ?>

<div class="section container background">

<?php if (page_title() == 'Blog') { ?>
		<h1 class="text-center">Blog</h1><hr>
<?php }
	else { ?>
		<div class="text-center">
			<h1><?php echo article_title(); ?></h1>
			<h5>
	        	<div class="published-info">
	        		<i class="fa fa-calendar"></i><?php echo article_date(); ?>
	        	</div>

	        	<div class="published-info">
	        		<a href="/blog/category/<?php echo substr(article_category_slug(), strrpos(article_category_slug(), '/')); ?>"><i class="fa fa-folder"></i><?php echo article_category(); ?></a>
	        	</div>
        	</h5>
		</div>
		<hr>
<?php } ?>