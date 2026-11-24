<?php
require 'nav.php';
require 'db_connect.php';
?>

<h1>Usuń grę</h1>

<form method="post" action="<?= basename($_SERVER['PHP_SELF']) ?>">
    <label>ID gry: <input type="number" name="id" min="1" required></label>
    <button type="submit">Usuń grę</button>
</form>

<?php
if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    $sql = "DELETE FROM gry WHERE id = $id";
    $wynik = mysqli_query($conn, $sql);

    if (!$wynik) {
        echo "<p>Błąd usuwania gry.</p>";
    } elseif (mysqli_affected_rows($conn) == 0) {
        echo "<p>Nie ma gry o takim ID.</p>";
    } else {
        echo "<p>Usunięto grę.</p>";
    }
}

require 'footer.php';
?>