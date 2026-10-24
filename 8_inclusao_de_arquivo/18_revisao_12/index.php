<?php

    include_once "backend.php";

?>

<h1> Seja bem vindo ao nosso site </h1>
<p> <?=$nome?> Seja bem-vindo </p>

<h2>Veja nosso produtos </h2>


<ul>
<?php

    foreach ($produtos as $produto):

?>

        <li><?=$produto ?></li>

<?php

    endforeach

?>

</ul>
