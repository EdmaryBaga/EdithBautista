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
    <!--Agregamos responsividad a la pagina para que se adapte a los ceulares y tablets -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!--viewport hace rederencia ala pantalla, content indica quwe se debe adaptar al anchi de la pantall y 
al decir user-scalable=no indicamos que el usuario no puede hacef zoom -->
    
    <meta charset="utf-8">
    <title> Edith Bautista</title>
</head>

<body>
    <!-- Contenido de la pagina
    <h1>Este es el titulo</h1>
    <h2>Subtitulo con h2</h2>-->

    <!--Boton flotante de whatsap -->
    <a id="whatsapp" href="https://api.whatsapp.com/send?phone=5519157009"><img src="imagenes/whatsapp.png" alt=""></a>

    <header>
        <!--Un div es un contenedor de informacion-->
        <div class="menu">
            <div class="contenedor">
                <a class="logo" href="">Edith Bautista</a>
                <img class= "menu-icon" src="imagenes/menu.png">
                <nav>
                    <!--Nav crea un menu de navegacion-->
                    <ul class="lista-menu">
                        <!--Lista no oedenada, para una ordenada usar ol-->
                        <li><a href="#sobre_mi">Sobre mi</a></li>
                        <li><a href="#mis-trabajos">Mis trabajos</a></li>
                        <li><a href="#servicios"> Servicios </a></li>
                        <li><a href="#por-que-trabajar">¿Por qué trabajar conmigo</a></li>
                        <li> <a href="#blog">Blog</a></li>
                        <li> <a href="#contacto">Contacto</a></li>
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
                        <img src="imagenes/Perfil2.jpg">
                    </div>
                    <div class="text-yo">
                        <p class="texto-objetivo">
                            Hola, soy Edith Bautista Garcia una mexicana que desde pequeña tuvo curiosidad por el mundo tecnológico, es por ello que
                            durante mi educación secundaria me uní al taller de informática, en mi educación media superior decidí estar en la carrera
                            técnica de informática, pero quise aprender más sobre este mundo así que estudié la licenciatura en computación de la 
                            universidad Autónoma Metropolitana en donde aprendí varias ramas de la computación como inteligencia artificial, análisis
                            y diseño de algoritmos, compiladores, entre otras; durante los últimos trimestre de la carrera decidí que mi principal
                            área de desarrollo sería el web y mobile (empezando por android) así que busque proyectos de Servicio social y proyecto 
                            terminal enfocados en el desarrollo web, en donde pude poner a prueba mis habilidades y desarrollar muchas más.
                        </p>
                        <p>
                            Después de terminar mis estudios de licenciatura estuve en una consultora llamada Gonet como becario 
                            mobile, en donde puse a prueba muchas habilidades y también aprendí otras, fue mi primer acercamiento al 
                            mundo laboral.
                        </p>
                        <p>
                            Actualmente me encuentro aprendiendo tecnologías sobre desarrollo web y mobile para aumentar mi mis habilidades 
                            y portafolio.
                        </p>
                        <p> 
                            Resolver algoritmos en plataformas como Hackerrank o Coderbyte es unos de mis pasatiempos favoritos.
                         </p>
                        <br>
                        <a href="">VER MIS TRABAJOS</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="servicios">
                <h3>LO QUE PUEDO HACER</h3>
                <div class="contenedor-servicios">
                    <div class="servicio celeste">
                        <h4>Desarrollo Web</h4>
                        <p>
                            He desarrollando con el framework Codeigniter, diseño, análisis y desarrollado base de datos con MySQL.
                        </p>
                        <p>
                            Los lenguajes que he manejado son php, JS, Python y Java.
                         </p>
                        <p>
                            Para asegurar la responsividad suelo utilizar Bootstrap y Css.
                        </p>
                        <img class="Icon-serv" src="imagenes/monitor.jpg">
                    </div>
                    <div class="servicio violeta">
                        <h4>Diseño web</h4>
                        <p>
                            Para cuidar la experiencia  de usuario suelo consultar las guías de material design.    
                        </p>
                        <p>
                            cuidar los colores de las páginas web es muy importante pues deben ir relacionados con los 
                            colores de la compañía y las emociones que la página quiere expresar.
                        </p>
                        <p>
                            Algunas animaciones que mejoran la UX las desarrolló con JS y JQuery.
                        </p>
                        <img class="Icon-serv" src="imagenes/Diseño.jpg">
                    </div>
                    <div class="servicio celeste">
                        <h4>Desarrollo Mobile (Android)</h4>
                        <p>
                            Diselos atractivos y funcionales que genere una excelente experiencia de usuario a tus clientes, pues es fundamental para
                            tener exito Y generar mas visitas.
                         </p>
                         <p>
                            En el desarrollo de interface suelo usar  FrameLayout, LinearLayout, RelativeLAyout y ConstraintLayout, para pintar listas 
                            con reciclerView.
                         </p>
                         <p>
                            Consumo de servicios de FireBase como el login de google.
                         </p>
                         <p>
                            Persistencia de datos con sharedPrefences y Realm.
                         </p>
                        <img class="Icon-serv" src="imagenes/movil.jpg">
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
                        <a><img src="imagenes/EstaPagina.png"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupWeb.jpg""></a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupMobile.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupdesign.jpg"> </a>
                    </div>
                    <div class="item">
                        <a><img src="imagenes/mockupWebResp.jpg"> </a>
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
                        <li>Aseguro que las paginas web y app cargaran en menos de 4 segundos(Segun la cantidad contenido que tiene) si una app o web 
                        tarda mas de 5 segundos se tienen una mala experiencia de usuario, y es posible que el usuario no vuelva.
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul>
                        <li><img src="imagenes/mantenimiento.png"></li>
                        <li>Mantenimiento</li>
                        <li>Para dar mantenimiento a código desarrollado por terceros, me aseguro la comprensión del problema al que dieron solución y
                           consulta de la documentación de esa version del sistema.
                            </li>
                    </ul>
                </div>
                <div class="item">
                    <ul>
                        <li><img src="imagenes/responsive.png"></li>
                        <li>Responsive</li>
                        <li>Aseguro que su web se adapte a cualquier dispositivo y su app tenga una excelente experiencia de usuario en los 
                        diferentes tamaños de pantallas. </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="blog">
            <div class="contenedor">
                <h3>Blog</h3>
                <div class="contenedor-publicaciones">
                    <div class="publicacion">
                        <img src="imagenes/Git.jpg">
                        <div class="contenido blogcont">
                            <div>
                                <h4>Git</h4>
                                <p>
                                En esta sección del blog hablo sobre las diferentes cosas que puedes hacer desde git bash como crear un repositorio
                                 local, subir un proyecto a github ...
                                </p>
                            </div>
                            <div class="botont"><a href="https://tomakfe.blogspot.com/search/label/Git">Leer mas →</a></div>
                        </div>
                    </div>
                    <div class="publicacion">
                        <img src="imagenes/Linux.jpg">
                        <div class="contenido">
                            <h4>Linux</h4>
                            <p>
                                En esta sección del blog enlisto los principales comando de linux , como gestionar archivos desde la consola de linux ...
                            </p>
                            <div class="botont"><a href="https://tomakfe.blogspot.com/search/label/Linux">Leer mas →</a></div>
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

        <h3 #notificacion-correo-enviado > </h3>


        <section id="contacto">
            <!--codigo parra inviar un email -->
            <?php 
                if(@$_GET['i']=='ok'){
                    
                ?>
                    <!--//condicionamos que el formulario se envio correctamente
                    // <h3>La consulta se envio correctamente nos conectaremos a la brevedad. h3-->
                                                          
            
            
               
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

    <!--Script para menu fijo, al subir, con Jquery-->

    <script>
        //cuando el documento esta listo ejecuta la funcion
        $(document).ready(function(){
            //cuando se haga scroll se ejecuta la function
            $(window).scroll(function(){
                scroll = $(window).scrollTop();
                if(scroll>100){
                    //estilos con Jquery
                    $('.menu').css({"position":"fixed"});
                    $('.menu').css({"width":"100%"});
                    $('.menu').css({"top":"0"});
                    $('.menu').css({"background":"#fff"});
                    $('.menu a').css({"color":"#2e2e2e"});
                    $('.logo').css({"color":"#2e2e2e"});
                    $('.menu').css({ "box-shadow": "rgba(0,0,0,0.22) 6px 1px 1px" });
                    //con z-index indicamos que tan visible va a ser el elemnto, y al ponerle 10 le decimosque debe estar siempre sobre todo
                    $('.menu').css({"z-index":"100"});
                }else{
                    $('.menu').css({"position":"relative"});
                    $('.menu').css({"background":"transparent"});
                    $('.menu').css({"box-shadow": "0 0 0 "});
                    $('.menu a').css({"color":"#fff"});
                    $('.logo').css({"color":"#fff"});
                }

            })

            $('.menu-icon').click(function(){
                //$('header nav').slideDown(); aparece 
                //$('header nav').slideUp(); desaparece 
                $('header nav').slideToggle();
            })
        })

    </script>

</body>

</html>