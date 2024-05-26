
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - Eleições On-line</title>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous">
    <!--<link rel="stylesheet" href="ESTILO/bootstrap-4.6.2-dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="ESTILO/style.css">
  </head>

  

  <body>

    <div class="container-fluid border">
      <header class="blog-cabecalho py-3">
        <div class="container-fluid text-center">
          <h1 class="display-2">Eleições On-line</h1>
          <small class="text-muted">
            <h4>Facilitando seu acesso a democracia!</h4>
          </small>
          <br>
        </div>
      </header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="index.php" class="navbar-brand"><h2>Eleições On-line</h2></a>
        <button class="navbar-toggler" type="button"
          data-toggle="collapse" data-target="#navegacao"
          aria-controls="navegacao" aria-expanded="true"
          aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navegacao">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="cadastroCandidatos.php" class="nav-link">Configuração da Urna
                <span class="sr-only">(atual)</span>
              </a>
            </li>
            <li class="nav-item active">
              <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Processo de Votação
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="votacaoPresidente.php">Votação para Presidente</a>
                  <a class="dropdown-item" href="votacaoSenador.php">Votação para Senador</a>
                  <a class="dropdown-item" href="votacaoDeputadoFederal.php">Votação para Deputado Federal</a>
                </div>
              </div>
            </li>
            <li class="nav-item active">
              <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Resultados da Eleição
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="resultadoPresidente.php">Resultado para Presidente</a>
                  <a class="dropdown-item" href="resultadoSenador.php">Resultado para Senador</a>
                  <a class="dropdown-item" href="resultadoDeputadoFederal.php">Resultado para Deputado Federal</a>
                </div>
              </div>
            </li>
          </ul>
          
        </div>
      </nav>
    </div>

    <main role="main" class="container-fluid">
      <div class="row">

        <aside class="col-sm-3 blog-sidebar border">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Você está aqui:</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Eleições On-line</a></li>
                <li class="breadcrumb-item active" aria-current="page">Configuração da Urna</li>
              </ol>
            </nav>
          </div>
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Sobre nós:</h4>
            <p class="mb-0">Somos um time de <strong><em>pessoas legais</em></strong> que gostam de <strong><em>programação</em></strong> e foram <strong><em>obrigadas</em></strong> a programar em PHP para obter nota.</p>
          </div>

          

          
        </aside>

        

        <div class="col-sm-9 blog-main">

          <div class="blog-post text-center">
            <br><br>
            <h2>Cadastro de Candidatos</h2>
            <br>
          
              <form action="cadastroCandidatos.php" method="post" enctype="multipart/form-data" class="border border-dark rounded-lg p-3">
                

                <div class="row mb-4">
                  <label for="nomeCandidato" class="col-sm-4 col-form-label">Nome do Candidato:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNomeCandidato" name="nomeCandidato" placeholder="Nome do Candidato">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="numeroCandidato" class="col-sm-4 col-form-label">Número do Candidato:</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputNumeroCandidato" name="numeroCandidato" placeholder="Número do Candidato">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="partidoCandidato" class="col-sm-4 col-form-label">Partido do Candidato:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPartidoCandidato" name="partidoCandidato" placeholder="Partido do Candidato">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="cargoCandidato" class="col-sm-4 col-form-label">Cargo do Candidato:</label>
                  <div class="col-sm-8">
                    <select class="form-select form-control custom-select" name="cargoCandidato" id="inputCargoCandidato">
                      <option value="none" selected>Selecione...</option>
                      <option value="cargoPresidente">Presidente</option>
                      <option value="cargoSenador">Senador</option>
                      <option value="cargoDeputadoFederal">Deputado Federal</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-4">
                  <label for="fotoCandidato" class="col-sm-4 col-form-label">Foto do Candidato:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="inputFotoCandidato" name="fotoCandidato" >
                  </div>
                </div>
               
                
                <div class="row mb-4">
                  <div class="col-sm-1"></div>
                  <button type="submit" class="btn btn-primary col-sm-4">Enviar Candidatura</button>
                  <div class="col-sm-2"></div>
                  
                  <button type="reset" class="btn btn-warning col-sm-4">Limpar Campos</button>
                  <div class="col-sm-1"></div>
                </div>

                
              
              </form>
            

          </div>
          

        </div>

      </main>

      <footer class="blog-rodape border">
        <p>Template de sistema de eleições on-line construído para a disciplina de Linguagens de Programação Estruturada do curso de Análise e Desenvolvimento de Sistemas da Faculdade Laboro.
        </p>
        <div class="container-fluid border">
          <div class="row">
            <div class="col-sm-1"></div>
            
            <div class="col-sm-1">
              <img src="IMAGENS/andre.jpg" alt="André" class="img-fluid card-img img-thumbnail ">
              <br>
              André <br> Frazão
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/MarcosAndre.png" class="img-fluid card-img img-thumbnail ">
              <br>
              Marcos <br> André
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/RegianeAraujo.png" alt="Regiane Araujo" class="img-fluid card-img img-thumbnail ">
              <br>
              Regiane <br> Araujo
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/dheurymy.jpg" alt="Rycherd Dheurymy" class="img-fluid card-img img-thumbnail ">
              <br>
              Rycherd <br> Dheurymy
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/Sandra.png" alt="Sandra" class="img-fluid card-img img-thumbnail ">
              <br>
              Sandra <br> Regina
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/TarcisioGuedes.png" alt="Tarcisio Guedes" class="img-fluid card-img img-thumbnail ">
              <br>
              Tarcisio <br> Guedes
            </div>
            <div class="col-sm-1">
              <img src="IMAGENS/ValerianeAlmeida.png" alt="Valeriane Almeida" class="img-fluid card-img img-thumbnail ">
              <br>
              Valeriane <br> Almeida
            </div>
            <div class="col-sm-1"></div>
          </div>
        </div>
        <p>
          <a href="#">Voltar
            ao topo</a>
        </p>
      </footer>

    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>

    <!--<script src="ESTILO/popper/popper.min.js"></script>
   <script src="ESTILO/jquery/jquery-3.7.1.slim.min.js"></script>
   <script src="ESTILO/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>-->
   
  </html>
