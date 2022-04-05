<?php include("templates/header.php");?>
<div class="ceremonia d-flex flex-column  align-items-center">

    <link rel="stylesheet" href="../assets/css/menuPrincipalCeremonia.css">
    <header class="d-flex col-12 flex-column justify-content-center align-items-center position-relative">
        <div class="d-flex justify-content-center col-11 position-relative col-12 overflow-hidden">
            <img alt="img" class="ceremonia_fondo"      src="../assets/img/fondo_ceremonia.svg" />
            <img class="ceremonia_imagen position-absolute"
            src="../assets/img/nina.png" />
        </div>

    </header>
    <main class="col-12">
        <h1 class="ceremonia_titulo  text-center mb-4">Antonia Sanchez Ruiz</h1>
        <!-- Slider de textos-->
        <div class="d-flex justify-content-center">
            <div class="slideshow-container">

            <div class="mySlides">
                    <p>Texto de prueba 1 texto de prueba 1 texto de prueba 1 texto de prueba 1 texto de prueba 1 texto de prueba 1 </p>

                </div>

                <div class="mySlides">
                    <p>Texto de prueba 2 texto de prueba 1 texto de prueba 1 texto de prueba 1</p>

                </div>

                <div class="mySlides">
                    <p>Texto de prueba 3 texto de prueba 3 texto de prueba 3 texto de prueba 3/p>

                </div>

                <a class="prev d-none" onclick="plusSlides(-1)">❮</a>
                <a class="next d-none" onclick="plusSlides(1)">❯</a>

            </div>

            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>


        <!-- Menu de opciones-->
        <div class="d-flex flex-column px-2 align-items-center">
            <button class="boton_menu   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
            <span class="boton_menu_texto"> Enviar foto</span>
           <div class="boton_menu_contenedor_imagen"> 
           <img class=" boton_menu_imagen" src="../assets/img/botonFoto_azul.png"/>
           </div>

            </button>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Foto Divertida</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/boton_foto_divertida_azul.png" />
                </div>

            </button>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Enviar mensaje</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/boton_mensaje_azul.png" />
                </div>

            </button>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Ver todo lo que se envia</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/botonTodo_azul.png" />
                </div>

            </button>


            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto">Comprar albúm</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/boton_libros_azul.png" />
                </div>

            </button>

        </div>

     </div>

</div>




</main>


</div>

<script src='../assets/js/menuPrincipal.js'></script>

<?php include("templates/footer.php");  ?>