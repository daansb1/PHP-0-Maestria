<?php

include_once "backend.php";



?>


<h1>Seja bem-vindo ao nosso site</h1>
<p><?= $nome ?> Veja as nossas ofertas</p>


<h2>Confira nossos principais produtos:</h2>
<?php foreach ($automovel as $auto): ?>

    <li><?= $auto; ?></li>

<?php endforeach; ?>   