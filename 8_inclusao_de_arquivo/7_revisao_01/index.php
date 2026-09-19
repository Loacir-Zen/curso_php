<?php

    include_once "teste.php";

?>

<p><?= $nome; ?> seja bem vindo</p>
<h2>Confira nossos principais produtos </h2>
<ul>

    <?php foreach ($produtos as $produto): ?>
        <li> <?=$produto?> </li>
    <?php endforeach; ?>
</ul>