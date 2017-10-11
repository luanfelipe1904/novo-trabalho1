<?php

//ARQUIVO COM FUNCOES PARA MANIPULAÇAO DOS DADOS  DE PROFESSORES



	function buscaProfessor($codigo){
		$professores = array();

		$dados = file("dados/professores.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", 	$linha);
			if ($colunas[0] == $codigo) {
				$professor['siape'] = $colunas[0];
				$professor['nome'] = $colunas[1];
				$professor['email'] = $colunas[2];
				$professor['foto'] = $colunas[3];
			}
		}

		return $professor;
	}

	function listaProfessores(){
		$professores = array();

		$dados = file("dados/professores.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			$professores[] = $colunas

		}
		return $professores;

	}





//teste
	$lista = listaProfessores ();
	print_r($lista);


