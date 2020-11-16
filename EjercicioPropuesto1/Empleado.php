<?php

class Empleado{
    //atributos
    private $nombre;
    private $categoria;
    private $basico;
    private $bonificacion;
    private $tipoAportacion;
    
    //constructor
    public function __construct($nom, $cat, $bas, $bon, $tipoAport){
        $this->nombre = $nom;
        $this->categoria = $cat;
        $this->basico = $bas;
        $this->bonificacion = $bon;
        $this->tipoAportacion = $tipoAport;
    }

    //hallamos la remuneración
    public function hallarRemuneracion(){
        $this->remuneracion = $this->basico + $this->bonificacion;
        echo '<p style="margin:5px 80px 0 80px;">La remuneración es de: ', $this->remuneracion,'</p>';
    }

    //hallamos el descuento
    public function hallarDescuento(){
        if($this->tipoAportacion == 'AFP'){
            $this->desc = (11/100) * $this->remuneracion;
            echo '<p style="margin:5px 80px 0 80px;">El descuento es de: ', $this->desc,'</p>';
        }
        elseif ($this->tipoAportacion == 'ONP') {
            $this->desc = (13/100) * $this->remuneracion;
            echo '<p style="margin:5px 80px 0 80px;">El descuento es de: ', $this->desc,'</p>';
        }
        else{
            echo 'El tipo de aportación ingresado es inválido.';
        }
    }

    //calculamos el neto
    public function hallarNeto(){
        $this->neto = $this->remuneracion - $this->desc;
        echo '<p style="margin:5px 80px 0 80px;">El sueldo neto es de: ', $this->neto,'</p>';
    }


}

?>