<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" href="indexstyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header" id="inicio">
        <img class="hamburguer" src="Avance_PI/img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
            <a href="login.php">Inicia Sesión</a>
            <a href="registrar.php">Registrarse</a>
            <a href="#informate">Informate</a>
            <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Cuida tú salud sexual y reproductiva</h1>
            <p class="copy">Investiga e informate sobre como cuidar tú salud sexual.</p>
        </div>

    </header>
    <main>
        <section class="contenedor-informacion" id="informate">
            <h2 class="subtitulo">Temas de interes</h2>
            <div class="contenedor-informate">
                <div class="checklist-informate">
                    <div class="informacion">
                        <img src="Avance_PI/img/uno.jpg" class="img-informacion" alt="">
                        <h3 class="n-informacion">Metodos anticonseptivos: Los métodos anticonceptivos son herramientas que se utilizan para prevenir el embarazo al evitar la fertilización del óvulo por el espermatozoide.</h3>

                    </div>
                    <div class="informacion">
                        <img src="Avance_PI/img/dos.png" class="img-informacion" alt="">
                        <h3 class="n-informacion">E.T.S: Las ETS (Enfermedades de Transmisión Sexual) son infecciones que se transmiten a través de relaciones sexuales sin protección con una pareja infectada. Estas infecciones pueden ser causadas por bacterias, virus, hongos y
                            parásitos, y pueden afectar tanto a hombres como a mujeres.</h3>
                    </div>
                    <div class="informacion">
                        <img src="Avance_PI/img/tres.jpg" class="img-informacion" alt="">
                        <h3 class="n-informacion">Anatomia F/M: Según el genero la anatomia del ser humano es diferente y vamos a conocer como se constituyen tanto la anatomia fememina como la masculina.</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Salud Sexual</h2>
                <div class="contenedor-galeria">
                    <h3 class="n-informacion"> La salud sexual es un aspecto importante de la salud general y el bienestar de una persona. La Organización Mundial de la Salud (OMS) define la salud sexual como "un estado de bienestar físico, emocional, mental y social en relación
                        con la sexualidad". Esto incluye aspectos como la educación sexual, la prevención de enfermedades de transmisión sexual, la planificación familiar, la salud reproductiva y el derecho a una vida sexual satisfactoria y segura. La
                        importancia de la salud sexual radica en que una buena salud sexual puede tener efectos positivos en la calidad de vida de una persona. La educación sexual adecuada puede ayudar a las personas a tomar decisiones informadas sobre
                        su sexualidad y reducir el riesgo de infecciones de transmisión sexual y embarazos no deseados. Además, una vida sexual satisfactoria puede mejorar la salud mental y emocional, reducir el estrés y mejorar la autoestima y la confianza
                        en uno mismo. Sin embargo, la falta de atención a la salud sexual puede tener graves consecuencias, incluyendo la propagación de enfermedades de transmisión sexual, embarazos no deseados, problemas de salud reproductiva y disfunción
                        sexual. Además, las barreras culturales y sociales pueden impedir que las personas accedan a la atención de salud sexual que necesitan. Es importante que todas las personas tengan acceso a información y recursos adecuados para
                        mantener una buena salud sexual. Esto incluye la educación sexual adecuada, el acceso a métodos anticonceptivos y de prevención de enfermedades de transmisión sexual, la atención médica regular y el derecho a una vida sexual segura
                        y satisfactoria. La atención a la salud sexual no solo es importante para el bienestar individual, sino que también puede tener un impacto positivo en la salud y el bienestar de la comunidad en general.</h3>
                    <h2 class="subtitulo">Sana reproducción</h2>
                    <h3 class="n-informacion">La reproducción sana se refiere a la capacidad de una persona para concebir y tener hijos sin complicaciones o riesgos para su propia salud o la del feto. La planificación y el cuidado adecuados de la salud reproductiva son esenciales
                        para lograr una reproducción sana. Para lograr una reproducción sana, es importante que las personas presten atención a su salud en general, incluyendo una dieta saludable y ejercicio regular. También es importante evitar el consumo
                        de tabaco, alcohol y drogas, ya que pueden tener un impacto negativo en la salud reproductiva. Además, es esencial el uso de métodos anticonceptivos seguros y efectivos para prevenir embarazos no deseados y la propagación de enfermedades
                        de transmisión sexual. La elección de un método anticonceptivo adecuado dependerá de la salud individual, la edad, el estilo de vida y las preferencias personales. Es recomendable que las personas realicen visitas regulares a su
                        profesional de la salud para monitorear su salud reproductiva y recibir asesoramiento sobre la planificación familiar. Las pruebas de detección de enfermedades de transmisión sexual y los exámenes pélvicos regulares son especialmente
                        importantes para las mujeres. Durante el embarazo, es importante recibir atención prenatal adecuada para asegurarse de que el feto se esté desarrollando adecuadamente y que la madre esté sana. Esto puede incluir pruebas de detección
                        y diagnóstico temprano de cualquier complicación. En resumen, la reproducción sana es esencial para el bienestar general y la calidad de vida de una persona y su descendencia. Al prestar atención a la salud reproductiva, planificación
                        familiar y prevención de enfermedades de transmisión sexual, las personas pueden garantizar una reproducción sana y segura.</h3>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Proyecto Investigacion</h2>
                <p>Jhan Carlos Mesa Escobar / Carlos Andres Montoya Pacheco / Santiago Zapata Suarez</p>
            </div>
            <div class="contacto">
                <a href="./" class="contacto-icon">
                    <i class='bx bxl-gmail'></i>
                </a>

            </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="Avance_PI/js/menu.js"></script>
    <script src="Avance_PI/js/lightbox.js"></script>
</body>

</html>