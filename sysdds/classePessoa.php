<?php
class Pessoa{
	public $nome;
	public $email;
	public $cpf;
	public $sexo;
	public $data_nascimento;
	public $endereco;
	public $cidade;
	public $estado;
	public $pais;
	
	
	function __construct($vetor){
		$this->nome = $vetor["nome"];
		$this->email = $vetor["email"];
		$this->cpf = $vetor["cpf"];
		$this->sexo = $vetor["sexo"];
		$this->data_nascimento = $vetor["data_nascimento"];
		$this->endereco = $vetor["endereco"];
		$this->cidade = $vetor["cidade"];
		$this->estado = $vetor["estado"];
		$this->pais = $vetor["pais"];
	}
	

	function exibe_pessoa(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Email:</label> ".$this->email."
					</div>
					<div>
						<label>CPF:</label> ".$this->cpf."
					</div>
					<div>	
						<label>Sexo:</label> ".$this->sexo."
					</div>
					<div>	
						<label>Data Nasc:</label> ".$this->data_nascimento."
					</div>	
					<div>	
						<label>Endereco:</label> ".$this->endereco."
					</div>	
					<div>	
						<label>Cidade:</label> ".$this->cidade."
					</div>	
					<div>	
						<label>Estado:</label> ".$this->estado."
					</div>	
					<div>	
						<label>Pais:</label> ".$this->pais."
					</div>";
	}
	
	function exibe_tr_Pessoa(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->email."</td>
				<td>".$this->cpf."</td>
				<td>".$this->sexo."</td>
				<td>".$this->data_nascimento."</td>
				<td>".$this->endereco."</td>
				<td>".$this->cidade."</td>
				<td>".$this->estado."</td>
				<td>".$this->pais."</td>";
	}

}
?>
