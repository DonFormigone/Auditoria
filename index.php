<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
$ =$_POST['']; estrutura para criar os outros metodos Posts 
 */


require_once 'Class/Auditoria.php';
require_once 'Class/BancoAud.php';
$auditado =$_POST['auditado'];
$nota =$_POST['nota'];
$nota1 =$_POST['nota1'];
//Instanciando a classe do Banco de dados
$c1 = new BancoAud();
//$c1->inserir($auditado);

//Instanciando a classe Auditoria
$a1 = new Auditoria();
$a1->setAuditado($auditado);
$c1->inserir($auditado, 100 - $nota + $nota1);
//$a1->resultadoFinal($nota,$nota1);


echo "<p>O Auditado é: {$a1->getAuditado()}</br>";
$a1->resultadoFinal($nota,$nota1);


//print_r($a1);
        
        ?>
        </pre>
    </body>
</html>
