<?php 
include("../Models/conexao.php");
include("blades/header.php")?>


    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo =".$_GET["ida"]);
    while($exibe = mysqli_fetch_array($query)){
    ?>

    <div class="container bg-white mt-5 rounded-2 p-3 shadow-lg">
    <form action="../Controllers/atualizarAluno.php" method="post">
        <input type="hidden" name="alunoCodigo" class="m-2" value="<?php echo $exibe[0] ?>">
        <label>Nome</label>
        <input type="text" name="alunoNome" class="m-2" value="<?php echo $exibe[1] ?>"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade" class="m-2" value="<?php echo $exibe[2] ?>"><br>
        M<input type="radio" value="m" name="alunoSexo" class="m-2"<?php echo ($exibe[3]=="m")?"checked":""?>><br>
        F<input type="radio" value="f" name="alunoSexo" class="m-2" <?php echo ($exibe[3]=="f")?"checked":""?>><br>
        <input type="submit" value="Atualizar" class="btn btn-success m-2">
    </form>
    </div>
    <?php } ?>
<?

include("blades/footer.php");
?>
