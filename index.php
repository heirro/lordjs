<?php require __DIR__.'/vendor/packer.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title>Single Page Application</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  	<div><h1>Single Page Application</h1></div>
  	<div>
  		<a  href="?home">Home</a>
		<a	href="?user/user1">User1</a>
		<a  href="?user/user2" >User2</a>
  		<a 	href="?about" >About</a>
  		<a  href="?this-page-not-exist">404</a>
  	</div>
<div id="lordspa"></div>
<script><?php echo $packed_js;?></script>
<script src="./_lord/webpack.js"></script>
  </body>
</html>