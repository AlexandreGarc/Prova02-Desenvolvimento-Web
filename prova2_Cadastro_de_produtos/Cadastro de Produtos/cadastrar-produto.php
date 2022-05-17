<?php
include 'config.php';

$cadastra = new sistemaestoque();

$nome = (!isset($_POST['nome'])) ? '' : $_POST['nome'];

$categoria = (!isset($_POST['categoria'])) ? '' : $_POST['categoria'];

$cor = (!isset($_POST['cor'])) ? '' : $_POST['cor'];

$peso = (!isset($_POST['peso'])) ? '' : $_POST['peso'];

$tamanho = (!isset($_POST['tamanho'])) ? '' : $_POST['tamanho'];

$preco = (!isset($_POST['preco'])) ? '' : $_POST['preco'];

$descricao = (!isset($_POST['descricao'])) ? '' : $_POST['descricao'];

# Confirmação para cadastrar
if ($nome !== '' && $categoria !== '') {
	$cadastra->cadastraProduto($nome, $categoria, $cor, $peso, $tamanho, $preco, $descricao);
	header('Location: index.php?status=ok');
}

include 'header.php';
?>

<main class="container">
	<h1>Cadastrar Produto</h1>
	<div class="area">
		<form action="cadastrar-produto.php" method="post">
			<div class='form-group'>
				<label for='nome'>Nome do produto</label>
				<input type='text' name='nome' id='nome' class='form-control' placeholder='Nome do produto' required>
			</div>
			<div class='form-group'>
				<label for='categoria'>Categoria do produto</label>
				<input type='text' name='categoria' id='categoria' class='form-control' placeholder='Categoria do produto' required>
			</div>
			<div class='form-group'>
				<label for='cor'>Cor do produto</label>
				<input type='text' name='cor' id='cor' class='form-control' placeholder='Cor do produto'>
			</div>
			<div class='form-group'>
				<label for='peso'>Peso do produto</label>
				<input type='text' name='peso' id='peso' class='form-control' placeholder='Peso do produto'>
			</div>
			<div class='form-group'>
				<label for='tamanho'>Tamanho do produto</label>
				<input type='text' name='tamanho' id='tamanho' class='form-control' placeholder='Tamanho do produto'>
			</div>
			<div class='form-group'>
				<label for='preco'>Preço do produto</label>
				<input type='text' name='preco' value='R$ 00,00' id='preco' class='form-control' placeholder='Preço do produto'>
			</div>
			<div class='form-group'>
				<label for='descricao'>Descrição do produto</label>
				<textarea name='descricao' id='descricao' rows='5' class='form-control'></textarea>
			</div>
			<div class="form-group botoes">
				<a href="index.php" class="btn">Cancelar</a>
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</form>
	</div>
</main>

<?php
include 'footer.php';
