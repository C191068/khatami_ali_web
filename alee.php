<?php

session_start();
$associative_array=array (
    "Ali" => 'CSE',
    "Aziz" => 'EEE',
    "Arfan" => 'CCE'
);

foreach ($associative_array as $key=>$value)
    {
        echo 'Key is <b>' .$key.'</b> and value is<b>'.$value.'</b><br>';
    }

    function summation($valueOne,$valueTwo)
    {
        return $valueOne+$valueTwo;
    }

    echo "The total of two number ".summation(valueOne: 30, valueTwo: 10);

    $_SESSION['myOfficeName']='SSTML';

  ?>  