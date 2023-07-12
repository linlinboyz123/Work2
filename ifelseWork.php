<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method = "post">
    <label for="number1">數字1</label>
    <input name="number1" type="text"/>
    <br/>

    <label for="number2">數字2</label>
    <input name="number2" type="text"/>
    <br/>

    <label for="number3">數字3</label>
    <input name="number3" type="text"/>
    <br/>

    <label for="number4">數字4</label>
    <input name="number4" type="text"/>
    <br/>

    <input type="submit" name="submit"/>
</form>

<?php
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];
    $num4 = $_POST["number4"];
    $max1 = 0;
    $max2 = 0;
    $mix1 = 0;
    $mix2 = 0;

    if($num1 > $num2){
        $max1 = $num1;
    } else {
        $max1 = $num2;
    }

    if($num3 > $num4){
        $max2 = $num3;
    } else {
        $max2 = $num4;
    }

    if($num1 > $num2){
        $mix1 = $num2;
    } else {
        $mix1 = $num1;
    }

    if($num3 > $num4){
        $mix2 = $num4;
    } else {
        $mix2 = $num3;
    }
    
    if($max1 > $max2){
        echo "最大的數為: $max1";
    } else{
        echo "最大的數為: $max2";
    }

    if($mix1 > $mix2){
        echo "最小的數為: $mix2";
    } else{
        echo "最小的數為: $mix1";
    }

?>


</body>
</html>