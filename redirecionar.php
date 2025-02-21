<?php

function string_aleatoria($tamanho) {
	$conteudo = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";

	for($i=0;$i<$tamanho;$i++) {
		$string .= $conteudo{rand(0,35)};
	}

	return $string;
}

header("Location: cad_seguro+dados+clientes+cadastro.php?".string_aleatoria(50));


?>