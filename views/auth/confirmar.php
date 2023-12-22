<main class="auth">
<h2 class="auth__heading"><?php echo $titulo; ?></h2>
 <P class="auth__texto">Tu Cuenta de DevWebCam</P>
<?php
  require_once __DIR__ . '/../templates/alertas.php';
  ?>
   <?php if(isset($alertas['exito'])) { ?>
   <div class="acciones acciones--centrar">
   
     <a href="/login" class="acciones__enlace">Iniciar Sesión</a>

 </div>
 <?php } ?>
</main>