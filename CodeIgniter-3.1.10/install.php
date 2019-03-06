<?php

if($_POST){

	$contenidos=array();
	foreach($_POST as $campo=>$valor){
		$contenidos[]="define('{$campo}','{$valor}');\n";

	}

	$link=mysqli_connect($_POST['SERVER'],$_POST['USER'],$_POST['PASSWORD']);
	if($link){
		$add="CREATE DATABASE {$_POST['NAME']};";
		mysqli_query($link,$add);
		$add="USE {$_POST['NAME']}";
		mysqli_query($link,$add);

		$add="
		CREATE TABLE Direcciones (
    id_direccion int,
    sector varchar(100),
    calle varchar(100),
    casa int,
    constraint pk_id_direcciones primary key(id_direccion)
		);";


		mysqli_query($link,$add);
			$add="
			CREATE TABLE Administradores(
    cedula_admin int not null,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    correo varchar(30) not null,
    clave varchaR(30) not null,
    direccion int not null,
    constraint pk_cedula_admin primary key(cedula_admin),
    constraint fk_direccion_admin foreign key(direccion) references direcciones(id_direccion)
		);";

		mysqli_query($link,$add);
			$add="
			CREATE TABLE Intereses(
    id_interes int not null,
    tasa float not null,
    fecha_agregacion date,
    constraint pk_intereses primary key(id_interes)
		);";

		mysqli_query($link,$add);
				$add="
				CREATE TABLE Clientes(
    cedula_cliente int not null,
    nombre varchar(100),
    apellido varchar(100),
    correo varchar(30),
    clave varchar(30),
    direccion int not null,
    constraint pk_cedula_cliente primary key(cedula_cliente),
    constraint fk_direccion_cliente foreign key(direccion) references direcciones(id_direccion)
		);";
		mysqli_query($link,$add);
					$add="
					CREATE TABLE Correos_Enviados(
    id_correo_enviado int not null,
    client int not null,
    fecha_envio date,
    detalle text,
    constraint fk_client foreign key(client) references clientes(cedula_cliente)
		);";


		mysqli_query($link,$add);
			$add="
			CREATE TABLE Solicitudes(
	    id_solicitud int not null,
	    tipo char(10),
	    fecha_solicitud date,
	    comentario text,
	    cliente int not null,
	    constraint pk_solicitudes primary key(id_solicitud),
	    constraint fk_cliente foreign key(cliente)
	    references Clientes(cedula_cliente));";
		mysqli_query($link,$add);
			$add="
			CREATE TABLE Financiamientos(
    id_financiamiento int not null,
    monto decimal not null,
    interes int not null,
    fecha_solicitud date,
    fecha_aprovacion date,
    constraint pk_id_financiamiento
    primary key(id_financiamiento),
    constraint fk_interes foreign key(interes)
    references intereses(id_interes)
		);";
		mysqli_query($link,$add);
			$add="
			CREATE TABLE Financiamientos_Aprobados(
    id_financiamiento_aprob int not null,
    cliente int not null,
    financiamiento int not null,
    administrador int not null,

    constraint pk_financiamientos_aprob
    primary key(id_financiamiento_aprob),

    constraint fk_cliente_finanAprob foreign key(cliente)
    references clientes(cedula_cliente),

    constraint fk_financiamientoAprob foreign key(financiamiento)
    references financiamientos(id_financiamiento),

    constraint fk_administrador_FinanAprob foreign key(administrador)
    references administradores(cedula_admin));";
		mysqli_query($link,$add);
			$add="
			CREATE TABLE Prestamos(
    id_prestamo int not null,
    monto decimal,
    interes int not null,
    fecha_solicitud date,
    fecha_aprovacion date,

    constraint pk_prestamos primary key(id_prestamo),
    constraint fk_interes_prestamos foreign key(interes)
    references intereses(id_interes));";
		mysqli_query($link,$add);
			$add="
			CREATE TABLE Prestamos_Aprobados(
    id_prestamo_aprob int not null,
    cliente int not null,
    prestamo int not null,
    administrador int not null,

    constraint pk_prestamosAprob primary key(id_prestamo_aprob),

    constraint fk_cliente_PrestAprob foreign key (cliente)
    references clientes(cedula_cliente),

    constraint fk_prestamo_aprob foreign key (prestamo)
    references prestamos(id_prestamo),

    constraint fk_administrador foreign key (administrador)
    references administradores(cedula_admin));";

}

	$campo=implode("\n",$contenidos);
	$txt="<?php
		$campo";
	file_put_contents('install_contenidos.php',$txt);
	header("Location:./");


}

function format_input($label, $id){

	echo <<<CAMPO

	<input class="inputs" type="text" placeholder="{$label}" name="{$label}" id="{$id}"><br><br>

CAMPO;


	;
}



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<style>
	body{
		background: #FFFF;
		color: sienna;
		text-align: center;
	}
	.form{

		text-align: center;
		font-family:Helvetica;
		margin-bottom: auto;
		margin-top: 10%;
		margin-left: auto;
		margin-right: auto;
		border:none;
		width:400px;
		height: 450px;
		background:#FFFF;
		overflow: hidden;
		border-bottom-left-radius: 15px;
		border-bottom-right-radius: 15px;

	}
	.arriba{
		background-color:sienna;
		height: 370px;
	}
	.abajo{
		height: 80px;
		border-radius: 15px;
	}

	.registrar{
		color:sienna;
		background-color:#FFC89E;
		border: none;
		width: 100%;
		height: 100%;
		font-size: 40px;
		transition:1s;
		}
	.registrar:hover{
		background-color: #F7A175;
		color: black;
	}
	.titulo{
		padding: 20px;
		color: sienna;
		background-color:#FFC89E;
		margin-bottom: 20px;
		font-size: 30px;
	}

	.inputs{
		font-size: 18px;
		font-family: Helvetica;
		text-align: center;
		background-color:#FFFFFF;
		border-color: sienna;
		color: sienna;
		width: 80%;
		height: 30px;
		border: 1px solid #A2A2A2;
		transition: 1s;
	}
	.inputs:hover{
		background-color: gray;
		color: white;
	}

	</style>
<div class="form">
<form action="" method="post" name="createbd" id="createbd">
		<div class="arriba">
		<div class="titulo"><label >Database</label></div><br>
		<?php
		format_input("BASE_URL","install_host");
			format_input("SERVER","install_host");
			format_input("NAME","install_bd");
			format_input("USER","install_user");
			format_input("PASSWORD","install_pass");
			?>
			<br><br>

		</div>

		<div class="abajo">

		<input type="submit" name="crear" id="crear" value="Create" class="registrar">

		</div>
	</form>

</div>



</body>
</html>
