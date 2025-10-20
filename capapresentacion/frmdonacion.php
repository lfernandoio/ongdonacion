<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donante</title>
    <link  rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <form method="POST">
        <p> DONAR</p>
        <div class="form-group">
            <input type="text" class="form-control_donacion" id="name" name="Nombre" placeholder="Nombre">
        </div>
         <div class="form-group">
            <input type="text" class="form-control_donacion" id="apellido" name="Apellido" placeholder="Apellido">
        </div>
         <div class="form-group">
            <input type="date" class="form-control_donacion" id="FchNacimiento" name="FchNacimiento" placeholder="Fecha Nacimiento">
        </div>
        <div class="form-group">
            <input type="text" class="form-form-control_donacion" id="email" name="email" placeholder="Email">
        </div>
          <div class="form-group">
            <input type="text" class="form-form-control_donacion" id="NroDoc" name="NroDoc" placeholder ="CI/NIT">
        </div>  
        <div class="form-group">
            <Select class="form-control_donacion" id="Pais" name="Pais" placeholder="Pais">
                <option value="Argentina">  Argentina   </option>
                <option value="Brasil">     Brasil      </option>
                <option value="Bolivia">    Bolivia     </option>
                <option value="Colombia">   Colombia    </option>
                <option value="Ecuador">    Ecuador     </option>
                <option value="Chile">      Chile       </option>
                <option value="Paraguay">   Paraguay    </option>
                <option value="Peru">       Peru        </option>
                <option value="Uruguay">    Uruguay     </option>
                <option value="Venezuela">  Venezuela   </option>
            </Select>    
        </div>
        <div class="form-group">
            <Select class="form-form-control_donacion" id="Sexo" name="Sexo" placeholder="Sexo">
                <option value="Masculino"> Masculino </option>
                <option value="Femenino">  Femenino  </option>
            </Select>    
        </div>
        <div class="col-md-12">
			<div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" name="BtnRegistrarDonacion" value="Registrar">
            </div> 
        </div> 
        </form>
    <?php   
        include_once "../capanegocio/clsdonacion.php"; 
    ?>
</body>
</html>