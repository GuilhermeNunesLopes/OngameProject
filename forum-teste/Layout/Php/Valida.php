<?php
    function __autoload($class_name){
        require_once 'Php/'.$class_name.'.php';
    }
Class Valida{

	private $titulo="";
	private $user="";
	private $avatar="";
	private $mensagem ="";


	public  function Validar(){
		if (($this->titulo= $titulo)==""){
				echo "<script>Alert(Digite um titulo);</script>";
		}
		else if (($this->user= $user)==""){

				echo "Digite um usuario";
		}else if (($this->avatar=$avatar)==""){
				echo "Digite um avatar";
		}else if (($this->mensagem=$mensagem)==""){
				echo "Digite uma mensagem";
		}else{
			echo "Validação feita";
		}
	}
}