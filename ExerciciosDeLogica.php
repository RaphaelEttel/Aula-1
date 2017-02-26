<?php
    //Exercícios de Fixação
    //------------------------------------------------------------//
    //1. Crie um programa que exiba o seu nome 100 vezes.
    $nome = "Raphael";

    for ($i=0; $i < 100; $i++) {
      echo $nome . PHP_EOL;
    }

    //------------------------------------------------------------//
    //2. Crie um programa que exiba os números de 1 a 100.

    for ($i=1; $i <= 100; $i++) {
      echo $i . PHP_EOL;
    }

    //------------------------------------------------------------//
    //3. Faça um programa que percorra todos os números de 1 até 100.
    //Para os números ímpares, deve ser exibido um * e para os números pares **

    for ($i=1; $i <= 100; $i++) {

      if ($i % 2 != 0) {
        echo "*" . PHP_EOL;
      }
      else {
        echo "**" . PHP_EOL;
      }

    }

    //------------------------------------------------------------//
    //4. Faça um programa que percorra todos os números de 1 até 100.
    //Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, exiba o próprio número.

    for ($i=1; $i <= 100; $i++) {

      if ($i % 4 == 0) {
        echo "PIN" . PHP_EOL;
      }
      else {
        echo $i . PHP_EOL;
      }

    }

    //------------------------------------------------------------//
    //5. Crie um programa que exiba no Console um triângulo de *

    for ($i=1; $i <= 5; $i++) {

      for ($j=1; $j <= $i; $j++) {
        echo "*";
      }

      echo PHP_EOL;
    }

    //------------------------------------------------------------//
    //6. Crie um programa que exiba no Console vários triângulos de *

    for ($i=0; $i < 3; $i++) {

      for ($j=1; $j <= 5; $j++) {

        for ($k=1; $k <= $j; $k++) {
          echo "*";
        }

        echo PHP_EOL;
      }

    }

    //------------------------------------------------------------//
    //7. Os números de Fibonacci são uma sequência de números definida recursivamente.
    //O primeiro elemento da sequência é 0 e o segundo é 1. Os outros elementos são calculados somando os dois antecessores.
    $aux = 0;
    $a = 0;
    $b = 1;

    $ult = 14;
    for ($i=1; $i <= $ult; $i++) {
      echo $a;

      if ($i != $ult) {
        echo ", ";
      }

      $aux = $a;
      $a = $b;
      $b += $aux;
    }
 ?>
