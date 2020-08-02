<?php
    try{
        $conexao = new PDO ("mysql:host=localhost;port=3308;dbname=projeto-php;charset=UTF8", "root", "");
    }catch (PDOException $erro){
        echo 'Falha na conexão' . $erro->getMessage();
    }
