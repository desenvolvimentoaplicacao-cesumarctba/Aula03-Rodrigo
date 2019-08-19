<?php
{
  // 12km por 1 litro
  // distancia = tempo * velocidade
  // litros usados = distancia / 12

  $tempo = readline ('Digite o tempo de viagem:' . PHP_EOL); 
  $velocidade = readline ('Digite a velocidade média:' . PHP_EOL); 
  $distancia = $tempo*$velocidade
  $litros = $distancia/12;

  echo "A velocidade média foi: $velocidade" . PHP_EOL;
  echo "O tempo de viagem foi: $tempo" . PHP_EOL;
  echo "A distância percorrida foi: $distancia" . PHP_EOL;
  echo "A quantidade de litros utilizada foi: $litros" . PHP_EOL;
}
?>