<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php require_once("BuscarDados.php");?>

<main>
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://i.imgur.com/90e5Ph8.png" alt="Dojo 7COMm">
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
            </tr>
          </thead>
          <tbody>
            <?php
              $res = BuscarDadosPessoas();
              
              foreach($res as $value) {
                echo '<tr>';
                echo '<th scope="row">'.$value['nome'].'</th>';
                echo      '<td>'.$value['telefone'].'</td>';
                echo      '<td>'.$value['email'].'</td>';
                echo      '<td>'.$value['interesses']
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