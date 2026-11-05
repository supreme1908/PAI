<?php

//tworzenie połączenia 
$conn = mysqli_connect("localhost", "root", "", "magazyn");

if($conn->connect_error){
    die("Połączenie nie udane: " . $conn->connect_error);
}
?>