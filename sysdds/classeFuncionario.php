<?php
class Funcionario extends Pessoa{
	
    public $area;
    public $salario;
    public $turno;
	
	function __construct($vetor){
        parent:: __construct($vetor);
		$this->area = $vetor["area"];
        $this->salario = $vetor["salario"];
        $this->salario = $vetor["turno"];
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
                    <div>
						<label>Turno:</label> ".$this->turno."
					</div>
			  </fieldset>";
	}
	
	function exibe_tr(){
		$this->exibe_tr_Pessoa();
		echo "
				<td>".$this->area."</td>
                <td>".$this->salario."</td>
                <td>".$this->turno."</td>
			  </tr>";
	}

}
?>


