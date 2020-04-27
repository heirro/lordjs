<?php require __DIR__.'/vendor/packer.php';?>
<body>
<?php include './views/header.lord.php';?>
<div id="lordspa"></div>
<script><?php echo $packed_js;?></script>
<script src="_lord/webpack.js"></script>
</body>
</html>