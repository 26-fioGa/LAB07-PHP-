<?php

class Transporte{
    //atributos
    public $destinatario;
    public $destino;
    public $tarifa = 150;
    public $toneladasMetricas;
    
    //constructor
    public function __construct($destinat, $dest, $tm){
        $this->destinatario = $destinat;
        $this->destino = $dest;
        $this->toneladasMetricas = $tm;
    }
    
    public function hallarFlete(){
        $this->flete = $this->tarifa * $this->toneladasMetricas;
        return $this->flete;
    }
    

}

?>