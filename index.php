<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Conexão Solidária | Início</title>
  </head>
<body>

    <header class="d-flex text-center justify-content-between py-3 bg-dark">
      <nav class="container">
        <ul class="nav d-flex container-list">
          <li class="nav-item mx-3">
            <a class="nav-link active" href="index.php">Inicio</a>
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

    <section class="container-img">
        <img class="img-fluid" src="img/background.jpg" alt="">
        <div class="container-img-text">
            <h1>Encontre uma ong para fazer sua doação</h1>
        </div>
    </section>

      <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Bem-vindo à Conexão Solidária</h1>
                <p class="paragraph1">Somos uma organização comprometida com a tranformar o mundo.</p>
                <a href="about.php" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="col-md-6">
                <img src="./img/hands.png" class="img-fluid" alt="Imagem da ONG">
            </div>
        </div>
      </div>

     <footer class="bg-dark text-light text-center py-4 mt-5">
        <div class="container">
            <p>&copy; 2024 Conexão Solidária. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>