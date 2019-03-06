<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<style>
	.cont{
		height: 500px;
		direction: ltr;
	}
	.w-100{
		height: 500px;
	}
	.v{
		border: black 2px;
	}
	.calculadora{
		padding: 5%;
	}
	.cartel{
		background-image: url("<?php echo BASE_URL;?>assets/img/cartel.png");
		height: 300px;
		background-size: cover;
		background-position: center;
		width: 80%;
		margin: 0 10%;
	}
	.banner2{
		background-color: #00BCD4;
		padding:5%;
		color: white;
	}
	.img-banner2{
		max-height: 80px;
		width: auto;
		height: auto;
		margin-bottom: 30px;
}
	.section3{
		padding: 5% !important;
	}
	.footer{
		position: fixed;
		bottom: 0;
		background-color: lightgray;
		padding: 1% 5%;
		width: 100%;
		font-size: 0.8rem;
	}
	</style>
	<div class="cont">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>assets/img/banner1.png" class=" w-100" alt="...">
	    </div>
	    <div class="carousel-item" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>assets/img/banner2.png" class="w-100" alt="...">
	    </div>
	    <div class="carousel-item" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>assets/img/banner3.png" class="w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 calculadora">
				CALCULA TUS CUOTAS AQUÍ
				<hr>
				<form>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
			    			<label for="exampleInputEmail1">Precio del vehículo</label>
			    			<input type="number" class="form-control" id="" >
			  			</div>
						</div>
						<div class="col-6">
		  			<div class="form-group">
		    			<label for="exampleInputPassword1">Monto del préstamo</label>
		    			<input type="number" class="form-control" id="">
		  			</div>
					</div>
  			</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Año del vehículo</label>
							<input type="number" class="form-control" id="" >
						</div>
					</div>
					<div class="col-6">
					<div class="form-group">
						<label for="exampleInputPassword1">Cuotas mensuales</label>
						<input type="number" class="form-control" id="">
					</div>
				</div>
			</div>
			<hr>
			<h3>	Inicial $0.00</h3>

			<h3>	Mensual $0.00</h3>
  	<button type="submit" class="btn btn-primary">Solicitar Préstamo</button>
		</form>

		</div>
		<div class="col-md-6 calculadora text-center">
				<h1>TASA DE INTERÉS</h1>
				<div class="cartel">
					<br>
					<h1 style="color:white;">8% <br> Mensual</h1>
				</div>
		</div>

	</div>

</div>
	<div class="banner2 container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<h1>¿Por qué confiar en nosotros?</h1>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-3 justify-center text-center">
				<img class="img-banner2" src="<?php echo BASE_URL;?>/assets/img/porciento.png" alt="">
				<h3>Tasa de interes fija</h3>
			</div>
			<div class="col-3 text-center">
				<img class="img-banner2" src="<?php echo BASE_URL;?>/assets/img/cotaje.png" alt="">
				<h3>Aprobacion inmediata</h3>
			</div>
			<div class="col-3 text-center">
				<img class="img-banner2" src="<?php echo BASE_URL;?>/assets/img/Fondo.png" alt="">
				<h3>Hasta un 80% de financiamiento</h3>
			</div>
			<div class="col-3 text-center">
				<img class="img-banner2" src="<?php echo BASE_URL;?>/assets/img/camion.png" alt="">
				<h3>Financiamiento de vehiculos pesados</h3>
			</div>
		</div>
	</div>
	<div class="container section3">
		<h2>Contactanos</h2>
		<h6>Tel: 809 555 5555</h6>
		<h6>Dir: Av. Calle Primera #1</h6>
		<h6>Email: example@finapp.com</h6>
	</div>
	<div class="footer">
		@2019 DevWare company<font class="text-muted"> Todos los derechos reservados</font>
	</div>
</body>
</html>
