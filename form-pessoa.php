<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<div class="container">
	<div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="https://i.imgur.com/90e5Ph8.png" alt="Dojo 7COMm">
	</div>
</div>

<div class="container">
	<div class="row justify-content-between mb-3 py-3">
		<div class="col-12 col-md-6 text-center text-md-left">
			<h1>Novo Cadastro</h1>
		</div>
	</div>

	<hr class="mb-4">

	<form class="needs-validation" action="form-pessoa.php" novalidate>
		<div class="row">
			<div class="col-md-6">
				<h2>Dados pessoais</h2>
				<div class="form-group">
					<label for="firstName">Nome completo</label>
					<input type="text" class="form-control" id="nome" placeholder="" value="" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="email@exemplo.com" required>
				</div>
				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input required id="telefone" type="tel" placeholder="(99) 99999-9999" required="required" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<h2>Interesses</h2>

				<div class="row">
					<div class="col-6">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_0" name="interesses[]">
							<label class="custom-control-label" for="interesses_0">PHP</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_1" name="interesses[]">
							<label class="custom-control-label" for="interesses_1">Laravel</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_2" name="interesses[]">
							<label class="custom-control-label" for="interesses_2">Wordpress</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_3" name="interesses[]">
							<label class="custom-control-label" for="interesses_3">C#</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_4" name="interesses[]">
							<label class="custom-control-label" for="interesses_4">MySQL</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_7" name="interesses[]">
							<label class="custom-control-label" for="interesses_7">.NET</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_5" name="interesses[]">
							<label class="custom-control-label" for="interesses_5">Java</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_6" name="interesses[]">
							<label class="custom-control-label" for="interesses_6">React</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_8" name="interesses[]">
							<label class="custom-control-label" for="interesses_8">Angular</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_9" name="interesses[]">
							<label class="custom-control-label" for="interesses_9">Vue JS</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_10" name="interesses[]">
							<label class="custom-control-label" for="interesses_10">three.js</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="interesses_11" name="interesses[]">
							<label class="custom-control-label" for="interesses_11">Blockchain</label>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 text-right">
				<a href="index.php" class="btn btn-default">Cancelar</a>
				<button type="submit" class="btn btn-success btn-lg">Inserir</button>
			</div>
		</div>
	</form>

</div>

<?php include("includes/footer.php"); ?>