<?php



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializar variáveis
    $nome = $numero = $partido = $cargo = $upload_file = '';
    $votos = 0;

    // Capturar e sanitizar dados do formulário se existirem
    if (isset($_POST['nomeCandidato'])) {
        $nome = htmlspecialchars($_POST['nomeCandidato']);
    }
    if (isset($_POST['numeroCandidato'])) {
        $numero = htmlspecialchars($_POST['numeroCandidato']);
    }
    if (isset($_POST['partidoCandidato'])) {
        $partido = htmlspecialchars($_POST['partidoCandidato']);
    }
    if (isset($_POST['cargoCandidato'])) {
        $cargo = htmlspecialchars($_POST['cargoCandidato']);
    }

    // Verificar se um arquivo foi enviado
    if (isset($_FILES['fotoCandidato']) && $_FILES['fotoCandidato']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['fotoCandidato'];

        // Definir o diretório de upload
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Definir o caminho completo para salvar o arquivo
        $upload_file = $upload_dir . basename($foto['name']);

        // Mover o arquivo para o diretório de upload
        if (move_uploaded_file($foto['tmp_name'], $upload_file)) {
            echo "Arquivo enviado com sucesso.<br>";
        } else {
            echo "Erro ao enviar o arquivo.<br>";
        }
    } else {
        echo "Nenhum arquivo enviado ou erro no envio.<br>";
    }

    // Definir o nome do arquivo CSV baseado no cargo
    switch ($cargo) {
        case 'cargoPresidente':
            $csv_file = 'candidatos_presidente.csv';
            break;
        case 'cargoSenador':
            $csv_file = 'candidatos_senador.csv';
            break;
        case 'cargoDeputadoFederal':
            $csv_file = 'candidatos_deputado_federal.csv';
            break;
        default:
            echo "Cargo inválido.";
            exit;
    }

    // Preparar os dados para serem salvos no CSV
    $data = [$nome, $numero, $partido, $cargo, $upload_file, $votos];

    // Salvar os dados no arquivo CSV
    $file_handle = fopen($csv_file, 'a');
    if ($file_handle !== false) {
        fputcsv($file_handle, $data);
        fclose($file_handle);
        echo "Dados salvos com sucesso no arquivo CSV.<br>";
    } else {
        echo "Erro ao abrir o arquivo CSV.<br>";
    }
}
?>

  