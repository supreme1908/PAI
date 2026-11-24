<?php
require 'nav.php';
require 'db_connect.php';
?>

<h1>Dodaj grę</h1>

<form method="post" action="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])) ?>">
    <label>Tytuł:
        <input type="text" name="tytul" maxlength="100" required>
    </label>

    <label>Gatunek:
        <input type="text" name="gatunek" maxlength="50" required>
    </label>

    <label>Platforma:
        <input type="text" name="platforma" maxlength="50" required>
    </label>

    <label>Rok wydania:
        <input type="number" name="rok_wydania" min="1901" max="2155" required>
    </label>

    <label>Ocena:
        <input type="number" name="ocena" min="0" max="10" step="0.1" required>
    </label>

    <button type="submit">Dodaj grę</button>
</form>

<?php
if (isset($_POST['tytul'])) {
    $tytul = mysqli_real_escape_string($conn, $_POST['tytul']);
    $gatunek = mysqli_real_escape_string($conn, $_POST['gatunek']);
    $platforma = mysqli_real_escape_string($conn, $_POST['platforma']);
    $rok = (int) $_POST['rok_wydania'];
    $ocena = (float) $_POST['ocena'];

    $sql = "INSERT INTO gry (tytul, gatunek, platforma, rok_wydania, ocena)
            VALUES ('$tytul', '$gatunek', '$platforma', $rok, $ocena)";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Dodano grę.</p>";
    } else {
        echo "<p>Nie udało się dodać gry.</p>";
    }
}

require 'footer.php';
?>