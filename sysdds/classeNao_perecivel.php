<?php
class NaoPerecivel{
	public $nome;
	public $descricao;
	public $unidade;
	public $preco;
	
	
	function __construct($vetor){
		$this->nome = $vetor["nome"];
		$this->descricao = $vetor["descricao"];
		$this->unidade = $vetor["unidade"];
		$this->preco = $vetor["preco"];
	}
	

	function exibe_nao_perecivel(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Descricao:</label> ".$this->descricao."
					</div>
					<div>
						<label>Unidade:</label> ".$this->unidade."
					</div>
					<div>	
						<label>Preco:</label> ".$this->preco."
					</div>";
	}
	
	function exibe_tr_nao_perecivel(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->descricao."</td>
				<td>".$this->unidade."</td>
				<td>".$this->preco."</td>
	}

}
?>
