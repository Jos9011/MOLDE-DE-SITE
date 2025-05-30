<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Pesquisar</title>

    <style>
      body { background-color: #f8f9fa; font-family: 'Roboto', sans-serif; }
      .container { max-width: 1200px; margin-top: 50px; }
      .navbar { margin-bottom: 20px; }
      .btn-group { display: flex; justify-content: space-between; }
      .btn-group .btn { width: 48%; }
      .table th, .table td { text-align: center; vertical-align: middle; }
      .table th { background-color: rgb(108, 119, 131); color: white; }
      .card-header { background-color: #007bff; color: white; text-align: center; font-size: 24px; padding: 20px; border-radius: 10px; }

      /* Ajusta a busca */
      .search-container {
        display: flex;
        gap: 10px; /* Espaço entre o input e o botão */
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
      }
      .search-container .form-control {
        flex-grow: 1; /* Faz o input ocupar o espaço disponível */
      }

      /* Ajuste para o botão de fechar na modal */
      .modal-header .close {
        position: absolute; /* Coloca o botão no canto */
        top: 10px;
        right: 10px; /* Ajuste para o canto superior direito */
        padding: 0.5rem 1rem; /* Ajuste o padding para não ficar colado na borda */
      }
    </style>
  </head>
  <body>
    <?php 
      $pesquisa = $_POST['busca'] ?? ''; 
      include "conexao.php";
      $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
      $dados = mysqli_query($conn, $sql);
    ?>

    <div class="container">
      <div class="card-header">Pesquisa</div>
      
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline search-container" action="pesquisa.php" method="POST">
          <input class="form-control" type="search" placeholder="Nome" name="busca" autofocus>
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </nav>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nome</th><th>Endereço</th><th>Telefone</th><th>Email</th><th>Data de Nascimento</th><th>CPF</th><th>Funções</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while ($linha = mysqli_fetch_assoc($dados)) {
              $id = $linha['id'];
              $titulo = $linha['titulo'];
              $endereco = $linha['endereco'];
              $telefone = $linha['telefone'];
              $CPF = $linha['email'];
              $data_nascimento = mostra_data($linha['data_nascimento']);

              echo "<tr>
                      <td>$nome</td>
                      <td>$endereco</td>
                      <td>$telefone</td>
                      <td>$CPF</td>
                      <td>$data_nascimento</td>
                      <td>
                          <a href='cadastro_edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                          <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma' onclick='pegar_dados($id, \"$nome\")'>Excluir</a>
                      </td>
                    </tr>";
            }
          ?>
        </tbody>
      </table>
      <div class="btn-group">
        <a href="index.php" class="btn btn-info">Voltar para o início</a>
      </div>
    </div>

    <!-- Modal de Confirmação -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmação de Exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Deseja realmente excluir <b id="nome_pessoa">Nome</b>?</p>
          </div>
          <div class="modal-footer">
            <form action="excluir_script.php" method="POST">
              <input type="hidden" name="id" id="id">
              <input type="hidden" name="nome" id="nome"> <!-- Campo oculto para enviar o nome -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts necessários -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script>
      function pegar_dados(id, nome) {
        document.getElementById('id').value = id;
        document.getElementById('nome').value = nome; // Preenche o campo oculto com o nome
        document.getElementById('nome_pessoa').innerText = nome;
      }
    </script>
  </body>
</html>
