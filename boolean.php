<?php
$usuarioOnline = true;
echo "usuario esta ON? ".$usuarioOnline."</br>";
$usuario2Online = false;
echo "usuario esta ON? ".$usuario2Online."</br>";

echo var_dump($usuario2Online)."</br>";
echo var_dump($usuarioOnline)."</br>";
"</br>";
"</br>";

"<h3>codigo melhorado</h3>";

$online = true;

$usuario1 = $online;
$usuario2 = !$online;

echo "usuario 1 esta online: ".$usuario1."</br>";
echo "usuario 2 n esta online: ".$usuario2."</br>".var_dump($usuario2);

?>