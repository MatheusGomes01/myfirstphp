<fieldset>
<?php
$title = "Usuario:";
$title1 = "Aula 3 e 4 - adicionando variaveis a tela:";
$name = "Matheus";
$sobrenome = "gomes";
$idade = 17;
$email = "tamo@gmail.com"
?>
        <h4> <?= $title1;?></h4>

    <h4> <?= $title;?></h4>

    <ul>
        <li>Nome: <?= $name." ".$sobrenome;?></li>
        <li>idade: <?= $idade;?></li>
        <li>E-mail: <?= $email;?></li>
    </ul>
    </fieldset>

    
