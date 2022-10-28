
<?php 
$articles = json_decode(file_get_contents("./articles.json"), true);
$dns = "";
$user = "";
$pwd = "";

$pdo = new PDO($dns, $user, $pwd);

$statement = $pdo->prepare("
    INSERT INTO article (
        title,
        category,
        image,
        content
    ) 
    VALUES (
        :title,
        :category,
        :image,
        :content
    )
");

foreach ($articles as $article) {
    $statement->bindValue(":title", $article['title']);
    $statement->bindValue(":category", $article['category']);
    $statement->bindValue(":image", $article['image']);
    $statement->bindValue(":content", $article['content']);
    $statement->execute();
}














