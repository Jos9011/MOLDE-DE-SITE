<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Exclusão de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php 
            include "conexao.php";
            
            // Verifique se o ID e o nome foram passados corretamente
            if (isset($_POST['id']) && isset($_POST['nome'])) {
                $id = $_POST['id'];
                $nome = $_POST['nome'];

                // Excluir o registro
                $sql = "DELETE from `pessoas` WHERE id = $id";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome excluído com sucesso!", 'success');
                } else {
                    mensagem("$nome NÃO foi excluído!", 'danger');
                }
            } else {
                // Caso o ID ou o nome não tenham sido passados corretamente
                mensagem("Erro: Dados inválidos.", 'danger');
            }
          ?> 
           <hr>
           <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
        </div>      
      </div>
    </div>
  </body>
</html>
