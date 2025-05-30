<?php include "../validar.php"; ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>

    <!-- Custom CSS -->
    <style>
      body {
        background-color: #f8f9fa;
        font-family: 'Roboto', sans-serif;
      }
      .container {
        max-width: 600px;
        margin-top: 50px;
      }
      .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .card-header {
        background-color: #007bff;
        color: white;
        text-align: center;
        font-size: 24px;
        padding: 20px;
      }
      .form-control {
        border-radius: 8px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
      }
      .btn-primary, .btn-info {
        border-radius: 8px;
        padding: 10px 20px;
        font-size: 16px;
      }
      .btn-success {
        background-color: #28a745;
        border: none;
      }
      .btn-success:hover {
        background-color: #218838;
      }
      .btn-group {
        display: flex;
        justify-content: space-between;
      }
      .btn-group .btn {
        width: 48%;
      }
      .btn-group .btn:first-child {
        margin-right: 4%;
      }
      a {
        text-decoration: none;
      }
    </style>

  </head>
  <body>
    <?php 
      include "conexao.php";
      $id = $_GET['id'] ?? '';

      // Verificar se o ID foi recebido corretamente
      if (!is_numeric($id)) {
          die("ID inválido!");
      }

      $id = intval($id); // Garantir que é um número inteiro

      $sql = "SELECT * FROM pessoas WHERE id = $id";
      $dados = mysqli_query($conn, $sql);

      // Verificar se a consulta foi bem-sucedida
      if (!$dados) {
          die("Erro na consulta: " . mysqli_error($conn));
      }

      $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
      <div class="card">
        <div class="card-header">
          Alteração de Cadastro
        </div>
        <div class="card-body">
          <form action="edit_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">titulo</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo $linha['titulo']; ?>">                
            </div>
            <div class="form-group">
                <label for="descricao">descriçao</label>
                <input type="text" class="form-control" name="descricao" value="<?php echo $linha['descricao']; ?>">                
            </div>
            <div class="form-group">
                <label for="situacao">situaçao</label>
                <option value="pedente">pedente</option>
                <option value="concluido">concluido</option>              
            </div>
            <div class="form-group">
                <label for="data_vencimento">data de vencimento</label>
                <input type="date" class="form-control" name="data_vencimento" value="<?php echo $linha['data_vencimento']; ?>">
            </div>            
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
          </form>
        </div>        
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyi/JpG4t36p1t6jC9kPAtf8w3faDlW9Vph6g4+9" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-9/reVnbcRx9eR52rsWsa0tGvmR6YzXsFmlmPE0XgY59kxNllfzyRrxh/s5cf18dz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0wY/7s6o6PpM22y6rcjF6kUGp1clkmP5iqNkdxGoF8J8Fow7" crossorigin="anonymous"></script>
  </body>
</html>
