<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Ali</title>
</head>
<body>
    <?php
    echo "My name is Ali";
    $money=19000;
    echo '<br>The amount of money is='.$money;

    $firstAmount=100;
    $secondAmount=200;
    $result=$firstAmount+$secondAmount;
    echo '<br>The total amount is='.$result;


    echo '<pre>';//debugger to see flow of code running

    $array=array('Ali','Khatami',126,879);

    print_r($array);

    var_dump($array);// to show data type and length


    for($index=0;$index<count($array);$index++)
    {
        echo $array[$index].'<br>';
    }
    
    ?>

</body>
</html>