<?php

include("../Models/conexao.php");
mysqli_query($conexao,"DELETE FROM aluno WHERE codigo = ".$_GET["ida"]);
header("location:../View");

?>