<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema educacion sexual y reproductiva</title>
    <link rel="stylesheet" href="temas.css">
</head>

<body>
    <header>
        <nav>
            <a href="registrar.php">Registarse</a>
            <a href="index.php">Informacion</a>
            <a href="#">Contactos</a>
        </nav>
        <section class="textos-header">
            <h1>Consulta informacion sobre tu salud sexual</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre equipo">
            <h2 class="titulo">Sobre nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="Avance_PI/img/imagen_ssr.jpg" alt="" class="imagen-informacion">
            </div>
            <div class="contenido-textos">
                <h3><span>1</span>Objetivo</h3>
                <p> se busca que las próximas generaciones de personas jóvenes tenga una forma de educarse de forma fácil y sencilla
                    sobre como tener una vida sexual saludable y estable, que no perjudique su diario vivir.</p>
                <h3><span>2</span>Porque?</h3>
                <p>Colombia es hoy en día junto a México, Venezuela y Brasil un país con un alto nivel de embarazos adolescentes, esto se debe a la baja calidad de la educación sexual hoy en día,
                    pues en la cultura de esta parte del mundo todavía se ve como tema tabú, haciendo que sea más difícil el educar a los niños </p>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">metodologia</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="Avance_PI/img/Lluvia de ideas.png" alt="">
                    </div>

                </div>
            </div>
        </section>
        <section class="about-servicies">
            <div class="contenedor">
                <h2 class="titulo">Servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="Avance_PI/img/servicio1.png" alt="" class="ser1">
                        <h3>informacion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quas.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="Avance_PI/img/servicio2.jpg" alt="" class="ser2">
                        <h3>consulta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quas.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="Avance_PI/img/servicio3.jpg" alt="" class="ser3">
                        <h3>medicamentos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quas.</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Nombres</h4>
                <p>santiago zapata</p>
                <p>carlos andres</p>
                <p>jhan carlos</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>23456654</p>
                <p>23456654</p>
                <p>23456654</p>
            </div>
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>23456654</p>
                <p>98765546</p>
                <p>98765546</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Corporacion universitaria adventista</h2>
    </footer>
</body>

</html>