<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = $_POST["number1"];
        for($i = 1; $i <= $num1; $i+=2){
            for($j = 1; $j <= $i; $j+=2){
               print $j."+";
            }
        }
        
    ?>
    <form method="post">
    <label for="number1">請輸入一個奇數:</label>
    <input name="number1" type="text">
    <input name="submit" type="submit">
    </form>
</body>
</html>