<?php
    /** incluye todos los recursos */
    include_once("../AnsTek_libs/integracion.inc.php");
    include_once("../model/contactos.class.php");
    date_default_timezone_set('America/Bogota'); //configuro un nuevo timezone


    /** Instancia la clase experiencia*/
    $contacto = new registro($db);
    $user = 0;
    /** captura el tipo de accion a realizar*/
    $accion = $_REQUEST['accion'];
    /** conmutador que determina las acciones a realizar para
     * este modulo
     */
    switch($accion){
    /* Obtiene un solo registro de Experiencias */
      case "single":
      $jsondata = array();
      $where = " Where Id = " . $_REQUEST['pId'];
      $result = $contacto->selectAll($where);
      if($db->numRows($result) > 0)
      {
        $r = $db->datos($result);
        $jsondata['Id'] = $r["Id"];
        $jsondata['Nombres'] = $r["Nombres"];
        $jsondata['Cedula'] = $r["Cedula"];
        $jsondata['Ciudad'] = $r["Ciudad"];
        $jsondata['Celular'] = $r["Celular"];
        $jsondata['Email'] = $r["Email"];
        $jsondata['Programa'] = $r["Programa"];
        $jsondata['Carrera'] = $r["Carrera"];
        $jsondata['Mensaje'] = $r["Mensaje"];
        $jsondata['Created_date'] = $r["Created_date"];

        $jsondata['success'] = true;
        $jsondata['message'] = "recuperado correctamente";
      }
     else
      {
          $jsondata['success'] = false;
          $jsondata['message'] = "Fallo al obtener el registro";
      }
      header('Content-type: application/json; charset=utf-8');
      echo json_encode($jsondata);
    break;
    /* insert  de Servicios */
    case "ins":
      $jsondata = array();

      // Realiza Insert
        $data = array("Nombres"=>$_REQUEST['txtName'], "Cedula"=>$_REQUEST['txtCed'], "Ciudad"=>$_REQUEST['txtCity'],
         "Celular"=>$_REQUEST['txtCelular'],   "Email"=>$_REQUEST['txtEmail'],
         "Programa"=>$_REQUEST['programa'], "Carrera"=>$_REQUEST['carrera'],
            "Mensaje"=>$_REQUEST['txtMsj'], "Origen"=>$_REQUEST['idOrigen'], "Id_medio"=>$_REQUEST['txtId'], "Created_date"=>date("Y-m-d H:i:s")
                  );
      if($contacto->insertData($data))
     {

     	  $h2= "<h2 style=\"margin-top:2px; font-family:Arial_Black_V2; color:#000\">Cordial saludo <br></h2>";
     	  $mensaje = "
     	    <div style=\" background-color:/*#009ba8*/#fff; color:#000; width: 600px;\">
     	        <center><br>".$h2." <hr>
     	            <p style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Un nuevo contacto se ha registrado esta es su información: </p>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Nombre: </label>".$_REQUEST['txtName']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Cédula: </label>".$_REQUEST['txtCed']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Ciudad: </label>".$_REQUEST['txtCity']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">E-mail:</label>".$_REQUEST['txtEmail']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Celular:</label>".$_REQUEST['txtCelular']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Programa:</label>".$_REQUEST['programa']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Carrera:</label>".$_REQUEST['carrera']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Comentario:</label>".$_REQUEST['txtMsj']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Origen:</label>".$_REQUEST['idOrigen']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Id_medio:</label>".$_REQUEST['txtId']." <br>
     	            <label style=\"font-family:Arial_Black_V2; font-size: 18px; color:#000\">Fecha:</label>".date("Y-m-d H:i:s")." <br>

     	            <hr>
     	            <p style=\"font-family:Arial_Black_V2; font-size:15px; color:#000\"> &Eacute;ste correo ha sido enviado autom&aacute;ticamente por favor no lo responda.</p>
     	        </center>
     	    </div>";
     	// Always set content-type when sending HTML email
     	    $headers = "MIME-Version: 1.0" . "\r\n";
     	    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     	    $headers .= 'From: <info@uan.edu.co>' . "\r\n";
     	    $mensaje .= "Enviado el " . date('d/m/Y', time());
     	    $para  = 'contactoscapanasuan@gmail.com'.' ,'; // atención a la coma
     	    $asunto = 'Contacto desde landing page';
     	    mail($para, $asunto, $mensaje, $headers);

      	 $jsondata['success'] = true;
      		$jsondata['message'] = ' Gracias por registrarte '. $_REQUEST['txtName'] . ' pronto nos comunicaremos';
      }
      else
      {
        $jsondata['success'] = false;
        $jsondata['message'] = "Falla al realizar el registro";
      }
      header('Content-type: application/json; charset=utf-8');
      echo json_encode($jsondata);
   break;

    /*crea update de Expereincias */


   	/* Crea delete de usuarios */
   	case "del":
   	  $Id =  $_REQUEST['pId'];
   	  $jsondata = array();
   	  if(ISSET($_POST['pId'])){
   	  	foreach($_POST['pId'] as $id ){
			if($contacto->delData($id))
			{
			  $jsondata['success'] = true;
			  $jsondata['message'] = "Eliminados correctamente";
			}
			else
			{
			 $jsondata['success'] = false;
			 $jsondata['message'] = "Falla al Eliminar los registros";
			}
		}
   	  }



   	  header('Content-type: application/json; charset=utf-8');
   	  echo json_encode($jsondata);
   	break;


    }
?>
