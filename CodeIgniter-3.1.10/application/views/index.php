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
		background-image: url("<?php echo BASE_URL;?>../../assets/img/cartel.png");
		height: 300px;
		background-size: cover;
		background-position: center;
		width: 80%;
		margin: 0 10%;
	}
	</style>
	<div class="cont">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>../../assets/img/banner1.png" class=" w-100" alt="...">
	    </div>
	    <div class="carousel-item" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>../../assets/img/banner2.png" class="w-100" alt="...">
	    </div>
	    <div class="carousel-item" data-interval="3000">
	      <img src="<?php echo BASE_URL;?>../../assets/img/banner3.png" class="w-100" alt="...">
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
			Inicial $0.00
			<hr class="v"/>
			Mensual $0.00
			<hr class="v"/>
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
</body>
</html>
