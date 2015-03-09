<?php

header('Content-type:text/html;charset=utf-8');

$maiorIdade = function ($idade){
  echo ($idade > 18)? "Você é maior de idade ": "Você é menor de idade";  
};

/* @var $maiorIdade int*/
$maiorIdade(18);