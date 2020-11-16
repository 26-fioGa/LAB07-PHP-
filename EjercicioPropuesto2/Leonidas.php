<?php

require 'transportes.php';

Class Leonidas extends Transporte{

    public $seguro;
    public $importe;

    public function hallarTipoTarifa($destino){
        if (($destino == 'Arequipa' or $destino == 'Ilo' or $destino == 'Tacna')){
            $tarifa = 200;
            return $tarifa;
        }
        elseif (($destino == 'Piura' or $destino == 'Tumbes' or $destino == 'Cajamarca')){
            $tarifa = 220;
            return $tarifa;
        }
        else {
            $tarifa = 150;
            return $tarifa;
        }

    }

    public function hallarSeguroImporte(){
        $this->seguro = $this->hallarFlete() * 5/100;
        $this->importe = $this->seguro + $this->hallarFlete();
        return $this->importe;
    }

    public function imprimirDatos($destino){
        echo '<p style="margin:auto 80px;">++++++ Datos de Traslado (Leonidas) ++++++','</p>';
        echo '<p style="margin:auto 80px;"> Destinatario: ',$this->destinatario,'</p>';
        echo '<p style="margin:auto 80px;"> Destino: ',$this->destino,'</p>';
        echo '<p style="margin:auto 80px;"> Tarifa: ',$this->hallarTipoTarifa($destino),'</p>';
        echo '<p style="margin:auto 80px;"> Toneladas Métricas : ',$this->toneladasMetricas,'</p>';       
        echo '<p style="margin:auto 80px;"> La cantidad de flete es : ',$this->hallarFlete(),'</p>';
        echo '<p style="margin:auto 80px;"> El importe total es de : ',$this->hallarSeguroImporte(),'</p>';
    }
}

?>

