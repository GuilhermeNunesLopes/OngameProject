<?php

require_once 'DB.php';

//Extends pois ela esta herdando tudo da classe DB
abstract class Post extends DB{

		protected $table;

		abstract public function insertPost();
		abstract public function insertTopico();
		abstract public function updatePost($id);
		abstract public function updateTopico($idtp);


		public function encotrar($id){
			$sql= "SELECT * FROM $ this->table where id = :id";
			$stmt= DB::prepare($sql);
			//ligando os parametros E DEFININDO COMO INTEIRO
			$stmt->bindParam(':id',$id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}
		public function encontraAll(){
			// consultando toda a tabela
			$sql = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function delete($id){
			$sql = "DELETE FROM $this->table where id = : id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id',$id,PDO::PARAM_INT);
			return $stmt->execute();
		}



}