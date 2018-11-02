<?php

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Bogota');

if (PHP_SAPI == 'cli')
    die('This example should only be run from a Web Browser');

/** Include PHPExcel*/
require_once 'Classes/PHPExcel.php';
include_once("AnsTek_libs/integracion.inc.php");
include_once("model/contactos.class.php");

    $date1 = $_REQUEST['txtFecha1'];

    // $fecha1 = strtotime ( '+5 hour' , strtotime ($date1));
    // $fecha1 = date( 'Y-m-d H:i:s' , $fecha1 );

    $date2 = $_REQUEST['txtFecha2'];


    if ($date1 != "" AND $date2 == "") {
        $where  = " Where Created_date  LIKE  " . "'%".  $date1 . "%'";
    }elseif ($_REQUEST['txtFecha1'] == ""  and $_REQUEST['txtFecha2'] == "") {
        $where  = " Where Id > 0";
    }else{
        // $where = " Where  Created_date >= ". " '" . $date1. " 00:00:00'". "  and  Created_date <= ". " '" . $date2. " 23:59:00'";

        $where = " Where  Created_date BETWEEN "."'" . $date1. " 00:00:00'". " and  "."'" . $date2. " 23:59:00'";

    }
    $user = new Registro($db);
    $result = $user->selectAll($where);
	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

			// Set document properties
			$objPHPExcel->getProperties()->setCreator("Conjunto Digital")
			                             ->setLastModifiedBy("Developer")
			                             ->setTitle("Office 2007 XLSX Test Document")
			                             ->setSubject("Office 2007 XLSX Test Document")
			                             ->setDescription("Reporte registros campaña admisiones uan.")
			                             ->setKeywords("office 2007 openxml php")
			                             ->setCategory("Test result file");
			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)
			            ->setCellValue('A1', 'Nombres')
			            ->setCellValue('B1', 'Cedula')
			            ->setCellValue('C1', 'Ciudad')
			            ->setCellValue('D1', 'Celular')
			            ->setCellValue('E1', 'Email')
			            ->setCellValue('F1', 'Programa')
			            ->setCellValue('G1', 'Carrera')
			            ->setCellValue('H1', 'Mensaje')
			            ->setCellValue('I1', 'Origen')
			            ->setCellValue('J1', 'Medio')
			            ->setCellValue('K1', 'Fecha');



            if($db->numRows($result) > 0){
                $i=2;
              while ($r = $db->datos($result)) {
                $date = $r['Created_date'];
                $nuevafecha = strtotime ( '-5 hour' , strtotime ($date));
                $nuevafecha = date( 'Y-m-d H:i:s' , $nuevafecha );

                $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue("A$i", $r['Nombres'])
                            ->setCellValue("B$i", $r['Cedula'])
                            ->setCellValue("C$i", $r['Ciudad'])
                            ->setCellValue("D$i", $r['Celular'])
                            ->setCellValue("E$i", $r['Email'])
                            ->setCellValue("F$i", $r['Programa'])
                            ->setCellValue("G$i", $r['Carrera'])
                            ->setCellValue("H$i", $r['Mensaje'])
                            ->setCellValue("I$i", $r['Origen'])
                            ->setCellValue("J$i", $r['Id_medio'])
                            ->setCellValue("K$i", $date);
                            $i++;


                //$r['Id']
              }
            }
            else{
              echo "NO HAY REGISTROS PARA MOSTRAR";
            }

        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Registros_uan');
        $objPHPExcel->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="reporte_contactos_americana.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;



?>