<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class='bg blur'></div>
    <div class="main-flex-container">
        <div class="frame" style="" id="debug"></div>
        <div class="frame" id="frame-1"></div>
        <div class="frame" id="frame-2"></div>
        <div class="frame" id="frame-3"></div>
        <div class="frame" id="frame-4"></div>




<script src="js/ajax.js"></script>
<script>
    ajaxGET("lorem.txt","frame-1");    
    ajaxGET("get-test.php/?a=34");
</script>

</body>
</html>