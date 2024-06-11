<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';

?>    

<div id="app">
<nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>

    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    id="nombre"
                    type="text"
                    placeholder="Tu Nombre"
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input
                    id="fecha"
                    type="date"
                    min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>"
                />
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input
                    id="hora"
                    type="time"
                />
            </div>

            <input type="hidden" id="id" value="<?php echo $id; ?>">

        </form>
</div>

<div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
 </div>

 <div class="paginacion" class"actual">
        <button 
            id="anterior"
            class="boton"
        >&laquo; Anterior</button>

        <button 
            id="siguiente"
            class="boton"
        >Siguiente &raquo;</button>
    </div>
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

<?php
     
     $script = "
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script src='build/js/app.js'></script>
     ";
?>