<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auditoria
 *
 * @author Formigao
 */
class Auditoria {
    //put your code here
    public $auditor;
    public $auditado;
    public  $acertos;
    public $erros;
    public $nota;

    //Metodo Construtor
    function __construct() {
                     
    }
    public function getAuditor() {
        return $this->auditor;
    }

    public function getAuditado() {
        return $this->auditado;
    }

    public function getAcertos() {
        return $this->acertos;
    }

    public function getErros() {
        return $this->erros;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setAuditor($auditor) {
        $this->auditor = $auditor;
    }

    public function setAuditado($auditado) {
        $this->auditado = $auditado;
    }

    public function setAcertos($acertos) {
        $this->acertos = $acertos;
    }

    public function setErros($erros) {
        $this->erros = $erros;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }
    public function resultadoFinal($nota,$nota1){
       $this->setNota(100 + ($nota + $nota1 ));
       echo "Sua nota final é: {$this->getNota()}";
    }
    public function notaMais(){
        
         }
    public function notaMenos(){
        
    }

}
