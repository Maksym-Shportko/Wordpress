<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:600,700i|Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
<div class="head">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="header_content_inner">
				<div class="header-logo">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
				</div>
				<div class="menu">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Best Projeckts</a></li>
						<li><a href="#">FeedBackt</a></li>
					</ul>
				</div>
			</div>
				<div class="brending">
					<?php the_field('brending')?>
				</div>
				<div class="header-about">
					<?php the_field('header-about')?>
				</div>
				<div class="circle">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ellipse.png" alt=""></a>
				</div>
		</div>
	</div>
</div>
</div>

