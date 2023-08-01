<?php
$dbPath=__DIR__.'/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");



$sql = 'INSERT INTO  videos (url, titulo) VALUES(url,?)';
$statement =$pdo->prepare($sql);
$statement->bindValue(1,$_POST['url']);
$statement->bindValue(2,$_POST['titulo']);

var_dump($statement->execute());

if($statement->execute()===false){
    header('Location: /index.php?sucesso=0');
}else{
    header('Location: /index.php?sucesso=1');
    
}
