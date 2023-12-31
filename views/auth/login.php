<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <P class="auth__texto">Iniciar sesión en DevWebcam</P>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <form method="POST" action="/login" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">E-mail</label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password">
        </div>
        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>