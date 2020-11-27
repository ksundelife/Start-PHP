<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<style>
		.heart{
		width: 20px;
		height: 20px;
		background-color: red;
		transform: rotate(45deg);
		position: relative;
		}
		.heart::before,
		.heart::after {
			content : '';
			display: block;
			width: 20px;
			height: 20px;
			background-color: red;
			border-radius: 50%;
			position: absolute;
		}
		.heart::before {
		top: -10px;
		left: 0;
		}
		.heart::after {
		top: 0;
		left: -10px;
		
		}
		.click {
			z-index: 1;
			position: absolute;
			transform: rotate(-45deg);
		}
		.info {
			display: none;
		}
		.heart:hover .info {
			display: block;
			z-index: 1;
			position: absolute;
			transform: rotate(-45deg);
			margin-top: -90px;
		}
	</style>
	<?php require( TPL_PATH . './header.php'); ?>
	<?= $content ?>
	<?= isset($footer) ? $footer : '' ?>
	<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>