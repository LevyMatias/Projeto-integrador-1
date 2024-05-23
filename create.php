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
    <title>Adicionar Cliente</title>
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

    <div class="container my-5">
        <h1>Cadastrar Uma Ong</h1>
        
        <form action="process.php" method="post" id="form">
            <div class="form-elemnt my-4">
               <label id="label-target" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
                <span class="span__required"></span>
            </div>
            <div class="form-elemnt my-4">
                <label id="label-target" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" required>
                <span class="span__required"></span>
            </div>
            <div class="form-elemnt my-4">
                <label id="label-target" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" required>
                <span class="span__required"></span>
            </div>
            <div class="form-elemnt my-4">
                <label id="label-target" class="form-label">Site</label>
                <input type="text" class="form-control" name="link" id="link" required>
                <span class="span__required"></span>
            </div>
            <div class="form-element my-4">
                <label id="label-target" class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" id="descricao" required></textarea>
                <span class="span__required"></span>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Adicionar" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>

    <footer class="bg-dark text-light text-center py-4 mt-5">
      <div class="container">
          <p>&copy; 2024 Conexão Solidária. Todos os direitos reservados.</p>
      </div>
    </footer>

    
</body>
</html>