<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./" method="POST">  <!--Skrypt który się wykona jest w tym samym pliku, dodajemy post bo domyslne jest get-->

    <label for="login">Login: </label>
    <input type="text" id="login" name="login"><br>

    <label for="mail">E-Mail: </label>
    <input type="text" id="mail" name="mail"><br>

    <label for="passwd">Hasło: </label>
    <input type="text" id="passwd" name="passwd"><br>

    <label for="age">Wiek: </label>
    <input type="number" id="age" name="age"><br>

    <label for="rules">Akceptuj Regulamin: </label> <br>
    <input type="checkbox" name="rules" value="rules"><br> 

    <input type="submit" value="Zarejestruj się">

</form>


</body>
</html>

<?php 

$login = $_POST['login'];
$mail = $_POST['mail'];
$passwd = $_POST['passwd'];
$age = $_POST['age'];

    if (strlen($login) < 3) {
        echo "Login musi mieć minimum 3 znaki";
    } else {
        echo "Login poprawny!";
    }

    echo "<br>";

    if (strlen($mail) < 8 && !str_contains($mail, "@")) {
        echo "Mail musi mieć minimum 8 znaków lub @";
    } else {
        echo "Mail poprawny!";
    }

    echo "<br>";

    if (strlen($passwd) < 8) {
        echo "Hasło musi mieć minimum 8 znaków";
    } else {
        echo "Hasło poprawne";
    }

    echo "<br>";

    if ($age < 18) {
        echo "Musisz mieć między powyżej 18 lat";
    } else if($age > 100) {
        echo "Musisz mieć poniżej 100 lat";
    } else {
        echo "Wiek poprawny";
    }

    echo "<br>";

    if (!empty($_POST['rules'])) {

    } else {
        echo "Proszę o zaakceptowanie regulaminu.";
    }

    // do robić za pomoca isseta



?>