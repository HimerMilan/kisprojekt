<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Kisprojekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$nev = $_POST["nev"];
$login = $_POST["login"];
$jelszo = $_POST["jelszo"];
$szerepkor = $_POST["szerepkor"];
$auto = $_POST["auto"];
$pc = $_POST["pc"];
$mobil = $_POST["mobil"];
$email = $_POST["email"];

$jelszo = password_hash($jelszo, PASSWORD_DEFAULT);

$sql = "INSERT INTO reg
        (nev, login, jelszo, szerepkor, auto, pc, mobil, email)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssssiiss",
    $nev,
    $login,
    $jelszo,
    $szerepkor,
    $auto,
    $pc,
    $mobil,
    $email
);

if ($stmt->execute()) {

    echo "<h2>Sikeres regisztráció!</h2>";
    echo "<p>Az adatok sikeresen el lettek mentve.</p>";
    echo '<a href="index.php">Vissza</a>';

} else {

    echo "Hiba történt: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>