<?php

// Caminho para o arquivo CSV
$arquivoCSVPresidente = 'candidatos/candidatos_presidente.csv';

$textoInformativo = "Vote com consciência!";

// Abre o arquivo para leitura
if (($handle = fopen($arquivoCSVPresidente, 'r')) !== FALSE) {
  // Inicializa um array para armazenar os dados
  $dados = [];

  // Loop através de cada linha do arquivo CSV
  while (($linha = fgetcsv($handle, 1000, ',')) !== FALSE) {
    // Adiciona a linha ao array de dados
    $dados[] = $linha;
  }

  // Fecha o arquivo
  fclose($handle);

  // Percorre cada linha do array de dados
  foreach ($dados as $indice => $linha) {
    // Cria variáveis dinamicamente
    ${"nomeCandidatoVotacaoPresidente$indice"} = $linha[0];
    ${"numeroCandidatoVotacaoPresidente$indice"} = $linha[1];
    ${"partidoCandidatoVotacaoPresidente$indice"} = $linha[2];
    ${"fotoCandidatoVotacaoPresidente$indice"} = $linha[4];
  }
} else {
  echo 'Não foi possível abrir o arquivo.';
}

// Função para ler todo o conteúdo do arquivo CSV cadastro_presidente.csv e armazenar em um array
function lerCsv($arquivoCSVPresidente)
{
  $dadosPresidente = [];
  if (($handle = fopen($arquivoCSVPresidente, 'r')) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
      $dadosPresidente[] = $row;
    }
    fclose($handle);
  }
  return $dadosPresidente;
}

// Função para escrever todo o conteúdo de um array de volta para o arquivo CSV
function escreverCsv($arquivoCSVPresidente, $dadosPresidente)
{
  if (($handle = fopen($arquivoCSVPresidente, 'w')) !== FALSE) {
    foreach ($dadosPresidente as $linha) {
      fputcsv($handle, $linha);
    }
    fclose($handle);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Inicializar variáveis
  $numeroCandidatoVotado = 0;


  // Capturar e sanitizar dados do formulário se existirem
  if (isset($_POST['numeroCandidatoVotacaoPresidente'])) {
    $numeroCandidatoVotado = htmlspecialchars($_POST['numeroCandidatoVotacaoPresidente']);
  }



  if ($numeroCandidatoVotado == $numeroCandidatoVotacaoPresidente0) {
    //Ler o arquivo CSV dos candidadtos a presidente
    $dadosPresidente = lerCsv($arquivoCSVPresidente);

    // Verificar se a posição existe e alterar o dado específico
    $linhaParaAlterar = 0;
    $colunaParaAlterar = 5;

    //Altera o dado dos votos do candidato, adicionando +1
    if (isset($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar])) {
      $dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] = ($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] + 1);
    }

    escreverCsv($arquivoCSVPresidente, $dadosPresidente);

    $textoInformativo = "Voto registrado com sucesso.";
  } elseif ($numeroCandidatoVotado == $numeroCandidatoVotacaoPresidente1) {
    //Ler o arquivo CSV dos candidadtos a presidente
    $dadosPresidente = lerCsv($arquivoCSVPresidente);

    // Verificar se a posição existe e alterar o dado específico
    $linhaParaAlterar = 1;
    $colunaParaAlterar = 5;

    //Altera o dado dos votos do candidato, adicionando +1
    if (isset($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar])) {
      $dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] = ($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] + 1);
    }

    escreverCsv($arquivoCSVPresidente, $dadosPresidente);

    $textoInformativo = "Voto registrado com sucesso.";
  } elseif ($numeroCandidatoVotado == $numeroCandidatoVotacaoPresidente2) {
    //Ler o arquivo CSV dos candidadtos a presidente
    $dadosPresidente = lerCsv($arquivoCSVPresidente);

    // Verificar se a posição existe e alterar o dado específico
    $linhaParaAlterar = 2;
    $colunaParaAlterar = 5;

    //Altera o dado dos votos do candidato, adicionando +1
    if (isset($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar])) {
      $dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] = ($dadosPresidente[$linhaParaAlterar][$colunaParaAlterar] + 1);
    }

    escreverCsv($arquivoCSVPresidente, $dadosPresidente);
    $textoInformativo = "Voto registrado com sucesso.";
  } else {
    $textoInformativo = "Voto ainda não registrado ou número do candidato digitado incorretamente.";
  }
}

?>

<?php include('header.php') ?>

<main role="main" class="container-fluid">
  <div class="row">
    <aside class="col-sm-3 blog-sidebar border">
      <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">Você está aqui:</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Eleições On-line</a></li>
            <li class="breadcrumb-item" aria-current="page">Processo de Votação</li>
            <li class="breadcrumb-item active" aria-current="page">Votação para Presidente</li>
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
        <h2 class="my-3">Votação para Presidente</h2>

        <form action="votacaoPresidente.php" method="post" enctype="multipart/form-data" class="border border-dark rounded-lg p-3">
          <div class="row mb-4">
            <div class="col-sm-4"></div>
            <p class="col-sm-4">
              <?php
              echo "$textoInformativo";
              ?>
            </p>
            <div class="col-sm-4"></div>
          </div>
          <div class="row mb-4">
            <div class="col-sm-1"></div>
            <?php
              foreach ($dados as $indice => $linha) {
                echo '<div class="col-sm-2"><img src="' .
                  $linha[4] .
                  '" class="img-fluid img card-img img-thumbnail "><br>Candidato: <br> <strong>'.
                  $linha[0] .
                  '</strong> <br>Número: ' .
                  $linha[1] .
                  ' <br> Partido: ' .
                  $linha[2] . 
                '</div>';
              }
            ?>              
            <div class="col-sm-1"></div>
          </div>
          
          <div class="row mb-4">
            <label for="numeroCandidatoVotacaoPresidente" class="col-sm-4 col-form-label">Digite o número do candidato:</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="inputNumeroCandidatoVotacaoPresidente" name="numeroCandidatoVotacaoPresidente" placeholder="Número do Candidato">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-sm-1"></div>
            <button type="submit" class="btn btn-primary col-sm-4">Votar</button>
            <div class="col-sm-2"></div>

            <button type="reset" class="btn btn-warning col-sm-4">Limpar Campos</button>
            <div class="col-sm-1"></div>
          </div>
        </form>
      </div>
    </div>
</main>

<?php include('footer.php') ?>