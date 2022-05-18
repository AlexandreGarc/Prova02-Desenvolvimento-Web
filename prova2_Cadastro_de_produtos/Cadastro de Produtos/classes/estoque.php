<?php

class sistemaestoque {
	# Insere um produto (aplicando o Create do CRUD)
	function cadastraProduto($nome, $categoria, $cor, $peso, $tamanho, $preco, $descricao) {
		$conecta = mysqli_connect(serv, usuario, senha, banco);
		$campos = "nome, categoria, cor, peso, tamanho, preco, descricao";
		$valores = "'$nome', '$categoria', '$cor', '$peso', '$tamanho', '$preco', '$descricao'";
		$sql = "INSERT INTO produtos ($campos) VALUES ($valores)";
		$query = mysqli_query($conecta, $sql);
		return $query;
	}

	# Ver todos os produtos (aplicando o Read do CRUD)
	function verProdutos() {
		$conecta = mysqli_connect(serv, usuario, senha, banco);
		$sql = "SELECT * FROM produtos";
		$query = mysqli_query($conecta, $sql);
		while($valor = mysqli_fetch_array($query)) {
			echo "<tr>
				<td>" . $valor['id'] . "</td>
				<td>" . $valor['nome'] . "</td>
				<td>" . $valor['categoria'] . "</td>
				<td>" . $valor['preco'] . "</td>
				<td><a href='produto.php?id=" . $valor['id'] . "'>Ver / Editar</a></td>
			</tr>";
		}
	}

	# Ver um produto (aplicando o Read do CRUD)
	function verProduto($id) {
		$conecta = mysqli_connect(serv, usuario, senha, banco);
		$sql = "SELECT * FROM produtos WHERE id = " . $id . " LIMIT 1";
		$query = mysqli_query($conecta, $sql);
		if ($valor = mysqli_fetch_array($query)) {
			echo "<div class='form-group'>
				<label for='nome'>Nome do produto</label>
				<input type='text' value='" . $valor['nome'] . "' name='nome' id='nome' class='form-control' placeholder='Nome do produto' required>
			</div>
			<div class='form-group'>
				<label for='categoria'>Categoria do produto</label>
				<input type='text' value='" . $valor['categoria'] . "' name='categoria' id='categoria' class='form-control' placeholder='Categoria do produto'>
			</div>
			<div class='form-group'>
				<label for='cor'>Cor do produto</label>
				<input type='text' value='" . $valor['cor'] . "' name='cor' id='cor' class='form-control' placeholder='Cor do produto'>
			</div>
			<div class='form-group'>
				<label for='peso'>Peso do produto</label>
				<input type='text' value='" . $valor['peso'] . "' name='peso' id='peso' class='form-control' placeholder='Peso do produto'>
			</div>
			<div class='form-group'>
				<label for='tamanho'>Tamanho do produto</label>
				<input type='text' value='" . $valor['tamanho'] . "' name='tamanho' id='tamanho' class='form-control' placeholder='Tamanho do produto'>
			</div>
			<div class='form-group'>
				<label for='preco'>Preço do produto</label>
				<input type='text' value='" . $valor['preco'] . "' name='preco' value='R$ 00,00' id='preco' class='form-control' placeholder='Preço do produto'>
			</div>
			<div class='form-group'>
				<label for='descricao'>Descrição do produto</label>
				<textarea name='descricao' id='descricao' rows='5' class='form-control'>" . $valor['descricao'] . "</textarea>
			</div>";
		};
	}

	# Atualiza um produto (aplicando o Update do CRUD)
	function atualizaProduto($id, $nome, $categoria, $cor, $peso, $tamanho, $preco, $descricao) {
		$conecta = mysqli_connect(serv, usuario, senha, banco);
		$sql = "UPDATE produtos SET nome = '$nome', categoria = '$categoria', cor = '$cor', peso = '$peso', tamanho = '$tamanho', preco = '$preco', descricao = '$descricao' WHERE id = '$id'";
		$query = mysqli_query($conecta, $sql);
		return $query;
	}

	# Exclui um produto (aplicando o Delete do CRUD)
	function deletaProduto($id) {
		$conecta = mysqli_connect(serv, usuario, senha, banco);
		$sql = "DELETE FROM produtos WHERE id = '$id'";
		$query = mysqli_query($conecta, $sql);
		return $query;
	}
}