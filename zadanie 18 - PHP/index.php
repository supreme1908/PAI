<?php

//tworzenie połączenia 
$conn = mysqli_connect("localhost", "root", "", "magazyn");

if($conn->connect_error){
    die("Połączenie nie udane: " . $conn->connect_error);
}
echo "Połączenie się powiodło.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">

    <label for="name">Nazwa produktu: </label>
    <input type="text" id="name" name="name"><br>

    <label for="price">Cena jednostkowa produktu: </label>
    <input type="number" id="price" name="price"><br>

    <label for="amount">Liczba sztuk: </label>
    <input type="number" id="amount" name="amount"><br>

    <input type="submit" value="Dodaj produkt do koszyka"><br>

</form>

    <?php

    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
        // tabela products
        // pola: id, name, price, amount
        
        $sql = "INSERT INTO `products`(`id`, `name`, `amount`, `price`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";

        // wykonuje zapytanie na bazie danych na podstawie podanego sqla oraz połączenia z bd
        if(mysqli_query($conn,$sql)){
            echo "Udało sie dodać rekord!";
        } else {
            // mysqli error - wyciąga błąd z połączenia
            echo "Bluescreen panie Heniu: ". mysqli_error($conn);
        }

        mysqli_close($conn);

    }

    ?>
</body>
</html>
