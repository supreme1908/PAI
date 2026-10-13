<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./" method="GET">  <!--Skrypt który się wykona jest w tym samym pliku, dodajemy post bo domyslne jest get-->

    <label for="name">Imię: </label>
    <input type="text" id="name" name="name"><br>

    <label for="age">Wiek: </label>
    <input type="number" id="age" name="age"><br>

    <label for="ticket">Bilet</label>
    <select name="ticket" id="ticket">
        <option value="normal">Normalny</option>
        <option value="reduced">Ulgowy</option>
    </select>

    <br>
     <input type="submit" value="Oblicz cenę">
</form>


</body>
</html>



<?php 
    
    $ticket = $_GET['ticket'];
    $age = $_GET['age'];
    $ticketPrice;
    $name = $_GET['name'];

    if($ticket == "normal" && $age > 7){
        $ticketPrice = 30; 
    } else if($ticket == "reduced" && $age > 7){
        $ticketPrice = 15;
    } else if($age <= 7){
        $ticketPrice = 0;
    }
    
    echo $ticketPrice;
    echo "<br>";
    echo "Cześć, ".$name;
    echo "!<br>";
    echo "Twój wiek to: ".$age;
    echo "<br>";
    echo "Rodzaj biletu: ".$ticket;
    echo "<br>";
    echo "Cena biletu: ".$ticketPrice
?>