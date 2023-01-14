<?php
// --- PDO ---  
// -- CONEXÃO --
try{
    $connection = new PDO('mysql:host=localhost;port=3306;dbname=cadastro','root','');
} catch(Exception $error){
    echo "Ocorreu o seguinte erro: {$error->getMessage()}";
}

// -- EXCLUIR --
$sql = "delete from clientes where nome = :nome";
$result = $connection->prepare($sql);
$result->bindValue(':nome', 'Mateus dos Santos');
$result->execute();

// -- ATUALIZAR --
$sql = "update clientes set email = 'antonio@gmail.com' where id = ':id";
$result = $connection->prepare($sql);
$result->bindValue(':id', '2');
$result->execute();

// -- INSERIR --
$sql = 'insert into clientes (nome, email, cidade, estado)
            values (:nome, :email, :cidade, :estado)';
$result = $connection->prepare($sql);
$result->bindValue(':nome', 'Alison Mateus');
$result->bindValue(':email', 'alison.moreira2302@gmail.com');
$result->bindValue(':cidade', 'Catanduva');
$result->bindValue(':estado', 'SP');
$result->execute();

$sql = 'insert into clientes (nome, email, cidade, estado)
            values (:nome, :email, :cidade, :estado)';
$result = $connection->prepare($sql);
$result->bindValue(':nome', 'Mateus dos Santos');
$result->bindValue(':email', 'mateussantos@gmail.com');
$result->bindValue(':cidade', 'Catanduva');
$result->bindValue(':estado', 'SP');
$result->execute();

// -- LER --
$sql = 'select * from clientes';
$result = $connection->prepare($sql);
$result->execute();
var_dump($result->fetchAll(PDO::FETCH_OBJ));  