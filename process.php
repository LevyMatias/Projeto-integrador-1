<?php
include('connect.php');

    if (isset($_POST["create"])) {
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $categoria = mysqli_real_escape_string($conn, $_POST["categoria"]);
        $link = mysqli_real_escape_string($conn, $_POST["link"]);
        $descricao = mysqli_real_escape_string($conn, $_POST["descricao"]);

        $sqlInsert = "INSERT INTO cliente (nome, email, categoria, link, descricao) VALUES ('$nome', '$email', '$categoria', '$link', '$descricao')";
        
        if (mysqli_query($conn, $sqlInsert)) {
            session_start();
            $_SESSION["create"] = "Cliente Adicionado com Sucesso!";
            header("Location: ongs.php");
            exit();
        } else {
            die("Erro ao adicionar cliente: " . mysqli_error($conn));
        }
    }

    if (isset($_POST["edit"])) {
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $categoria = mysqli_real_escape_string($conn, $_POST["categoria"]);
        $link = mysqli_real_escape_string($conn, $_POST["link"]);
        $descricao = mysqli_real_escape_string($conn, $_POST["descricao"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);

        $sqlUpdate = "UPDATE cliente SET nome = '$nome', email = '$email', categoria = '$categoria', link = '$link', descricao = '$descricao' WHERE id='$id'";
        
        if (mysqli_query($conn, $sqlUpdate)) {
            session_start();
            $_SESSION["update"] = "Cliente Atualizado!";
            header("Location: ongs.php");
            exit();
        } else {
            die("Erro ao atualizar cliente: " . mysqli_error($conn));
        }
    }

$conn->close();
?>
