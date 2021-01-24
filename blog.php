<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="description" content="En este blog te contamos sobre digitalizacion,cambiate al modo touch">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog modotouch</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>
<header>
        <nav class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo"><img src="img/logo-modotouch.png" alt="modotouch" width="50"></a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">dehaze</i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.html"><i class="material-icons left">home</i>Ir al Inicio</a></li>
                <li><a data-target="modal1" class="modal-trigger"><i class="material-icons left">perm_contact_calendar</i>Contactar</a></li>
                <li><a href="mailto:ericmarquez@modotouch.com"><i class="material-icons left">mail</i>Enviar correo</a></li>
            </ul>
            <ul class="sidenav" id="menu-responsive">
                <li><a class="sidenav-close blue-grey darken-1 white-text" href="#!"><i class="material-icons white-text">close</i>Cerrar menu</a></li>
                <li><a href="index.html"><i class="material-icons left">home</i>Ir al Inicio</a></li>
                <li><a data-target="modal1" class="modal-trigger"><i class="material-icons">perm_contact_calendar</i>Contactar</a></li>
                <li><a href="mailto:ericmarquez@modotouch.com"><i class="material-icons">mail</i>Enviar correo</a></li>
                <li><a href="sms:+7711208704"><i class="material-icons">sms</i>Enviar sms</a></li>
                <li><a href="https://t.me/eamarquezh" target="_blank"><i class="material-icons">send</i>Enviar telegram</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=527711208704" target="_blank"><i class="material-icons">phone</i>Enviar whatsapp</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <div class="section">
            <h2 class="caption center">¡Bienvenid@ al blog de modotouch!</h2>
        </div>
    <main>
<?php
$dir = 'https://modotouch.com/blog/'; //path o ruta de nuestro directorio 
chdir($dir);
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);

echo '<ul class="collection container">';
    foreach($files as $filename)
    {
        echo '<li class="collection-item">';
            echo '<a href="https://modotouch.com/blog/'.$filename.'"><span class="badge">'.date ("F d Y H:i:s.",filemtime($filename)).'</span>'.substr($filename,0,(strlen($filename)-5)).'</a>';
        echo '</li>';
    }
echo '</ul>';

?>
<!--js materialize-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    //..Script
    var options ={
        indicators:false,
        height:100,
        interval:3000
    };
    document.addEventListener('DOMContentLoaded',function(){
        M.AutoInit();
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, open);
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems, options);
    });
</script>

</body>
</html>