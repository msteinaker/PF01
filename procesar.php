<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        echo "OK: Datos recibidos";
    } else {
        echo "ERROR: Faltan datos";
    }
}
?>