<?php 
    foreach($alertas as $keys => $alerta) {
        foreach($alerta as $mensaje) {
 ?>
    <div class="alerta alerta__<?php echo $keys; ?>">
            <?php echo $mensaje ;?>
    </div>
            <?php
        }
    }

?>