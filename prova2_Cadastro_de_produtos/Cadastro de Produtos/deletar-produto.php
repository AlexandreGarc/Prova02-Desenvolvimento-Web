<?php
include 'config.php';

$deleta = new sistemaestoque();

$id = (!isset($_GET['id'])) ? '' : $_GET['id'];

$confirma = (!isset($_GET['confirma'])) ? '' : $_GET['confirma'];

# Confirmação para excluir
if ($confirma == 'sim') {
	$deleta->deletaProduto($id);
	header('Location: index.php');
}

include 'header.php';
?>

<main class="container">
	<h1>Deletar Produto</h1>
	<div class="area">
		<p class="confirma-deleta">
			Tem certeza que deseja excluir o produto ID <?php echo $id; ?>?
		</p>
		<div>
			<a href="deletar-produto.php?id=<?php echo $id; ?>&confirma=sim" class="btn btn-danger">Sim, quero deletar</a>
			<a href="produto.php?id=<?php echo $id; ?>" class="btn btn-primary">Não, quero voltar</a>
		</div>
	</div>
</main>

<?php
include 'footer.php';