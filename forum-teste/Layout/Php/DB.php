<?php
require_once 'config.php';

class DB{
		private static $instance ;

		public static function getInstance(){
			//como estou usando o tipo static eu tenho que usar o self :: para  chamar
			if(!isset(self::$instance)){
				try{
					/*

self::metodo() chama o metodo() da classe atual;
$this->metodo() chama o metodo() da classe usada para instanciar o objeto que está sendo executado (que pode ser uma subclasse da classe onde a chamada é feita). Você pode descobrir que classe é essa usando get_class($this)
					*/
					self::$instance = new PDO('msql:host='. DB_HOST . ';dbname'. DB_NAME,DB_USER,DB_PASS);
					self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCHE_OBJ);
				}catch(PDOException $e){
					echo $e->getMensage();
				}
			}
			return self::$instance;
		}
		// preparando o banco de dados
		public static function prepare($sql){
			return self::getInstance()->prepare($sql);
		}
}

?>