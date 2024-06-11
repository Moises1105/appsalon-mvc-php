<h1 class="nombre-pagina">Inicia sesión</h1>
<p class="descripcion-pagina">La Belleza se trata de mejorar lo que ya tienes, ¡Permítenos Resaltarlas! </p>

<?php  
    include_once __DIR__ . "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Correo Electrónico</label>
        <input
            type="email"
            id="email"
            placeholder="Tu Correo Electrónico"
            name="email"
            value="<?php echo s($auth->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Contraseña"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>

<footer class="footer">
        <div class="footer__grid contenedor">
            <div class="footer__widget">
                <h3 class="footer__heading">Nosotros</h3>
                <p class="footer__texto">Nuestra motivación es subir tu autoestima, Recibir nuestras atenciones que te sientas consentida.</p>
            </div>

            <div class="footer__widget">
                <h3 class="footer__heading">Horario</h3>
                <p class="footer__texto">Lun-Vie: 8AM - 7PM</p>
                <p class="footer__texto">Sábado: 8AM - 5PM</p>
                <p class="footer__texto">Domingo: Cerrado</p>
            </div>

            <div class="footer__widget">
                <h3 class="footer__heading">Contacto</h3>
                <p class="footer__texto">Gracias por Tu Visita.</p>

                <nav class="sociales">
                    <a class="sociales__enlace" href="https://facebook.com/lizznailsbeauty">
                        <span class="sociales__accesible">Facebook</span>
                    </a>
                    <a class="sociales__enlace" href="https://wa.me/+50497422061">
                        <span class="sociales__accesible">whatsApp</span>
                    </a>
                    <a class="sociales__enlace" href="https://instagram.com/lizznails_hn">
                        <span class="sociales__accesible">Instagram</span>
                    </a>
                    <a class="sociales__enlace" href="https://tiktok.com/@lizznailsbeauty">
                        <span class="sociales__accesible">TikTok</span>
                    </a>
    
                </nav>
            </div>
        </div>
    </footer>