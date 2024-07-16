<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operador Ternário</title>
</head>
<body>
	<?php
		$usuario_possui_cartao_loja = true;
		$valor_compra = 100;
		$valor_frete = 50;
		$recebeu_desconto_frente = true;
		//Utilização do operador ternário encadeado. Observação: essa prática não é mais recomendada, pois dificulta a compreensãdo do código
		$valor_frete_auxiliar = $usuario_possui_cartao_loja && $valor_compra >= 400 ?  0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
		$recebeu_desconto_frente = $valor_frete != $valor_frete_auxiliar ? true : false;
		$valor_frete = $valor_frete_auxiliar;
	?>
	<h1>Detalhes do pedido</h1>
	<p>Poussui cartão da loja? <?= $usuario_possui_cartao_loja ? 'Sim' : 'Não'; ?></p>
	<p>Valor da compra: <?= /*Imprimmindo direto no código HTML*/'R$ '. $valor_compra; ?></p>
	<p>Recebeu desconto no frete?
		<?php
			//Usando variável para imprimir vaor do operaor ternário
			$teste = $recebeu_desconto_frente ? 'Sim' : 'Não';
			echo $teste;
		?>
	</p>
	<p>Valor do frete: <?= 'R$ '.$valor_frete ?></p>
</body>
</html>