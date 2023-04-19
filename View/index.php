<?php 
include("../Models/conexao.php");
include("blades/header.php")?>

<body>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
            Abrir
        </button>
    <div class="container bg-white mt-5 rounded-2 p-3 shadow-lg">
    <a class="btn btn-success" href="cadastro.php">Cadastrar</a>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <hr>
   
    <form action="index.php" method="post">
        <input class="form-control"type="text" name="buscar" size="30" placeholder="Buscar">
    </form>
    <hr>

    <?php
    if(empty($_POST["buscar"])){
        echo "Nenhum resultado";
    } else { 
    $varBusca = $_POST["buscar"];
    ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Frase</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>  
        </thead>
        <tbody>
          

    <?php   

  
    $query = mysqli_query($conexao, "SELECT * FROM aluno WHERE nome LIKE '%$varBusca%'");
 
    while($exibe = mysqli_fetch_array($query)){
        $varSexo = ($exibe[3]=="m")?"o":"a";
        echo "<tr>" .
             "<td>". strtoupper($varSexo) .  " alun$varSexo <b>". $exibe[1] ."</b> mora na cidade de ". $exibe[2].".</td>" .
             "<td><a data-bs-toggle='modal' data-bs-target='#JanelaModal".$exibe[0]."' class='btn btn-primary'><span class='material-symbols-outlined'>edit</span></a></td>" .
             "<td><a class='btn btn-danger' href='../controllers/deletarAluno.php?ida=".$exibe[0]."'><span class='material-symbols-outlined'><span class='material-symbols-outlined'>delete</span></a></td>" .
             "</tr>";

        include("./blades/modal.php");
    }
         
    ?>
    
    </tbody>
    </table>

    
 </div>
    <?php } ?>
    <?php
    
    include("blades/footer.php")?>