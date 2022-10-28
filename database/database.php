<?php



$dns = "mysql:host=localhost;dbname=blog";
$user = getenv("DB_USER");
$pwd = getenv("DB_PWD");

try {
    $pdo = new PDO($dns, $user, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,     // permet de throw les erreurs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // permet de recuperer des tableau associatif a la place d'objets
    ]);
} catch(PDOException $e) {                               // PDOException pour recuperer les erreurs de PDO en cas d'erreurs
    echo "ERROR : ". $e->getMessage();                   // Récuperation du message $e->getMessage()
}

return $pdo;