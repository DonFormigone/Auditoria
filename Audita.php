<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
$ =$_POST['']; estrutura para criar os outros metodos Posts 
 */


require_once 'Class/Auditoria.php';

$auditado =$_POST['auditado'];

$a1 = new Auditoria();
$a1->setAuditado($auditado);
$a1->resultadoFinal();
$a1->notaMais();
$a1->notaMais();
//$a1->getNota();



