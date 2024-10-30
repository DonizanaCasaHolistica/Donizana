<?php
$host = 'localhost'; // Cambia esto si tu servidor es diferente
$db = 'casa_holistica';
$user = 'root'; // Cambia esto por tu usuario de la base de datos
$pass = ''; // Cambia esto por tu contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para obtener los datos de las terapias
    $stmt = $pdo->query("SELECT * FROM terapias");
    $terapias = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>