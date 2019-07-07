<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

	*{
		padding:0px!important;
		margin:0px!important;
		font-family:cursive;
	}
	html, body{
		width:100%;
		height:100%;
	}


	#container{

		background-image:url('https://www.remita.net/assets/minimal/images/404-icon.png');
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		
		display:flex;
		width:100%;
		height:100%;
		justify-content:center;
		align-items:center;
	}

	.inner{
		padding:1em!important;
		/* border:1px solid black; */
		height:auto!important;
		border-radius:10px;
		box-shadow: 0px 0px 5px inset rgba(70,70,70,0.5);
		background-color:transparent;
	}

	.p404{
		font-size:200px;
		color: #d32f2f;
		text-align:center;
	}

	.notf{
		color: grey;
		text-align:center;
		margin-bottom:1em!important;
	}

	.links{
		margin:1em!important;
		padding:1em!important;
		text-decoration:none;
		background-color: #388E3C;
		border-radius:5px; 
		border:none;
		outline:none;
		color:white;
	}

	.links a{
		text-decoration:none;
		color:white;
	}
</style>
</head>
<body>
	<div id="container">
		<div class="inner">
			<h1 class="p404">404</h1>
			<h1 class="notf">Page Not Found</h1>
			<button class="links"><a  href="http://localhost/archertours/">Back To Homepage</a></button>
		</div>
	</div>
</body>
</html>