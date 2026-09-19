<?php

    include_once "backend.php";

?>

<p><?=$nome ?> seja bem-vindo</p>
<h2>Veja nossos principais produtos </h2>
<ul>

    <?php foreach($produtos as $produto): ?>
        <li><?=$produto ?></li>
    <?php endforeach ; ?>

</ul>