<?php
include "trata.php";
Inseri $inserir =new Inseri();
if(($inserir.sql)==($inserir.r=1)){
echo "<script>Alert('Novo Topico Cadastrado')</script>";
header("Location:forum-test/novo_post");
}
?>