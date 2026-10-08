<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./" method="POST">  <!--Skrypt który się wykona jest w tym samym pliku, dodajemy post bo domyslne jest get-->
    <label for="name">Imię: </label>
    <input type="text" id="name" name="name"><br>

    <label for="age">Wiek: </label>
    <input type="number" id="age" name="age"><br>

    <label for="sex">Płeć: </label>
    <input type="radio" name="sex" value="k"> Kobieta
    <input type="radio" name="sex" value="m"> Mężczyzna
    <br>
    <label for="game">Ulubiona seria gier: </label> <br>
    <input type="checkbox" name="game1" value="GTA"> GTA <br> 
    <input type="checkbox" name="game2" value="FIFA"> FIFA <br>
    <input type="checkbox" name="game3" value="CS"> CS2 <br>
    <input type="checkbox" name="game2" value="COD"> Call of duty <br>

    <br>
    <input type="submit"> 
</form>


</body>
</html>



<?php 

    if(isset($_POST['name']) && // Czy klucz instnieje
    isset($_POST['age']) && // Czy klucz instnieje
    !empty($_POST['name'] && // Czy jest wartosc
    !empty($_POST['age']))){ // Czy jest wartosc
    echo $_POST['name'];
    echo $_POST['age'];
    } else {
        echo "Proszę wypełnić wszystkie pola.";
    }

    // weryfikacja płci

    if(isset($_POST['sex'])) {
        if($_POST['sex'] == 'm'){
            echo "<br>";
            echo "Chłop";
        } else {
            echo "<br>";
            echo "Baba";
        }
    }

    // weryfikacja wybranej gry 

    // if(isset($_POST['game1']) && $_POST['game1'] == "GTA") {
    //     echo "<br>";
    //     echo "Wybrano GTA";
    // }

    for($i = 1; $i <= 4; $i++){
        if(isset($_POST['game'.$i])) {
            echo "<br>";
            echo $_POST['game'.$i];
    }
    }
    
?>