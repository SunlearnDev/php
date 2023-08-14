<?php
    $numbers = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3);
    $fruits = array('apple' => 2, 'orange' => 5, 'banana' => 1, 'grape' => 3);

/*
*  Sắp Xếp key theo giá trị tăng dần dùng sort($str);
*/
    sort($numbers);
    print_r($numbers);

/*
*  Sắp Xếp key theo giá trị tăng dần dùng rsort($str);
*/
    rsort($numbers);
    echo '<br>';
    rsort($fruits );   
    echo '<br>';
    print_r($numbers);

/*
*  Sắp Xếp key theo giá trị tăng dần dùng rsort($str);
*/