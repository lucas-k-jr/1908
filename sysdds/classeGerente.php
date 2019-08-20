<?php
class Gerente extends Pessoa{
	
    public $area;
    public $salario;
	
	function __construct($vetor){
        parent:: __construct($vetor);
		$this->area = $vetor["area"];
		$this->salario = $vetor["salario"];
	}
	

	function exibe(){
		$this->exibe_pessoa;
		echo "<fieldset>
					<div>
						<label>Área:</label> ".$this->area."
					</div>
					<div>
						<label>Salário:</label> ".$this->salario."
					</div>
			  </fieldset>";
	}
	
	function exibe_tr(){
		$this->exibe_tr_Pessoa();
		echo "
				<td>".$this->area."</td>
				<td>".$this->salario."</td>
			  </tr>";
	}

}
?>


