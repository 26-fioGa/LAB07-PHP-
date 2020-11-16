<?php

require 'transportes.php';

Class Ivovic extends Transporte{

    public function imprimirDatos(){
        echo '<p style="margin:0 80px;">++++++ Datos de Traslado (IVOVIC) ++++++</p>';
        echo '<p style="margin:0 80px;">Destinatario: ',$this->destinatario,'</p>';
        echo '<p style="margin:0 80px;"> Destino: ',$this->destino,'</p>';
        echo '<p style="margin:0 80px;"> Tarifa: ',$this->tarifa,'</p>';
        echo '<p style="margin:0 80px;"> Toneladas Métricas : ',$this->toneladasMetricas,'</p>';
        echo '<p style="margin:0 80px;"> La cantidad de flete es : ',$this->hallarFlete(),'</p>';
    }

}

?>