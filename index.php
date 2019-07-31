<!DOCTYPE html>
<!--Con lang indicamos el idioma-->
<html lang="es">

<head>
    <!-- Links externos-->
    <!-- Al pertenecer a la misma carpeta basta con poner el nombre del archivo-->
    <link rel="stylesheet" href="estilos/style.css">
    <!--Agregamos un estilo de fuente a la pagina-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Los siguientes 2 links son para instalar owl carousel, carousel de imagenes-->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <!--charset para indicar la codificacion del lenguaje-->
    <meta charset="utf-8">
    <title> Edith Bautista</title>
</head>

<body>
    <!-- Contenido de la pagina
    <h1>Este es el titulo</h1>
    <h2>Subtitulo con h2</h2>-->

    <header>
        <!--Un div es un contenedor de informacion-->
        <div class="menu">
            <div class="contenedor">
                <p class="logo">Edith Bautista</p>
                <nav>
                    <!--Nav crea un menu de navegacion-->
                    <ul class="lista-menu">
                        <!--Lista no oedenada, para una ordenada usar ol-->
                        <li><a href="">Sobre mi</a></li>
                        <li><a href="">Mis trabajos</a></li>
                        <li><a href=""> Servicios </a></li>
                        <li><a href="">¿Por qué trabajar conmigo</a></li>
                        <li> <a href="">Blog</a></li>
                        <li> <a href="">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="contenedor" id="contenedor-titulo">
            <div class="contenedor-titulo">
                <h1>Edith Bautista Garcia</h1>
                <h2>Desarrollador Web y Movil</h2>
                <a>ir a mi portafolio</a>
            </div>
        </div>

    </header>

    <!--Main indica que este es el contenido principal-->
    <main>
        <!--Section se usa como semantica para indicar la seccion sobre mi-->
        <section id="sobre_mi">
            <div class="contenedor">
                <h3>Sobre mi</h3>
                <div class="contenedor-sobre-mi">
                    <div class="escritorio">
                        <!--Agregamos imagen como contenido-->
                        <img src="imagenes/EscritorioFree.jpg"></img>
                    </div>
                    <div class="text-yo">
                        <p>
                            Soy Edith Bautista Garcia licenciada en computación por la UAM-I, desarooladora web y movil para dispositivos android, usando Java y kotlin en el Ide AndroidStudio, consumo de servicios con retrofit e imagenes con picasso; En web he trabajodo con Java,
                            php, JS, HTML, CSS y el framework Codeigniter.
                        </p>
                        <p>
                            Durante mi estancia en el servicio social desarrolle una plataforma de repositorio de documentos con DSpace, y un login con JSP.
                        </p>
                        <p>
                            Participe como becaria en Gonet una consultora de la CDMX, en donde estuve desarrollando apps de Android con retrofit, Java, Kotlin y usando el IDE AndroidStudio
                        </p>
                        <a href="">VER MIS TRABAJOS</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="servicios">
                <h3>Servicios</h3>
                <div class="contenedor-servicios">
                    <div class="servicio celeste">
                        <h4>Desarrollo Web</h4>
                        <p>Usando JavaScript, HTML, CSS,Bootstrap y AJAX</p>
                        <img class="Icon-serv" src="imagenes/monitor.jpg">
                        <img class="Icon-fontb" src="imagenes/servicioBack.jpg">
                    </div>
                    <div class="servicio violeta">
                        <h4>Desarrollo movil</h4>
                        <p>Usando Kotlin y java, consumo de servicios con retrofit y volley, para las vistas he usado constrain-layout linearLayout, relativeLayout y frameLayout, manejo de fragmentos y activities y paso de argumentos entre ellos con el IDE
                            AndroidStudio
                        </p>
                        <img class="Icon-serv" src="imagenes/movil.jpg">
                        <img class="Icon-fontb" src="imagenes/servicioBack.jpg">
                    </div>
                    <div class="servicio celeste">
                        <h4>Diseñador</h4>
                        <p>Usando JavaScript, HTML, CSS,Bootstrap y AJAX</p>
                        <img class="Icon-serv" src="imagenes/diseno.jpg">
                        <img class="Icon-fontb" src="imagenes/servicioBack.jpg">
                    </div>
                </div>
            </div>
        </section>


        <section id="mis-trabajos">
            <h3>Mis trabajos</h3>
            <div class="contenedor">
                <!--Elementos del carrusel -->
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a><img src="imagenes/mockupWeb.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupWebResp.jpg"></a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupMobile.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupdesign.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupCamisa.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/programmer.jpg"> </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="por-que-trabajar">
            <h3>¿Por que trabajar conmigo?</h3>
            <div class="contenedor-trabajar">
                <div class="item">
                    <ul>
                        <li><img src="imagenes/velocidad.png"></li>
                        <li>Velocidad</li>
                        <li>Aseguro que su web y app cargara en menos de 4 segundos(Segun la cantidad contenido que tiene) si una app o web tarda mas de 5 segundos se tienen una mala experiencia de uuario, y es posible que el usuario no vuelva.
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul>
                        <li><img src="imagenes/mantenimiento.png"></li>
                        <li>Mantenimiento</li>
                        <li>Mantengo comunicacion constante con mi cliente para hasesorias al momento en que el decee realizar modificaciones a su sistema o si decea que se agregue alguna nueva funcionalidad.</li>
                    </ul>
                </div>
                <div class="item">
                    <ul>
                        <li><img src="imagenes/responsive.png"></li>
                        <li>Responsive</li>
                        <li>Aseguro que su web se adapte a cualquier dispositivo y su app teng una excelente experiencia de usuario en los diferentes tamños de pantallas. </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="blog">
            <div class="contenedor">
                <h3>Blog</h3>
                <div class="contenedor-publicaciones">
                    <div class="publicacion">
                        <img src="imagenes/mockupBlog.jpg">
                        <div class="contenido blogcont">
                            <div>
                                <h4>¿Que es un mockup?</h4>
                                <p>En esta publicacion se explica lo que es y para que se utiliza un mockup en un proyecto de desarrollo de software.
                                </p>
                            </div>
                            <div class="botont"><a href="">Leer mas →</a></div>
                        </div>
                    </div>
                    <div class="publicacion">
                        <img src="imagenes/maquetacionWebBlog.png">
                        <div class="contenido">
                            <h4>¿Que es la maquetacion web?</h4>
                            <p>esta publicacion explica la maquetacion web, como se realiza, para que y para quien. esta publicacion explica la maquetacion web, como se realiza, para que y para quien.
                            </p>
                            <div class="botont"><a href="">Leer mas →</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="que-esperas">
            <div class="contenedor">
                <h3>¿Que esperas para tener tu propia app y/o web? </h3>
                <a href="">CHARLEMOS</a>
            </div>
        </section>


        <section id="contacto">
            <!--codigo parra inviar un email -->
            <?php 
                if(@$_GET['i']=='ok'){
                    //condicionamos que el formulario se envio correctamente
            ?>
            <h3>La consulta se envio correctamente nos conectaremos a la brevedad. </h3>
               
            <?php
               } else{           
            ?>

            <div class="contenedor">
                <h3>Contacto</h3>
                <form action="envio-formulario.php" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                    <input type="submit" value="ENVIAR MENSAJE">
                </form>    
                 <?php
               }         
            ?>
            <div class="contacto-info">
                <div class="mail">
                    <img src="imagenes/mail-icon.png" alt="edithm.bautistag@gmail.com">
                    edithm.bautistag@gmail.com
                </div>
                <div class="whatsapp">
                <img src="imagenes/whatsapp.png" alt="55 19 15 70 09">
                55 19 15 70 09
                </div>

            </div>

            </div>
        </section>

    </main>

    <footer>
        <div class="contenedor">
            <div class="redes">
               <a href="#"><img src="imagenes/facebook.png" alt=" Logo de facebook">
               <a href="#"><img src="imagenes/facebook.png" alt=" Logo de facebook">
               <a href="#"><img src="imagenes/facebook.png" alt=" Logo de facebook">
            </div>
            <div class="parrafo">
               <p>© 2019 Edith Bautista Garcia | Desarrollador web México. todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <!--Codigo para el carrusel-->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false, //para eliminar los puntos para navegar
            responsive: {
                0: { //NUMERO DE ITEMS PARA CELULAR
                    items: 1
                },
                600: { //NUMERO DE ITEMS PARA TABLETS
                    items: 3
                },
                1000: { //NUMERO DE ITEMS PARA ESCRITORIO
                    items: 5
                }
            }
        })
    </script>

</body>

</html>