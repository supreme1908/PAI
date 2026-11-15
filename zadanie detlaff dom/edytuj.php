<?php
require 'nav.php';
require 'db_connect.php';

$strona = basename($_SERVER['PHP_SELF']);
$gra = null;
?>

<h1>Edytuj grę</h1>

<form method="get" action="<?= htmlspecialchars($strona) ?>">
    <label>ID gry:
        <input type="number" name="id" min="1" required>
    </label>
    <button type="submit">Wczytaj grę</button>
</form>

<?php
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = "SELECT * FROM gry WHERE id = $id";
    $wynik = mysqli_query($conn, $sql);

    if (!$wynik) {
        echo "<p>Błąd wczytywania gry.</p>";
    } elseif (mysqli_num_rows($wynik) == 0) {
        echo "<p>Nie ma gry o takim ID.</p>";
    } else {
        $gra = mysqli_fetch_assoc($wynik);
    }
}
?>

<?php if ($gra) { ?>
    <form method="post" action="<?= htmlspecialchars($strona) ?>">
        <input type="hidden" name="id" value="<?= (int) $gra['id'] ?>">

        <label>Tytuł:
            <input type="text" name="tytul" maxlength="100"
                   value="<?= htmlspecialchars($gra['tytul']) ?>" required>
        </label>

        <label>Gatunek:
            <input type="text" name="gatunek" maxlength="50"
                   value="<?= htmlspecialchars($gra['gatunek']) ?>" required>
        </label>

        <label>Platforma:
            <input type="text" name="platforma" maxlength="50"
                   value="<?= htmlspecialchars($gra['platforma']) ?>" required>
        </label>

        <label>Rok wydania:
            <input type="number" name="rok_wydania" min="1901" max="2155"
                   value="<?= htmlspecialchars($gra['rok_wydania']) ?>" required>
        </label>

        <label>Ocena:
            <input type="number" name="ocena" min="0" max="10" step="0.1"
                   value="<?= htmlspecialchars($gra['ocena']) ?>" required>
        </label>

        <button type="submit">Zapisz zmiany</button>
    </form>
<?php } ?>

<?php
if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $tytul = mysqli_real_escape_string($conn, $_POST['tytul']);
    $gatunek = mysqli_real_escape_string($conn, $_POST['gatunek']);
    $platforma = mysqli_real_escape_string($conn, $_POST['platforma']);
    $rok = (int) $_POST['rok_wydania'];
    $ocena = (float) $_POST['ocena'];

    $sql = "UPDATE gry
            SET tytul = '$tytul', gatunek = '$gatunek', platforma = '$platforma',
                rok_wydania = $rok, ocena = $ocena
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Zapisano zmiany.</p>";
    } else {
        echo "<p>Błąd zapisu zmian.</p>";
    }
}

require 'footer.php';
?>