<?php   

// echo "Test";

// $zmienna = 5;

// if($zmienna > 4){
//     echo "<br> Zmienna większa od 4";
// } else if($zmienna == 5) {
//     echo "<br> zmienna równa sie 5";
// } else {
//     echo "<br> inny wynik";
// }

// $kolor = "red";

// switch ($kolor) {
//     case "red":
//         echo "czerwony";
//         break;
//     case "blue":
//         echo "niebieski";
//         break;
//     case "yellow":
//         echo "żółty";
//         break;
//     default:
//         echo "Kolor nieznany";
// }

    $a = 1;
    $b = -5;
    $c = 6;

    $delta = pow($b,2) - (4 * $a * $c);

    $x1 = (- ($b) - sqrt($delta)) / (2 * $a);
    $x2 = (- ($b) + sqrt($delta)) / (2 * $a);
    $x0 = (- ($b)) / (2 * $a);

    if($delta > 0){
    echo "<br> Dwa miejsca zerowe <br>", $x1, "<br>", $x2;
} else if($delta == 0) {
    echo "<br> Jedno miejsce zerowe <br>", $x0;
} else {
    echo "<br> Brak miejsca zerowego";
}



?>