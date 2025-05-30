
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Empresa</title>
    <style>
      /* Fundo de página */
      body {
        background-color: #f4f4f9;
        color: #333;
        font-family: 'Arial', sans-serif;
      }

      /* Jumbotron simplificado */
      .jumbotron {
        background-color: #fff;
        border-radius: 8px;
        padding: 2rem;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 5rem;
      }

      .jumbotron h1 {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
      }

      .jumbotron p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 1.5rem;
      }

      .btn {
        font-size: 1rem;
        padding: 0.75rem 2rem;
        margin-top: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        border: none;
      }

      .btn-primary {
        background-color: #007bff;
        color: white;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      .btn-danger {
        background-color: #dc3545;
        color: white;
      }

      .btn-danger:hover {
        background-color: #c82333;
      }

      /* Centralizar o conteúdo da página */
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .row {
        width: 100%;
        max-width: 600px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron text-center">
            <h1 class="display-4">Cadastro Web</h1>
            <p class="lead">Sistema simplificado para cadastro e pesquisa. Base de estudos com PHP e MySQL.</p>
            <p>Acesse as funções abaixo:</p>
            <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">MARCA</a>
            <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Pesquisar</a>
            <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Sair</a>
          </div>        
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyF6VtC3ZzMl+u6SJKzU4Kh4GpJuZfuTQp3Uou/6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-KJ3o2DKtIkvYIKg5R2RmnOBW66W4vS1en+1Jm8r5vxPZC/xvhJxxhldFsk93hpu6" crossorigin="anonymous"></script>

    <a href="../index.html" class="back-home" title="Voltar para o site principal">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
      stroke-linecap="round" stroke-linejoin="round" class="icon">
      <polyline points="15 18 9 12 15 6"></polyline>
    </svg>
  </a>

  <style>
  .back-home {
  position: fixed;
  top: 20px;
  left: 20px;
  display: flex;
  align-items: center;
  gap: 8px;
  background-color: #2874a6;
  color: white;
  padding: 10px 16px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.95rem;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease, transform 0.2s ease;
  z-index: 999;
}

.back-home:hover {
  background-color: #66b3ff;
  color: #1b2a4e;
  transform: translateX(-2px);
}

.back-home .icon {
  stroke: currentColor;
}
</style>
  </body>
</html>
