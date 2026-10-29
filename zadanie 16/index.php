<?php 

session_start();
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            
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

    <input type="submit" value="Dodaj produkt do koszyka">

</form>

    <h2>Koszyk</h2>
    <table border="1">
        <tr>
            <th>Nazwa produktu</th>
            <th>Cena produktu</th>
            <th>Liczba sztuk</th>
            <th>Wartość koszyka</th>
        </tr>

    <?php
    $total = 0;

    foreach($_SESSION['cart'] as $product) {

        $value = $product['price'] * $product['amount'];
        $total += $value;

        echo "<tr>";
        echo "<td>";

        $product['name'] . "</td>";
        echo "<td>";
        $product['price'] . "zł </td>";
        echo "<td>";
        $product['amount'] . "</td>";
        echo "<td>";
        $value . "zł </td>";
        echo "<tr>";

    }

    ?>
    <table>

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


    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
 
    if(isset($_POST['add'])) {
    $nazwaproduktu2 = $_POST['name'];
    $cena2 = $_POST['price'];
    $sztuki2 = $_POST['amount'];

    $_SESSION['cart'][] = [
        'name' => $nazwaproduktu2,
        'price' => $cena2,
        'amount' => $sztuki2
    ];

    }
?>