<?php
include 'config.php';

# Inicialização da classe de gestão de times
$visualiza = new sistemaestoque();

include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Produtos</title>
</head>
<body>

  <main class="container">
	<h1>Todos os Produtos</h1>
	<p><a href="cadastrar-produto.php" class="btn btn-success">Cadastrar novo produto</a></p>
	<div class="area">
		<table class="table table-striped">
			<tr>
				<td><strong>ID</strong></td>
				<td><strong>Nome</strong></td>
				<td><strong>Categoria</strong></td>
				<td><strong>Preço</strong></td>
				<td><strong>Ações</strong></td>
			</tr>

			<?php $visualiza->verProdutos(); ?>

		</table>
	</div>
	
</main>
</body>
</html>

	

<?php
include 'footer.php';