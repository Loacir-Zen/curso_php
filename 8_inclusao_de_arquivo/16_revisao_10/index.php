<?php

    include_once "backend.php";

?>

<h1>Bem vindo ao nosso Site</h1>
<p><?=$nome?> seja bem-vindo</p>
<h2>Veja nossos Produtos</h2>

<?php

    foreach($produtos as $produto):

?>

<ul>

        <li><?=$produto ?></li>

</ul>

<?php endforeach ?>