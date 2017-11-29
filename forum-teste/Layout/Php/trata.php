<?php
// incluido o arquivo de configuração do banco
include "config.php";
//Conectando com o banco de dados 
$conn= mysqli_connect($host,$user,$password,$database) or die ('Erro ao conectar com o banco');

 $Titulo= $_POST['titulo'];
 $Usuario= $_POST['user'];
 $Avatar=$_POST['avatar'];
 $Mensagem=$_POST['mes'];
 //$pai = $_POST['pai'];//cada post tem um pai , menos o inicial
// $data = date("d/m/Y  H:i:s");
 //$dataAtual="INSERT INTO Post (Usuario,Avatar,mensagem,data_ult_post) VALUES ('$Usuario','$Avatar','$Mensagem', 'NOW()')";
//$str = "Insert into NovoTopico ('Titulo',Usuario,Avatar,Mensagem values ('$Titulo','$Usuario','$Avatar','$Mensagem')";
if(($Titulo && $Usuario && $Avatar && $Mensagem)!="") {
$sql = "Insert into NovoTopico (Titulo,Usuario,Avatar,mensagem)Values";
$sql.="('$Titulo','$Usuario','$Avatar','$Mensagem')";
if (!mysqli_query($conn,$sql)) {
    echo ("Error: ".mysqli_error($conn));
} 

  echo '<script type="text/javascript">
    alert("Topico criado com sucesso!");
    location.href="./../novo-post.html";    
    </script>';

}else if(($Titulo && $Usuario && $Avatar && $Mensagem)==""){
echo '<script>alert("Erro , você deve cadastrar todos os dados para criar um topico");
 	location.href="./../novo-post.html;</script>';
}else{
	echo 'alert("Tudo deve estar preenchido corretamente")';
}
// Fim if


mysqli_close($conn);



?>