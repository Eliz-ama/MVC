<?php
include("blades/header.php")
?>

    <div class="container bg-white mt-5 rounded-2 p-3 shadow-lg">
        <form action="../Controllers/cadastrarAluno.php" method="post">
        <label>Nome</label>
        <input type="text" name="alunoNome" class="m-2"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade" class="m-2"><br>
        <input type="radio" value="m" name="alunoSexo" class="m-2">M<br>
        <input type="radio" value="f" name="alunoSexo" class="m-2">F<br>
        <input type="submit" value="Cadastrar" class="btn btn-success m-2" >
    </form>
    </div>
    

    <?php include("blades/footer.php")?>
