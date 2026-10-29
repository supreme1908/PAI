<?php 

session_start();
if(!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = [];
}

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
            
    <!-- <label for="name">Imię: </label>
    <input type="text" id="name" name="name"><br> -->

    <!-- <label for="age">Wiek: </label>
    <input type="number" id="age" name="age"><br> -->
    <!-- <input type="submit" value="Wyślij"> -->


    <!-- <label for="namep">Nazwa produktu: </label>
    <input type="text" id="namep" name="namep"><br>

    <label for="price">Cena jednego produktu: </label>
    <input type="number" id="price" name="price"><br>

    <label for="amount">Ilość zakupionych sztuk: </label>
    <input type="number" id="amount" name="amount"><br>

    <input type="submit" value="Oblicz"> -->

    <label for="name">Nazwa produktu: </label>
    <input type="text" id="name" name="name"><br>

    <label for="price">Cena jednostkowa produktu: </label>
    <input type="number" id="price" name="price"><br>

    <label for="amount">Liczba sztuk: </label>
    <input type="number" id="amount" name="amount"><br>

    <input type="submit" value="Dodaj produkt do koszyka"><br>

</form>

    <form method="POST" action="">
        <input type="submit" value="clean"><br>
</form>

    <?php

    if(isset($_POST['clean'])){
        session_unset();
        echo "Wyczyszczony koszyk!";
    }

    // utworzenie tablicy z informacjami z formularza
    // przepisanie ich z post do nowej tablicy asocjacyjnej
    if(isset($_POST["name"])){

    $new_product = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'amount' => $_POST['amount']
  ];

    // przypisanie zmiennej do kszyka
    $_SESSION['cart'][] = $new_product;
    // var_dump($_SESSION['cart']);

    // printowanie tabeli
    echo "<table border=1>";
    echo "<tr><th>Nazwa</th><th>Cena</th><th>Ilość</th><th>Suma</th></tr>";
    foreach($_SESSION['cart'] as $product) {
        echo "<tr>";
        echo "<td>".$product['name']."</td>";
        echo "<td>".$product['price']."</td>";
        echo "<td>".$product['amount']."</td>";
        echo "<td>".((int)$product['amount']*(int)$product['price'])."</td>";
        echo "</tr>";

    }
    echo "</table>";

    }
    ?>
</body>
</html>
<?php 

    // echo "Imię: ". $_GET['name'];
    // echo "<br>";
    // echo "Wiek: ". $_POST['age'];
    // if(isset($_POST['namep']) && isset($_POST['price']) && isset($_POST['amount'])) {

    // $nazwaproduktu = $_POST['namep'];
    // $cena = $_POST['price'];
    // $sztuki = $_POST['amount'];

    // $wynik = $cena * $sztuki;
    // echo "Produkt: " . $nazwaproduktu . "<br> Cena produktu: " . $cena . "<br> Ilość sztuk: " . $sztuki . "<br> Do zapłaty: " . $wynik;

    // }

?>