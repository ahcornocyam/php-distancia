<?php

<<<<<<< HEAD
/*
 * @Name: index.php
 * @Date: 8/03/2015
 * @Description: função simples para saber se uma pessoa é maior ou menor
 * de idade
 */

=======
>>>>>>> c61555fcebe658f65f401e30d2e18d83b7b91833
header('Content-type:text/html;charset=utf-8');

$maiorIdade = function ($idade){
  echo ($idade > 18)? "Você é maior de idade ": "Você é menor de idade";  
};

/* @var $maiorIdade int*/
$maiorIdade(18);