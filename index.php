<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
  
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#">Odświeżanie</a>
        <a href="#" class="m-right"><i class="fas fa-user"></i>&nbsp;&nbsp;Zalogowany</a>
        <a href="#" class="m-right hide" id="save"><i class="fas fa-cloud-download-alt"></i></a>
    </nav>
    <div class='bg blur'></div>
    <div class="main-flex-container">
        <div class="frame" style="" id="debug"></div>
        <div class="frame" id="frame-1"></div>
        <div class="frame" id="frame-2"></div>
        <div class="frame" id="frame-3"></div>
        <div class="frame" id="frame-4"></div>




<script src="js/ajax.js"></script>
<script>
   ajaxGET("lorem.php","frame-1");
   ajaxGET("lorem.php","frame-2");
   ajaxGET("lorem.php","frame-3");
   ajaxGET("lorem.php","frame-4");
   ajaxGET("lorem.php","frame-1");    
    ajaxGET("get-test.php/?a=34");
</script>

</body>
</html>