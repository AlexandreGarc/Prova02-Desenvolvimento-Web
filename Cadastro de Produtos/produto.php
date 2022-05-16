<?php
include 'config.php';

$edita = new sistemaestoque();

$id = (!isset($_GET['id'])) ? '' : $_GET['id'];

$nome = (!isset($_POST['nome'])) ? '' : $_POST['nome'];

$categoria = (!isset($_POST['categoria'])) ? '' : $_POST['categoria'];

$cor = (!isset($_POST['cor'])) ? '' : $_POST['cor'];

$peso = (!isset($_POST['peso'])) ? '' : $_POST['peso'];

$tamanho = (!isset($_POST['tamanho'])) ? '' : $_POST['tamanho'];

$preco = (!isset($_POST['preco'])) ? '' : $_POST['preco'];

$descricao = (!isset($_POST['descricao'])) ? '' : $_POST['descricao'];

# Confirmação para editar
if ($id !== '' && $nome !== '' && $categoria !== '') {
	$edita->atualizaProduto($id, $nome, $categoria, $cor, $peso, $tamanho, $preco, $descricao);
	header('Location: produto.php?id=' . $id . '&status=ok');
}

include 'header.php';
?>

<main class="container">
	<h1>Produto</h1>
	<div class="area">
		
		<form action="produto.php?id=<?php echo $id; ?>" method="post">

			<?php $edita->verProduto($id); ?>

			<div class="botoes">
				<a href="index.php" class="btn">Voltar</a>
				<a href="deletar-produto.php?id=<?php echo $id; ?>" class="btn btn-danger">Excluir</a>
				<button type="submit" class="btn btn-primary">Editar</button>
			</div>
		</form>
	</div>
</main>

<?php
include 'footer.php';