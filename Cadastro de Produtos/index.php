<?php
include 'config.php';

# Inicialização da classe de gestão de times
$visualiza = new sistemaestoque();

include 'header.php';
?>

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

<?php
include 'footer.php';