<?php 

// usuwanie elementów z tablicy 

// $array = [1,2,3,4,5];
// $index_to_remove = 2;

// unset($array[$index_to_remove]);
// var_dump($array);
// echo "<br>"

// za pomocą pętli for wypełnić całą tablicę wartościami "0"

// $array = [1,2,3,4,5];

// for($i = 0; $i < count($array); $i++){
//     $array[$i] = 0;
// }
// echo "<br>";
// var_dump($array);

// echo "<h1>Tablice dwuwymiaorwe</h1>";

// $array2D = [ 
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

// echo $array2D[0][0];
// echo "<br>";

// for($i = 0; $i < count($array2D); $i++){
//     for($j = 0; $j < count($array2D[$i]); $j++){
//         echo $array2D[$i][$j];
//         echo " "; 
//     }
//     echo "<br>";
// }
// echo "<br>";

//

// $osoby = [
//     ["imie" => "Jan", "wiek" => 20],
//     ["imie" => "Anna", "wiek" => 25],
//     ["imie" => "Piotr", "wiek" => 30]
// ];

// foreach($osoby as $wiersz){
//     foreach($wiersz as $element){
//         echo $element . " ";
//     }
//     echo "<br>";
// }

// przerobienie tego ^ w for

// $osoby = [
//     ["imie" => "Jan", "wiek" => 20],
//     ["imie" => "Anna", "wiek" => 25],
//     ["imie" => "Piotr", "wiek" => 30]
// ];

// for($i = 0; $i < count($osoby); $i++) {
//     foreach($osoby[$i] as $element){
//         echo $element . " ";
//     }
//     echo "<br>";
// }

// Zadanie: Za pomocą dwóch pętli for dodać na diagonalnych wartość 0
// Diagonalna = przekątna

// $array4x4 = [
//     [1,2,3,4],
//     [5,6,7,8],
//     [9,10,11,12],
//     [13,14,15,16]

// ];

// for($i = 0; $i < count($array4x4); $i++){
//     for($j = 0; $j < count($array4x4[$i]); $j++){
//         if($i==$j){
//             $array4x4[$i][$j] = 0;
//         }
//         echo " "; 
//     }
//     echo "<br>";
// }

// printArray($array4x4);

// function printArray($array4x4){
// for($i = 0; $i < count($array4x4); $i++){
//     for($j = 0; $j < count($array4x4[$i]); $j++){
//         echo $array4x4[$i][$j];
//         echo " "; 
//     }
//     echo "<br>";
//     }
// }

// Zadanie2: Zsumować wszystkie elementy z tablicy

// $array4x4 = [
//     [1,2,3,4],
//     [5,6,7,8],
//     [9,10,11,12],
//     [13,14,15,16]

// ];

// $sum = 0;
// for($i = 0; $i < count($array4x4); $i++){
//     for($j = 0; $j < count($array4x4[$i]); $j++){
//         $sum = $sum + $array4x4[$i][$j];
//     }
// }
// echo $sum;

// printArray($array4x4);

// $sum = 0;
// function printArray($array4x4){
// for($i = 0; $i < count($array4x4); $i++){
//     for($j = 0; $j < count($array4x4[$i]); $j++){
//         echo $array4x4[$i][$j];
//         echo " "; 
//     }
//     echo "<br>";
//     }
// }

// Zadanie3: zsumować 1,5,9,13 i wstawić do tablicy jednowymiarowej - nie zroobione

$array4x4 = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16]
];

$sum = 0;
for($i = 0; $i < count($array4x4); $i++){
    for($j = 0; $j < count($array4x4[$i]); $j++){
        
    }
}
echo $sum;



?>