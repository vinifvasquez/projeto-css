<?php
    require("connect.php");
    
    $nome_jogo=$_POST['nome_jogo'];

    $sql="SELECT `codigo_jogo` FROM `jogos` WHERE nome_jogo='$nome_jogo'";

    $resultado=mysqli_query($conexao,$sql);

    $quantidade=mysqli_num_rows($resultado);

    echo "Existem ".$quantidade." jogos(s) cadastrado(s) com o nome de ".$nome_jogo;
?>
<p><a href="form_cadastrar_jogo.html">Voltar</a>