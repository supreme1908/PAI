<?php
require 'nav.php';
require 'db_connect.php';

$sql = "SELECT * FROM gry ORDER BY id";
$wynik = mysqli_query($conn, $sql);
?>

<h1>Lista gier</h1>

<?php
if (!$wynik) {
    echo "<p>Nie udało się wczytać gier.</p>";
    require 'footer.php';
    exit;
}

echo "<p>Liczba gier: " . mysqli_num_rows($wynik) . "</p>";
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tytuł</th>
            <th>Gatunek</th>
            <th>Platforma</th>
            <th>Rok wydania</th>
            <th>Ocena</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($gra = mysqli_fetch_assoc($wynik)) {
            echo "<tr>";
            echo "<td>" . $gra['id'] . "</td>";
            echo "<td>" . ($gra['tytul']) . "</td>";
            echo "<td>" . ($gra['gatunek']) . "</td>";
            echo "<td>" . ($gra['platforma']) . "</td>";
            echo "<td>" . ((string)$gra['rok_wydania']) . "</td>";
            echo "<td>" . ((string)$gra['ocena']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php require 'footer.php'; ?>