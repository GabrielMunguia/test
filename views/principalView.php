
<?php include("templates/header.php");?>

<link rel="stylesheet" href="./assets/css/principal.css">
<div class="color-main  min-vh-100">
	<header class="d-flex col-12 flex-column justify-content-center align-items-center position-relative pt-5">
        <div class="d-flex justify-content-center col-11 position-relative col-12 overflow-hidden">
            <img alt="img" class=""        src="./assets/img/bodas.jpg" /> 
        </div>
    </header>
	<main>
		<div class="container flex">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center d-flex flex-column justify-content-center align-items-center position-relative">
					<div class="pt-5">
						<p class="fw-bold fs-2" style="color: #5e0f1f ;">Busca a los novios por el codigo que te han facilitado</p>
					</div>
					<div class="pt-5 text-center mb-3 texto">
	                    <input type="text" class="form-control" placeholder="Introduce el código">
					</div>
					<div class="pt-5 mb-4 justify-content-center align-items-center">
						<a href="./controller/Login.php" type="button" class="color-btn fw-bold fs-5 align-text-bottom  text-decoration-none">Buscar</a>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php include("templates/footer.php");?>