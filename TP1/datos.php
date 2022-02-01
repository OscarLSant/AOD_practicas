<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
</head>
<body>
    
    <section class= "hero is-medium is-info">
        <div class="hero-body">
            <p class="title">
                Datos personales
            </p>
        </div>
    </section>

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class="column is-two-fifths">
            <form action="procesar.php" method="post">
                <div>
                    <label>Nombre(s): </label>
                    <input class="input is-info" type="text" name="nombre" required>
                </div>
                <div>
                    <label><br>Apellido paterno: </label>
                    <input class="input is-info" type="text" name="aPaterno" required>
                </div>
                <div>
                    <label><br>Apellido materno: </label>
                    <input class="input is-info" type="text" name="aMaterno" required> 
                </div>
                <div>
                    <label><br>Cargo: </label>
                    <input class="input is-info" type="text" name="cargo" required> 
                </div>
                <div>
                    <label><br>RFC: </label>
                    <input class="input is-info" type="text" name="rfc" required> 
                </div>
                <div>
                    <label><br>CURP: </label>
                    <input class="input is-info" type="text" name="curp" required> 
                </div>
                <div>
                    <label><br>Domicilio: </label>
                    <input class="input is-info" type="text" name="domicilio" required> 
                </div>
                <div>
                    <label><br>Teléfono: </label>
                    <input class="input is-info" type="tel" name="telefono" required> 
                </div>
                <div>
                    <label><br>Correo electrónico: </label>
                    <input class="input is-info" type="email" name="email" required> 
                </div>
                <div class="control">
                    <label><br>Sexo: <br></label>
                    <label class="radio">
                    <input class="radio" type="radio" name="sex" required value="Masculino"> Masculino
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="sex" required value="Femenino"> Femenino
                    </label>
                </div>
                <div>
                    <label><br>Fecha de nacimiento: </label>
                    <input class="input is-info" type="date" name="fNacimiento" required> 
                </div>
                <div class="control">
                    <label><br>Estado civil: <br></label>
                    <label class="radio">
                    <input class="radio" type="radio" name="eCivil" required value="Soltero"> Soltero
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="eCivil" required value="Casado"> Casado
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="eCivil" required value="Otro"> Otro
                    </label>
                </div>
                <div class="control">
                    <label><br>Escolaridad: <br></label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="Escolarizado"> Escolarizado
                    </label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="Sabatino"> Sabatino
                    </label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="Otro"> Otro
                    </label>
                </div>
                <div>
                    <label><br>Referencia familiar: </label>
                    <input class="input is-info" type="text" name="referencia" required> 
                </div>
                <div>
                    <label><br>Observaciones: </label>
                    <input class="input is-info" type="text" name="observaciones" required> 
                </div>
                <div style="text-align:center">
                <br>
                    <input class="button is-info" type="submit" value="Enviar">
                </div>
            </form>
        </div>
        <div class="column"></div>
    </section>

</body>
</html>



