<?php

    include_once "backend.php";

?>
<h1>Olá, Seja bem vindo ao nosso site</h1>

<p><?php echo $nome ?> Seja bem-vindo </p>

<h2>Veja nosso principais produtos</h2>

<ul>

    
    <?php foreach ($produtos as $produto): ?>
        <li><?php echo $produto ?></li>     
    <?php endforeach ?>

</ul>