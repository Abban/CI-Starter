<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	
	<title><?=(isset($title_tag)) ? $title_tag : 'Starter';  ?></title>
		
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="<?=site_url('assets/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="<?=site_url('assets/images/apple-touch-icon.png'); ?>">
	
	<link rel="stylesheet/less" href="<?=site_url('assets/css/style.less'); ?>">
	
	<script src="<?=site_url('assets/js/libs/modernizr-2.0.6.js'); ?>"></script>
	<script src="<?=site_url('assets/js/libs/jquery-1.7.1.js'); ?>"></script>
	<script src="<?=site_url('assets/js/libs/jquery-ui-1.8.16.min.js'); ?>"></script>
	<script src="<?=site_url('assets/js/libs/jquery.fancybox-1.3.4.min.js'); ?>"></script>
	<script src="<?=site_url('assets/js/script.js'); ?>"></script>
	
	<!--[if lt IE 7 ]>
	<script src="<?=site_url('assets/js/libs/dd_belatedpng.js'); ?>"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	
	<script src="<?=site_url('assets/js/libs/less-1.1.3.min.js'); ?>" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8">
	    less.env = "development";
	    less.watch();
	</script>	
</head>
<body>
<?php if($this->session->flashdata('messages') || isset($messages)): ?>
	<div id="site_message" class="clearfix">
		<div>
			<div>
				<ul>
					<?php if($this->session->flashdata('messages')): foreach($this->session->flashdata('messages') as $message): ?>
						<li><?=$message; ?></li>
					<?php endforeach; endif; ?>
					<?php if(isset($messages)): foreach($messages as $message): ?>
						<li><?=$message; ?></li>
					<?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>
<header id="worlds_birth" class="clearfix">
	<div>
		<div>
			New Site
		</div>
		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
			</ul>
		</nav>
	</div>
</header>