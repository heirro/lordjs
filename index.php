<?php require __DIR__.'/vendor/packer.php';?>
<html>
<head>
<title>Single Page Application</title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
  </head>
<body>
<h1>Single Page Application</h1>
    <div>
        <a href="./?home">Home</a>
        <a onclick="javascript:window.location.replace('./?u/#user1')" href="./?u/#user1">User1</a>
        <a onclick="javascript:window.location.replace('./?u/#user2')" href="./?u/#user2">User2</a>
        <a href="./?about">About</a>
        <a href="./?this-page-not-exist">404</a>
    </div>
<div id="lordspa"></div>
<script><?php echo $routingjs;?></script>
<script src="_lord/webpack.js"></script>
</body>
</html>
