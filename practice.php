<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
    let x=123
    document.cookie = "myJavascriptVar =123";
</script>

<?php 
   $phpVar =  $_COOKIE['myJavascriptVar'];

   echo (int)$phpVar+10;
?>
</body>
</html>