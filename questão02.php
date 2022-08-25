<?php

//Aluno(a): Julia Cacciatori
//Turma: Informática 3

$Frota = array(array('nregistro' => "0",
 "modelo" => "Uno",
 "fabricante" => "Fiat",
 "cor" => "Prata",
 "portas" => "4",
 "ano"=>"2018"),
    
   array("nregistro" => "1",
 "modelo" => "Fiesta",
 "fabricante" => "Ford",
 "cor" => "Preto",
 "portas" => "2",
 "ano"=>"2016"),
    
 array("nregistro" => "2",
 "modelo" => "Doblo",
 "fabricante" => "Fiat",
 "cor" => "Verde",
 "portas" => "4",
 "ano"=>"2013"),

 array("nregistro" => "3",
 "modelo" => "Celta",
 "fabricante" => "GM",
 "cor" => "Preto",
 "portas" => "2",
 "ano"=>"2012"),

 array("nregistro" => "4",
 "modelo" => "March",
 "fabricante" => "Nissan",
 "cor" => "Prata",
 "portas" => "2",
 "ano"=>"2016"),

 array("nregistro" => "5",
 "modelo" => "Cobalt",
 "fabricante" => "GM",
 "cor" => "Branco",
 "portas" => "2",
 "ano"=>"2012"),

 array("nregistro" => "6",
 "modelo" => "Ranger",
 "fabricante" => "Ford",
 "cor" => "Prata",
 "portas" => "4",
 "ano"=>"2018"),

 array("nregistro" => "7",
 "modelo" => "Trail Blazer",
 "fabricante" => "GM",
 "cor" => "Branco",
 "portas" => "4",
 "ano"=>"2020"),

 array("nregistro" => "8",
 "modelo" => "Ecosport",
 "fabricante" => "Ford",
 "cor" => "Preto",
 "portas" => "4",
 "ano"=>"2018"),

 array("nregistro" => "9",
 "modelo" => "Tucson",
 "fabricante" => "Hyundai",
 "cor" => "Vinho",
 "portas" => "4",
 "ano"=>"2020") 
);

//questão a)
foreach($Frota as $carro) {
    echo 'Modelo: ' . $carro['modelo'] . '<br>' . 'Ano: ' . $carro['ano'] . '<br><br>';
}

//questão b)
foreach ($Frota as $carro) {
  if ($carro['cor'] == 'Prata') {
    echo 'Modelo: ' . $carro['modelo'] . '<br>' . 'Cor: ' . $carro['cor'] . '<br><br>';
  }
}

//questão c)
foreach($Frota as $carro) {
    echo 'Modelo: ' . $carro['modelo'] . '<br>' . 'Cor: ' . $carro['cor'] . '<br>' . 'Quantidade de Portas: ' . $carro['portas'] . '<br><br>';
}

//questão d)
foreach ($Frota as $carro) {
    if ($carro['fabricante'] == 'Ford') {
      echo 'Modelo: ' . $carro['modelo'] . '<br>' . 'Fabricante: ' . $carro['fabricante'] . '<br><br>';
    }
}

//questão e)
foreach ($Frota as $carro) {
    if ($carro['ano'] >= '2015') {
      echo 'Modelo: ' . $carro['modelo'] . '<br>' . 'Ano: ' . $carro['ano'] . '<br><br>';
    }
}

?>

<html>
<body>
  <form method="post">
    <input type='text' name="texto" placeholder='Escreva a sua palavra!'>
    <input type="submit" value="Submit" />
    </form>
  <?php 

//QUESTÃO 2

  $letra = $_POST['texto'];
  $letra = str_replace('a','?',$letra);
  $letra = str_replace('e','?',$letra);
  $letra = str_replace('i','?',$letra);
  $letra = str_replace('o','?',$letra);
  $letra = str_replace('u','?',$letra);
  echo $letra;



?>
  </body>
</html>