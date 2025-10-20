<?php
include_once "../capaconexcion/conexcion.php";
if (isset($_POST["BtnRegistrarDonacion"]))
{
    $Nombre=trim($_POST["Nombre"]);
    $Apellido=trim($_POST["Apellido"]);
    $FchNacimiento= $_POST["FchNacimiento"];
    $NroDoc=trim($_POST["NroDoc"]);
    $Sexo=trim($_POST["Sexo"]);
    $Email=trim($_POST["email"]); 
    $Sql="INSERT INTO donante (Nombre,Apellido,FchNacimiento,NroDocumento,Sexo,Email) VALUES('$Nombre','$Apellido','$FchNacimiento','$NroDoc','$Sexo','$Email')";
    $result=mysqli_query($Cnx,$Sql);
    if ($result)
    {
        ?>
        <h3 class= "Registrado" > Registrado en forma correcta </h3>
         <?php
    }
}
?>

