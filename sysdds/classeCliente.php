<?php
class Cliente extends Pessoa{
	
	function __construct($vetor){
        parent:: __construct($vetor);
	}
	

	function exibe(){

        $this->exibe_pessoa;
		echo " </fieldset>";
	}
	
	function exibe_tr(){
		$this->exibe_tr_Pessoa();
		echo "</tr>";
	}

}
?>


