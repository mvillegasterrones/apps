<?php
session_start();
if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == 'YES') {
    $icono_user = '<i class="fas fa-user color-institucional-1"></i> ' . $_SESSION['reg_datos'];

    $user_nav_bar = ($_SESSION['reg_rol'] == 'admin') ? '<li class="nav-item" data-mdb-ripple-init><a class="nav-link text-warning" href="./users.php" onclick="">Usuarios</a></li>' : '';

    $btn_login  = '<li class="nav-item" data-mdb-ripple-init><button type="button" onclick="sp_logout()" class="btn btn-warning me-3" data-mdb-ripple-init">SALIR</button></li>';

    //$btn_show_modal_surso_01 = ($_SESSION['reg_curso_1'] == 'Si')?'<a href="javascript:;" class="btn btn-secondary btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#project-1">Acceder</a>':'<a href="javascript:;" class="btn btn-warning btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#modal-restricted">Acceder</a>';
    //$btn_show_modal_surso_01 = ($_SESSION['reg_curso_1'] == 'Si')?'<a href="javascript:;" class="btn btn-secondary btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#project-1">Acceder</a>':'<a href="javascript:;" class="btn btn-warning btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#modal-curso-01-restricted">Suscribirme</a>';
    $btn_show_modal_surso_01 = ($_SESSION['reg_curso_1'] == 'Si')?'<a href="javascript:;" class="btn btn-institucional-1 btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#project-1">Acceder <i class="fas fa-angle-right text-infor"></i></a>': '<a href="shop.php" class="btn btn-secondary btn-rounded">Suscribirme</a>';

    
} else {
    $icono_user = '';

    $btn_login  = '<li class="nav-item" data-mdb-ripple-init><button type="button" class="btn btn-primary me-3" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#modal-register">LOGIN</button></li>';
}

# https://mdbootstrap.com/docs/standard/components/
# https://mdbootstrap.com/docs/standard/
$web_url_design = 'https://jym-asociados-soltech.netlify.app/';
$link_esinad    = 'javascript:;';
$link_simon     = 'javascript:;';

# Datos de la persona
$nombre_empresa    = 'LYCEUM GROUP';
$nombre_persona    = "Mg. Álvaro Villanes Rojas";
$nombre_corto      = "Álvaro Villanes Rojas";
$nombre_cm_persona = "Juana Beltrán Alvarado";
$persona_cargo     = 'Instructor profesional';
$anios_experiencia = '5';
$descripcion_persona ='Licenciado en Sociología, Magíster en Gerencia Social';
$correo_persona    = 'mvillegasterrones@gmail.com';
$celular_persona   = '+51 932-449-843';
$persona_fijo      = '+51 288-0990';
$persona_direccion = 'Villa el Salvador, LIMA, PE';


# Redes sociales
$social_youtube   = '';
$social_facebook  = 'https://bit.ly/facebook_Lyceum_Group';
$social_tweeter   = '';
$social_google    = '';
$social_instagram = 'https://www.instagram.com/lyceum.group?utm_source=qr&igsh=MzNlNGNkZWQ4Mg==';
$social_linkedin  = 'https://www.linkedin.com/in/alvaro-villanes/';
$social_github    = '';

# users sociales
$social_user_youtube   = '@mvillegasterrones';
$social_user_facebook  = '@mvillegasterrones';
$social_user_tweeter   = '@mvillegasterrones';
$social_user_google    = '@mvillegasterrones';
$social_user_instagram = '@mvillegasterrones';
$social_user_linkedin  = '@mvillegasterrones';
$social_user_github    = '@mvillegasterrones';

# Cursos 01
$titulo_curso_01 = '¿Cómo diseñar un marco de monitoreo y evaluación de proyectos sociales?';
$precio_curso_01 = 'S/. 79.00';
$precio_curso_01_dol = '$20.00';
$contenido_curso_01 = '<p class="card-text text-muted">Este curso online y asincrónico proporciona una introducción exhaustiva al monitoreo y evaluación de proyectos sociales mediante el enfoque de gestión basada en resultados (GBR). Los participantes explorarán conceptos fundamentales como la lógica de la cadena de resultados y la elaboración de indicadores sociales. Utilizando estas habilidades, podrán crear su propio marco de M&E empleando plantillas en hojas de cálculo. Además, tendrán acceso a cuatro valiosos recursos complementarios:<br/><br/>
<i class="fas fa-check"></i> Clases sobre la construcción de un marco de M&E en Power BI.<br>
<i class="fas fa-check"></i> Clases sobre la presentación y uso de la herramienta de clasificación de nuevos proyectos. </br>
<i class="fas fa-check"></i> Tutorial y herramienta para estimar muestras poblacionales infinitas y finitas.
Guía para redactar términos de referencia (TDR) y una herramienta para evaluar su calidad llamada "TDR Checklist". 
</p>';

$btn_quiero_curso_1 = (!isset($_SESSION['reg_curso_1']))?'<a href="./shop.php" class="btn btn-warning btn-lg btn-rounded mb-2" role="button"
    data-mdb-ripple-init><i class="fas fa-cart-shop"></i> Quiero el curso por '.$precio_curso_01.' o '.$precio_curso_01_dol.'</a>':'';