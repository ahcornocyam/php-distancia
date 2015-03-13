<?php
/*
 * @Name: index.php
 * @Date: 8/03/2015
 * @Description: função simples para saber se uma pessoa é maior ou menor
 * de idade
 */

header('Content-type:text/html;charset=utf-8');
/* @var $nome type string */
$nome  = \ucfirst(\strtolower(filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_STRING)));
/* @var $idade type int */
$idade = filter_input(INPUT_POST, 'inputIdade', FILTER_VALIDATE_INT);

/**
 * @param type $nome parametro para o nome
 * @param type $idade parametro para a idade
 * @return type String retorna se a pessoa é maior ou menor de idade
 */
$maiorIdade = function ($nome,$idade){
    
    return  ($idade >= 18)? "{$nome}, você é maior de idade ": "{$nome}, você é menor de idade\n<br/>"; 
  
};

#chamando a função maiorIdade
/* @var $maiorIdade type function */
echo $maiorIdade($nome , $idade);
echo "<a href=\"maiorIdade.php\">Voltar</a>\n<br/>";