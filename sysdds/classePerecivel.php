<?php
class Perevicel extends NaoPerecivel{
	
    public $data_validade;
	
	function __construct($vetor){
        parent:: __construct($vetor);
		$this->data_validade = $vetor["data_validade"];
	}
	

	function exibe(){
        $this->exibe_tr_nao_perecivel;
		echo "
				<div>
					<label>Data de validade:</label> ".$this->data_validade."
				</div>
			</fieldset>";
	}
	
	function exibe_tr(){
		$this->exibe_tr_nao_perecivel();
		echo "
				<td>".$this->data_validade."</td>
			  </tr>";
	}

}
?>
