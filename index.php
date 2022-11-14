<?php
// To create an array, you use the array() construct: 
// //                         $myArray = array( values ); 
// // but more modern way is: $myArray = [1, 2, 3];

// $arr = array("One", "Two", "Three", "Four", "Five", 'text'=>'Hello');
// echo $arr[0]."<br>";
// echo $arr[1]."<br>";


// //to count the current elements in the array use f. COUNT :
// echo count($arr)."<br>";
// //to address the last el. of the array:
// echo $arr[count($arr)-1];
// //---------------------------Another way to create an array in PHP
// $var = 'php - 7';
// $arr3 = (array) $var;
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// //------------ Внести в массив элементы с пом. цикла -->

// $arr17 = [];
 
// for($q=0; $q < 10; $q++) {
//    $arr17[] = $q;
// }
// echo '<pre>';
// print_r($q);
// echo '</pre>';




// //---------------------
// $years = array();
// // assign some values
// for($i = 0; $i < 10; $i++)
// {
//     $years[$i] = 200 . $i;
// }
// // do something with them
// for($i = 0; $i < 10 ; $i++)
// {
//     echo $years[$i] . "<br/>";
// }


// //$years2 = array();
// // assign some values
// for($i = 0; $i < 10; $i++)
// {
//     $years[$i] = 201 . $i;
// }
// // do something with them
// for($i = 0; $i < 10 ; $i++)
// {
//     echo $years[$i] . "<br/>";
// }

//$result = $years + $years2;
// echo count($years)."<br>";


// $yearArr = [];
// $y = 2000;

// for ($i = 0; $i < 21; $i++)
// {
//     $yearArr[$i] = $y;    //на 1-й итер. в эл. с инд. 0 - вставляю 2000, на 2-й ...

//     echo '<pre>';
//     print_r($y);
//     echo '</pre>';
//     $y++;
// }
// echo count($yearArr)."<br>";
//--------------------------------------------------


// $connection = new PDO('mysql:host=localhost;dbname=personalDB', 'root', 'mysql');
// if ($connection->connect_error) die('Connection Error'); 
// else print ("Good connection!!! <br>");



?> 

 