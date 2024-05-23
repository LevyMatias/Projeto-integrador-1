<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Detalhes</title>
</head>
<body>

    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Detalhes dessa instituição</h1>
            <div>
            <a href="ongs.php" class="btn btn-primary">Voltar</a>
            </div>
        </header>
        <div class="p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM cliente WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Descrição:</h3>
                 <p><?php echo $row["descricao"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>Cliente não encontrado</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>