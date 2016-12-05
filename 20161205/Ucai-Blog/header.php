<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
</head>
<body>
<div id="Nav" class="clear">
    <div class="logo">
    	<a href="<?php bloginfo('url')?>" class="link"></a>
    </div>
    <?php wp_nav_menu();?>
</div>