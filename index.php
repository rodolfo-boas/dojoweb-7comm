<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php require_once("BuscarDados.php");?>

<main>
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://digitalhousebr.tucampus.org/pluginfile.php/1/theme_moove/logo/1523386492/logo.png" alt="Dojo 7COMm">
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="text-center text-md-left">
          <h3 class="mb-4">Cadastro de Interesses</h3>
        </div>
        <table class="table table-responsive-md">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">E-mail</th>
              <th scope="col">E-mail</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $res = BuscarDadosPessoas();
              $res1 = BuscarIndiceInteresses();
              $res2 = BuscarTabelaInteresses();

              foreach($res2 as $value){
                $arrayId = $value['id'];
                var_dump($arrayId);
              }

              foreach($res2 as $value){
                $arrayTitulo = $value['titulo'];
                var_dump($arrayTitulo);
              }

              foreach($res as $value) {
                echo '<tr>';
                echo '<th scope="row">'.$value['nome'].'</th>';
                echo      '<td>'.$value['telefone'].'</td>';
                echo      '<td>'.$value['email'].'</td>';
              }
              ?>
              <?php

              foreach($res1 as $value) {
                echo      '<td>'.$value['interesse_id'].'</td>';
                echo '</tr>';
              }
              ?>
          </tbody>
        </table>
      </div>

      <div class="col-md-4">
        <h3 class="mb-4">Ranking de Interesses</h3>
        <table class="table table-responsive-md">
          <thead>
            <tr>
              <th scope="col">Posição</th>
              <th scope="col">Título</th>
              <th scope="col">Qtd.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1º</th>
              <td><strong>PHP</strong></td>
              <td>15</td>
            </tr>
            <tr>
              <th scope="row">2º</th>
              <td><strong>Laravel</strong></td>
              <td>14</td>
            </tr>
            <tr>
              <th scope="row">3º</th>
              <td><strong>.NET</strong></td>
              <td>12</td>
            </tr>
            <tr>
              <th scope="row">4º</th>
              <td><strong>Java</strong></td>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">5º</th>
              <td><strong>C#</strong></td>
              <td>7</td>
            </tr>
          </tbody>
        </table>
        <div class="text-center text-md-right botao-cadastro">
          <a href="form-pessoa.php" class="btn btn-success btn-lg">Novo cadastro</a>
        </div>
      </div>
    </div> 
  </div>
</main>

<?php include("includes/footer.php"); ?>