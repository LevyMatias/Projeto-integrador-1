<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ongs</title>
    <style>
        
    </style>
</head>
<body>


    <header class="d-flex text-center justify-content-between py-3 bg-dark">
      <nav class="container">
        <ul class="nav d-flex container-list">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="about.php">Quem somos</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="ongs.php">Ongs</a>
          </li>
        </ul>
      </nav>

      <a href="create.php">
        <div class="mx-3 button">
          Cadastrar
        </div>
      </a>
      
    </header>
    
    <div class="container my-4">
        <h1>Instituições Cadastradas</h1>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Site</th>
                        <th scope="col">Acão</th>
                    </tr>
                </thead>
            <tbody>
        
            <?php
                include('connect.php');
                $sqlSelect = "SELECT * FROM cliente";
                $result = mysqli_query($conn,$sqlSelect);
                while($data = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $data['nome']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['categoria']; ?></td>
                    <td><a href="<?php echo $data['link']; ?>" target="_blank">Link</a></td>
                    <td>
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Descrição</a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            <?php
        }
        ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>