<?php

    include_once "backend.php";

?>
<h1> Seja bem vindo ao nosso Site</h1>
<p><?=$nome?> Seja bem-vindo</p>
<h2>Veja alguns dos nossos produtos</h2>

<ul>

    <?php foreach($produtos as $produto): ?>

        <li><?= $produto ?></li>

    <?php endforeach; ?>

</ul>