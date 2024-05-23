<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/validate.css">
    <script defer type="module" src="./js/validate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar Ong</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Editar Ong</h1>
            <div>
            <a href="ongs.php" class="btn btn-primary">Voltar</a>
            </div>
        </header>

        <form action="process.php" method="post" id="form">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM cliente WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="form-elemnt my-4">
                    <label id="label-target" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome:" value="<?php echo $row["nome"]; ?>" required>
                    <span class="span__required"></span>
                </div>
                <div class="form-elemnt my-4">
                    <label id="label-target" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email:" value="<?php echo $row["email"]; ?>" required>
                    <span class="span__required"></span>
                </div>
                <div class="form-elemnt my-4">
                    <label id="label-target" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria:" value="<?php echo $row["categoria"]; ?>" required>
                    <span class="span__required"></span>
                </div>
                <div class="form-elemnt my-4">
                    <label id="label-target" class="form-label">Site</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Site:" value="<?php echo $row["link"]; ?>" required>
                    <span class="span__required"></span>
                </div>
                <div class="form-element my-4">
                    <label id="label-target" class="form-label">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição:" required><?php echo $row["descricao"]; ?></textarea>
                    <span class="span__required"></span>
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Atualizar" class="btn btn-primary">
                </div>
                    <?php
                }else{
                    echo "<h3>Cliente não existe!</h3>";
                }
            ?>
           
        </form>
        
    </div>

</body>
</html>