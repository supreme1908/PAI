<?php
$strona = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kolekcja gier</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        nav a {
            display: inline-block;
            padding: 8px;
            color: navy;
        }

        .aktywna {
            background-color: navy;
            color: white;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid gray;
            padding: 6px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php" class="<?php if ($strona == 'index.php') echo 'aktywna'; ?>">Start</a>
        <a href="dodaj.php" class="<?php if ($strona == 'dodaj.php') echo 'aktywna'; ?>">Dodaj grę</a>
        <a href="lista.php" class="<?php if ($strona == 'lista.php') echo 'aktywna'; ?>">Lista gier</a>
        <a href="edytuj.php" class="<?php if ($strona == 'edytuj.php') echo 'aktywna'; ?>">Edytuj grę</a>
        <a href="usun.php" class="<?php if ($strona == 'usun.php') echo 'aktywna'; ?>">Usuń grę</a>
    </nav>

    <main>