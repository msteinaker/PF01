// Verificamos que lleguen los datos por POST
if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);

    if ($usuario !== "" && $clave !== "") {
        // Si ambos datos están presentes y no vacíos
        echo "OK: Datos recibidos correctamente";
    } else {
        echo "ERROR: Los campos no pueden estar vacíos";
    }
} else {
    echo "ERROR: No se recibieron los datos esperados";
}
?>