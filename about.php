<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Quem somos</title>
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
    
    <section class="container">
      <div class="box-text my-5">
          <h2  class="subTitle">Em que acreditamos?</h2>
            <p class="paragraph">
                Acreditamos em um mundo melhor, em que todos possam sentir a dor do próximo. 
                Acreditamos em uma sociedade mais solidária e empática, onde poderemos tranformar o mundo em um lugar melhor.  
            </p>
      </div>

      <div class="row">
        <div class="col-lg-6">
            <img class="picture" src="img/three.png" alt="imagem de uma arvore">
        </div>
        <div class="weare col-lg-6">
            <h2 class="subTitle">Quem somos?</h2>
            <p class="paragraph">
                Somos uma instituição sem fins lucrativos, que se iniciou com objetivo criar uma 
                plataforma onde ONG's e instuições de caridades possam atingir o maior público possível, 
                isso traz consigo o intuito de conscietizar mais a sociedade sobre causas que possam ser abraçadas. 
            </p>
        </div> 
      </div>

      <hr>
      
      <div class="last_prph d-flex justify-content-between row-my-5">
        <div class="joinus col-lg-6">
            <h2 class="subTitle">Junte-se a nós </h2>
            <p class="paragraph">
                Você que é instuição e deseja divulgar-se, cadastre-se em nossa plataforma para que 
                pessoas possam ter acesso a instuições de vocês. <br> Juntos somos mais fortes 
            </p>
        </div>
        <div class="logo-ong">
          <div class="logo"></div>
          
        </div>              
      </div>

   </section>

   <footer class="bg-dark text-light text-center py-4 mt-5">
      <div class="container">
          <p>&copy; 2024 Conexão Solidária. Todos os direitos reservados.</p>
      </div>
  </footer>
    
</body>
</html>