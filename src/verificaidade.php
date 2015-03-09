<?php
/*
 * @Name: index.php
 * @Date: 8/03/2015
 * @Description: função simples para saber se uma pessoa é maior ou menor
 * de idade
 */

header('Content-type:text/html;charset=utf-8');
/* @var $nome type string */
$nome  = filter_input(INPUT_POST, 'inputNome',  FILTER_SANITIZE_STRING);
/* @var $idade type int */
$idade = filter_input(INPUT_POST, 'inputIdade', FILTER_VALIDATE_INT);

$maiorIdade = function ($nome,$idade){
  echo ($idade > 18)? "{$nome}, você é maior de idade ": "{$nome}, você é menor de idade";  
};

#chamando a função maiorIdade
/* @var $maiorIdade type function */
$maiorIdade($nome , $idade);