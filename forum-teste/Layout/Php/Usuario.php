<?php
require_once 'PostEn.php';

class Usuario extends Post{
	protected $table = 'post';
	protected $table2='NovoTopico';
	private $usuario;
	private $avatar;
	private $mensagem;
	private $titulo;
	private $data = "SELECT GETDATE();";
/*
set - estou setando os valores 
get - estou retornando eles
*/
	public function setUser($usuario){
		$this->usuario = $usuario;
	}
	public function getUser(){
		return $this->usuario;
	}
	public function setAvatar($avatar){
		$this->avatar = $avatar;
	}
	public function getAvatar(){
		return $this->avatar;
	}
	public function setMens($mensagem){
		$this->mensagem = $mensagem;
	}
	public function getMens(){
		return $this->mensagem;
	}
	public function setTitle($titulo){
		$this->titulo = $titulo;
	}
	public function getTitle(){
		return $this->titulo;
	}
	public function insertPost(){
		$sql ="INSERT INTO $this-table(Usuario,Avatar,mensagem,DataP)values( :userario,:avatar,:mensagem,:data)";
		$stmt= DB::prepare($sql);
		$stmt->bindParam(':usuario',$this->usuario);
		$stmt->bindParam(':avatar',$this->avatar);
		$stmt->bindParam(':mensagem',$this->mensagem);
		$stmt->bindParam(':data',$data);
		return $stmt->execute();
	}
		public function insertTopico(){
			
		$sql ="INSERT INTO $this-table2(Titulo,Usuario,Avatar,mensagem,DataNT)values( :titulo,:userio,:avatar,:mensagem,:data)";
		$stmt= DB::prepare($sql);
		$stmt->bindParam(':titulo',$this->titulo);
		$stmt->bindParam(':usuario',$this->usuario);
		$stmt->bindParam(':avatar',$this->avatar);
		$stmt->bindParam(':mensagem',$this->mensagem);
		$stmt->bindParam(':data',$data);
		return $stmt->execute();
	}
	public function updatePost($id){
		$sql = "UPDATE $this->table set usuario = : usuario ,avatar = :avatar, mensagem = :mensagem ,data = :data where id = :id";
		$stmt =DB::prepare($sql);
		$stmt->bindParam(':usuario',$this->usuario);
		$stmt->bindParam(':avatar',$this->avatar);
		$stmt->bindParam(':mensagem',$this->mensagem);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':data',$data);
		return $stmt->execute();
	}
		public function updateTopico($idtp){
		$sql = "UPDATE $this->table2 set titulo = :titulo, usuario = : usuario ,avatar = :avatar, mensagem = :mensagem where id = :id";
		$stmt =DB::prepare($sql);
		$stmt->bindParam(':titulo',$this->titulo);
		$stmt->bindParam(':usuario',$this->usuario);
		$stmt->bindParam(':avatar',$this->avatar);
		$stmt->bindParam(':mensagem',$this->mensagem);
		$stmt->bindParam(':id',$idtp);
		return $stmt->execute();
	}
	
}