<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-medium is-danger">
  		<div class="hero-body">
    		<p class="title">
      			Registros personales
    		</p>
  		</div>
	</section>

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class="column is-two-fifths">

            <?php 

                $nombre = $_POST['nombre'];
                $aPaterno = $_POST['aPaterno'];
                $aMaterno = $_POST['aMaterno'];
                $cargo = $_POST['cargo'];
                $rfc = $_POST['rfc'];
                $curp = $_POST['curp'];
                $domicilio = $_POST['domicilio'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $sex = $_POST['sex'];
                $fNacimiento = $_POST['fNacimiento'];
                $eCivil = $_POST['eCivil'];
                $escolaridad = $_POST['escolaridad'];
                $referencia = $_POST['referencia'];
                $observaciones = $_POST['observaciones'];

                echo "<h1 class='is-subtitle'>";
                echo "<br>Hola " . $nombre . " " . $aPaterno . " " . $aMaterno . " tus datos son los siguientes:";
                echo "<br><br>Nonmbre:   " . $nombre;
                echo "<br>Apellido paterno:   " . $aPaterno;
                echo "<br>Apellido materno:   " . $aMaterno;
                echo "<br>Cargo:   " . $cargo;
                echo "<br>RFC:   " . $rfc;
                echo "<br>CURP:   " . $curp;
                echo "<br>Domicilio:   " . $domicilio;
                echo "<br>Teléfono:   " . $telefono;
                echo "<br>Correo electrónico:   " . $email;
                echo "<br>Sexo:   " . $sex;
                echo "<br>Fecha de nacimiento:   " . $fNacimiento;
                echo "<br>Estado civil:   " . $eCivil;
                echo "<br>Escolaridad:   " . $escolaridad;
                echo "<br>Referencia:   " . $referencia;
                echo "<br>Observaciones:  " . $observaciones;
            ?>

        </div>
        <div class="column"></div>
    </section>

    
</body>
</html>