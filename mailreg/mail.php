
<?php

$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$comen = $_POST["comen"];
// Varios destinatarios
$para  = 'soporteapp@corporativosiset.com.mx'.','; // atención a la coma
//$para .= 'brandon.baez@tyren.org'.',';
$para .= 'soportetecnico@corporativosiset.com.mx';

/*$para  = 'aidan@example.com' . ', ';
$para .= 'wez@example.com';*/

// título
$título = 'Página Web MiTaxsi';

// mensaje
$mensaje = '
  <p>Contacto desde MiTaxsi.com</p>
  <table>
    <tr>
      <th>Nombre</th><th>Teléfono</th><th>Email</th><th>Comentario</th>
    </tr>
    <tr>
      <td>'.$nombre.'</td><td>'.$tel.'</td><td>'.$mail.'</td><td>'.$comen.'</td>
    </tr>
  </table>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: MiTaxsi<atencion@mitaxsi.com>' . "\r\n";

// Enviarlo

if(mail($para, $título, $mensaje, $cabeceras)){
  echo "ok";
}else{
  echo "mal";
}


?>
