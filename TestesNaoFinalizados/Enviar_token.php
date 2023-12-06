<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaga_certa";

// PDO connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function generateToken()
{
    return bin2hex(random_bytes(50));
}

if (isset($_POST['email']) && isset($_POST['userId'])) {
    $email = $_POST['email'];
    $userId = $_POST['userId'];

    require 'config.php';

    $query = "SELECT * FROM usuario1 WHERE id = :userId AND email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $token = bin2hex(random_bytes(60));
        $data_expiracao = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $query = "INSERT INTO refresh (token, email, data_expiracao, usuarios_id) VALUES (:token, :email, :data_expiracao, :usuarios_id)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':data_expiracao', $data_expiracao);
        $stmt->bindParam(':usuarios_id', $userId);
        $stmt->execute();

        echo $token;
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
// Close connection
$conn = null;
?>