<?php

    include_once('conexao.php');
    
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql = 'INSERT INTO tb_formulario(email,assunto,mensagem) VALUES (:email,:assunto,:mensagem)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':assunto',$assunto);
    $stmt->bindParam(':mensagem',$mensagem);
    $stmt->execute();