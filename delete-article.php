<?php
$articleDb = require_once __DIR__.'/database/models/articlesDb.php';

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET["id"] ?? "";
$articles = [];

if($id) {
    $articleDb->deleteOne($id);
}
header('Location: /');
    
?>