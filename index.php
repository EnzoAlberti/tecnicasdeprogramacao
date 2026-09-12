<?php
    require "Usuario.php";

    $aluno= new Usuario();
    $aluno ->nome = "João";
    $aluno ->idade = 20;
    $aluno -> email = "maria@ig.com.br";

    $aluno2= new Usuario();
    $aluno2 ->nome = "Joaquim";
    $aluno2 -> idade = 30;
    $aluno2 -> email = "joaquim@irc.com.br";

    var_dump($aluno);
    echo "<br>";
    var_dump($aluno2);*/

    $aluno= new Usuario();
    $aluno -> setNome ("João");
    $aluno -> setIdade (20);
    $aluno -> setEmail ("maria@ig.com.br");

    $aluno2= new Usuario();
    $aluno2 -> setNome ("Joaquim");
    $aluno2 -> setIdade (30);
    $aluno2 -> setEmail ("joaquim@irc.com.br");

    echo "<p>Nome: {$aluno ->getNome()}</p>";
    echo "<p>Idade: {$aluno ->getIdade()}</p>";
    echo "<p>Email: {$aluno ->getEmail()}</p>";
    echo "<br>";
    echo "<p>Nome: {$aluno2 ->getNome()}</p>";
    echo "<p>Idade: {$aluno2 ->getIdade()}</p>";
    echo "<p>Email: {$aluno2 ->getEmail()}</p>";

?>