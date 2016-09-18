<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoAud
 *
 * @author Formigao
 */
class BancoAud extends Auditoria{
public function Conectar(){
 
}

function inserir($auditado,$a1){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdAuditoria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "INSERT INTO aud (nome, nota)
VALUES ('$auditado', '$a1')";

if ($conn->query($sql) === TRUE) {
    echo "Seus dados foram salvos com Sucesso!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
   
}
