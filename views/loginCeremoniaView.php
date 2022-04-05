<?php include("templates/header.php");?>
<link rel="stylesheet" href="../assets/css/loginCeremonia.css">

<div class="ceremonia d-flex flex-column justify-content-between align-items-center">
    <header class="d-flex col-12 flex-column justify-content-center align-items-center position-relative">
        <div class="d-flex justify-content-center col-11 position-relative col-12 overflow-hidden">
            <img alt="img" class="ceremonia_fondo"      src="../assets/img/fondo_ceremonia.svg" />
            <img class="ceremonia_imagen position-absolute"
            src="../assets/img/nina.png" />
        </div>

    </header>
    <main>
        <h1 class="ceremonia_titulo  text-center mb-4">Antonia Sanchez Ruiz</h1>
        <form class=" d-flex flex-column align-items-center" action="../controller/Menu.php" method="POST">
            <h3 class="text-center col-sm-8 col-lg-6  col-xxl-7  ">Escribe aquí tu nombre para saber quien manda fotos y
                mensajes </h3>
            <div class="col-10 mt-3 col-lg-6 col-sm-8">
                <input class="form-control" placeholder="Nombre" />
            </div>

            <div class="d-flex col-10 col-sm-8  col-lg-6  mt-5 mb-4">

                <p class="text-start  col-12 fw-bold"> <input class="form-check-input ceremonia_checkbox" type="checkbox"
                        id="checkAcuerdos"> He leído y acepto la política de privacidad, esta información y la futura se
                    enviará a los novios y se verá en esta aplicación web o soporte audiovisual
                </p>
            </div>
            <button class="login_btn_enviar ">Entrar</button>
        </form>

    </main>
    <footer class=" col-10 col-sm-8 col-lg-5 col-xxl-4 fw-bold mb-3 mt-3 ">
        <p class="ceremonia_footer_text">Asegúranos la más estricta confidencial en la recogida y tratamiento de los datos
            facilitados
            por los usuarios a través de internet. Dichos datos serán tratados ajustándose a lo establecido 
            en la normativa vigente de Protección de Datos de Carácter Personal y  resto de
            normativa aplicable sobre protección de datos. Ver política de privacidad
        </p>
    </footer>

</div>

<?php include("templates/footer.php");?>