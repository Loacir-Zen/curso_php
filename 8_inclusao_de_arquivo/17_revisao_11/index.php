<?php

    include_once "backend.php";

?>

<h1>Bem vindo ao nosso site</h1>

<p><?= $nome ?>Seja bem-vindo</p>

<h2>Veja nossos Produtos</h2>

<ul>
    <?php
        foreach($produtos as $produto):
    ?>
    <li><?=$produto ?></li>

    <?php
        endforeach;
    ?>
</ul>