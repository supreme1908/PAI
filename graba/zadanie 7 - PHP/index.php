<?php 
// funkcja wyswietlanie tablicy

    $array = [1,2,3,4,5];
    $array2 = [6,7,8,9,10];

    printArray($array);
    printArray($array2);
    echo sumNumbers(6,7,6,7,6,7,6,7,6,7,2);
    echo "<br>";
    echo multiplyNumbers(9);
    echo "<br>";
    echo zmienNaWielkie("kruca");
    echo "<br>";
    echo czyPierwsza(7);
    echo "<br>";
    echo czyPierwsza(10);
    echo "<br>";

    function printArray($array) {
        for($i = 0; $i < count($array); $i++) {
            echo $array[$i];
        }
        echo "<br>";
    }

// zmienna liczba argumentow

    function sumNumbers(...$x) {
        $sum = 0;
        for($i = 0; $i < count($x); $i++)
            $sum = $sum + $x[$i];
        return $sum;
}

// wartosc domyslna

    function multiplyNumbers($a, $b = 9) {
        return $a * $b; 
    }


// int w parametrach - jakiego typu są przyjmowane parametry

// function multiplyNumbers(int $a, int $b = 9): int{
//     return $a * $b;
// }

// zadanie napisz funkcje zmienNaWielkie(string $tekst): string, która zwraca tekst wielkimi literami

    function zmienNaWielkie(string $tekst): string{
        return strtoupper($tekst);
    }

// funckja czyPierwsza(int $n): bool - sprawdza, czy liczba jest pierwsza. Potem napisz drugą funckję która wypisuje wszystkie liczby pierwsze z przedziału, korzystając z tej pierwszej.

   function czyPierwsza(int $n): bool{
        if($n < 2){
            return false;
        }
        
        for($i = 2; $i <= sqrt($n); $i++){
            // echo $i;
            if(($n % $i) == 0){
                echo $n . "X" . $i;
                echo "<br>";
                return false;
            }
        }
        return true;
    }

    function wypiszLiczbyPierwszeZZakresu($początek, $koniec){
        for($i = $początek; $i <= $koniec; $i++){
            if(czyPierwsza($i)){
                echo $i;
                echo "<br>";    
            }
        }
    }

// funckja obliczStatystyki(array $liczby): array - zwraca tablicę asosjacyjną z kluczami min, max, srednia, suma. Każda z tych opcji to osoban funkcja - nie zrobione

    function obliczStatystyki(array $liczby): array{
    // $liczby = [
    //     ["min" => 20],
    //     ["max" => 25],
    //     ["srednia" =>> 30]
    // ];
}


?>