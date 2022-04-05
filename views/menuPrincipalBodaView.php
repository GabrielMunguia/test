<?php include("templates/header.php");?>
<div class="boda d-flex flex-column  align-items-center">

    <link rel="stylesheet" href="../assets/css/menuPrincipal.css">
    <header class="d-flex col-12 flex-column justify-content-center align-items-center position-relative">
        <div class="d-flex justify-content-center col-11 position-relative col-12 overflow-hidden">
            <img alt="img" class="boda_fondo" src="../assets/img/fondo_boda.jpg" />
            <img class="boda_imagen position-absolute" src="../assets/img/pareja.png" />

        </div>

    </header>
    <main class="col-12">

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
           <form  class="d-flex flex-column px-2 align-items-center col-12"action="../controller/Menu.php" method="GET">
               <input class="d-none" name="param" value="ceremonia"/>
           <button type="submit" class="boton_menu   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Enviar foto</span>
              <div class="boton_menu_contenedor_imagen"> 
               <img class=" boton_menu_imagen" src="../assets/img/botonFoto.png"/>
                </div>

            </button>
           </form>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Foto Beso</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/botonBeso.png" />
                </div>

            </button>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Enviar mensaje</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/boton_mensaje.png" />
                </div>

            </button>

            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto"> Ver todo lo que se envia</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/botonTodo.png" />
                </div>

            </button>


            <button class="boton_menu mt-3   col-12 col-sm-10 col-md-8  col-lg-6 col-xl-4 col-xxl-3">
                <span class="boton_menu_texto">Comprar albúm</span>
                <div class="boton_menu_contenedor_imagen">
                    <img class=" boton_menu_imagen" src="../assets/img/boton_libros.png" />
                </div>

            </button>

        </div>

     </div>

</div>




</main>


</div>

<script src='../assets/js/menuPrincipal.js'></script>

<?php include("templates/footer.php");  ?>