<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If Else - Praticando um pouco mais</title>
</head>
<body>
	<?php
		$usuario_possui_cartao_loja = true;
		$valor_compra = 225;
		$valor_frete = 50;
		$recebeu_desconto_frente = false;
		//Quando a variável já tem um valor booleano setado não há necessidade de colocar o seu valor na compração da condição.
		if($usuario_possui_cartao_loja && $valor_compra >= 100){
			$valor_frete = 0;
			$recebeu_desconto_frente = true;
		}
	?>
	<h1>Detalhes do pedido</h1>
	<p>Poussui cartão da loja?
		<?php
			if($usuario_possui_cartao_loja){
				echo 'Sim';
			}else{
				echo 'Não';
			}
		?>
	</p>
	<p>Valor da compra: <?= 'R$ '. $valor_compra; ?></p>
	<p>Recebeu desconto no frete?
		<?php
			if($recebeu_desconto_frente){
				echo 'Sim';
			}else{
				echo 'Não';
			}
		?>
	</p>
	<p>Valor do frete: <?= 'R$ '.$valor_frete ?></p>
</body>
</html>