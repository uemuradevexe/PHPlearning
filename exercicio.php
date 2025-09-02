<?php
 $texto = "carro, moto, caminhao";

 $posicaoCarro = strpos($texto, "carro");
 $posicaoMoto = strpos($texto, "moto");
 $posicaoCaminhao = strpos($texto, "caminhao");

$caracteresCarro = strlen("carro");
 $palavraCarro = substr($texto, $posicaoCarro, $caracteresCarro);

 echo $palavraCarro;
?>