<?php
    require 'database/database.php';
    header('content-type: application/json');
    if(isset($_POST)){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        /* query insert no banco */
        $query = "INSERT INTO cadastros (nome, email, senha) VALUES (:nome, :email, :senha)";
        /* prepara conexao */
        $stmt = $conexao -> prepare ($query);
        /* bind liga o parametro com o valor recebido do formulario */
        $stmt -> bindValue(':nome', $nome);
        $stmt -> bindValue(':email', $email);
        $stmt -> bindValue(':senha', $senha);
        /* executar a query */
        if($stmt -> execute()){
            echo json_encode(['status' => 1]);
        }else{
            echo json_encode(['status' => 0]);
        }

    }else{
        echo "Erro no envio dos dados. Tente novamente";
    }
?>