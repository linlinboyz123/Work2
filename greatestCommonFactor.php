<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div> 
        <label for="number1">數字1</label>
        <input name="number1" type="text"/>
    </div> 
    <div>
        <label for="number2">數字2</label>
        <input name="number2" type="text"/>
    </div>
    <input name="submit" type="submit"/>
    <?php
    $max = $_POST["number1"];
    $mix = $_POST["number2"];

    do{
        $r = $max % $mix;
        $max = $mix;
        $mix = $r;
        
    }while($r != 0);
    echo $max;
    ?>
</form>
</body>
</html>