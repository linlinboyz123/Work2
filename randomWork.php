<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //指定隨機亂數
    $firstArray = array(3,15,23,24,42,56,95);

    echo $firstArray[rand(0,1)]."</br>";

    //顯示兩個陣列的聯集
    $a = array(1,3,6,7,9,10,11);
    $b = array(2,7,3,9,8,11,10);
    function merge($a,$b){
        for($i = 0; $i < count($a); $i++){
            for($j = 0; $j < count($b); $j++){
                if($a[$i] == $b[$j]){
                    echo $a[$i]." "; 
                }
            }
        }
    }
    merge($a,$b);

    ?>
</body>
</html>