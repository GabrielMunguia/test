<?php include("templates/header.php");?>
<div class="boda d-flex flex-column justify-content-between align-items-center" >
<link rel="stylesheet" href="../assets/css/loginBoda.css">

<header class="d-flex col-12 flex-column justify-content-center align-items-center position-relative">
        <div class="d-flex justify-content-center col-11 position-relative col-12 overflow-hidden">
            <img alt="img" class="boda_fondo" src="../assets/img/fondo_boda.jpg" />
            <img class="boda_imagen position-absolute"
                src="../assets/img/pareja.png" />
             
        </div>

    </header>
    <main >


       <form class=" d-flex flex-column align-items-center" action="../controller/Login.php" method="POST">
        <h3 class="text-center col-sm-8 col-lg-10 col-xxl-7  ">Escribe aquí tu nombre para saber quien manda fotos y mensajes  </h3>
        <div class="col-10 mt-3 col-lg-6 col-sm-8">
            <input class="form-control" name="nom" value="XXX" placeholder="Nombre" />
        </div>

        <div class="d-flex col-10 col-sm-8  col-lg-6  mt-5 mb-4">
          
            <p class="text-start  col-12 fw-bold">   <input class="form-check-input boda_checkbox" type="checkbox" id="checkAcuerdos"> He leído y acepto la política de privacidad, esta información y la futura se enviará a los novios y se verá en esta aplicación web o soporte audiovisual
            </p>
        </div>
        <button class="login_btn_enviar " type="submit">Entrar</button>
       </form>
    
    </main>
    <footer class=" col-10 col-sm-8 col-lg-6 col-xxl-4 fw-bold mb-3 mt-3 ">
        <p class="boda_footer_text fw-bold"  >Aseguramos el cumplimiento de la normativa vigente de Proteccion de Datos de caracter Personal y 
         resto de normativas aplicables sobre proteccion de datos . Ver polotica de privacidad
        </p>
    </footer>
    
</div>

<?php include("templates/footer.php");  ?>