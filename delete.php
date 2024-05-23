<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM cliente WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Cliente Deletado!";
    header("Location:ongs.php");
}else{
    die("Algo deu errado!");
}
}else{
    echo "Cliente não existe!";
}
?>