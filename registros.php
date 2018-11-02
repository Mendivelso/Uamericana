<?php
    include_once("AnsTek_libs/integracion.inc.php");
    include_once("model/contactos.class.php");
    $user = new Registro($db);
    $wh = " WHERE Id > 0 ORDER BY Id DESC ";

    $result = $user->selectAll($wh);
	if(empty($_GET)){
		header('Location: error.php');
	}else{

	}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administración Uamericana</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.responsive.css" rel="stylesheet">
    <link href="css/dataTables.tableTools.min.css" rel="stylesheet">

    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="css/table.css" rel="stylesheet">
    <!-- Date Piker -->
    <link href="assets/datepicker/jquery-ui.css" rel="stylesheet">
    <link href="front/css/sweetalert.css" rel="stylesheet">
    <link href="http://americana.edu.co/medellin/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />


</head>

<body style="background: #fff;">

    <div id="">

        <div id="" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; background: #000;">
			<a href="#" class="logo"><img src="front/images/logo.png" width="150"></span></a>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message" style="color: #fff">Corporación Universitaria Americana </span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="table_data_tables.html#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="table_data_tables.html#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="index.php">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-md-4 col-lg-3">
                    <h2>Registros Corporación Universitaria Americana</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Registros</a>
                        </li>
                        <li class="active">
                            <strong>Activos</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-md-8 col-lg-9">
		            <form method="post" action="descarga_excel.php" style="position: relative; top: 25px;">
						<input type="text" name="txtFecha1" id="txtFecha1" value="" class="date" placeholder="Fecha Numero1">
		        		<input type="text" name="txtFecha2" id="txtFecha2" value="" class="date" placeholder="Fecha Numero2">
						<!-- <a href="reporte_excel.php" target="black" title="descargar" class="btn btn-success">Descargar</a> -->
						<button type="submit" class="btn btn-info">Descargar</button>
		            	<a href="#" title="Contar" class="btn btn-info">Contactos Registrados: <?php $rows = $user->Count(); if($db->numRows($rows) > 0){ $r = $db->datos($rows);echo "<strong>". $r['num']. "</strong>";}else{echo "NO HAY REGISTROS PARA MOSTRAR";}?></a>
		            	<button type="button" class="btn btn-danger" onclick="DelRegistro();">Eliminar</button>
		            </form>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                    	<h5></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">Config option 1</a>
                                </li>
                                <li><a href="table_data_tables.html#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" id="editable">
                    <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Cuidad</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th width="10%">Mensaje</th>
                        <th>Origen</th>
                        <th>Medio</th>
                        <th width="10%">Fecha</th>
                    </tr>
                    </thead>
                    	 <tbody>
                    	    <?php
                    	    if($db->numRows($result) > 0){
                    	      while ($r = $db->datos($result)) {
                    	        $date = $r['Created_date'];
                    	        $nuevafecha = strtotime ( '-5 hour' , strtotime ($date));
                    	        $nuevafecha = date( 'Y-m-d H:i:s' , $nuevafecha );
                    	        $valStatus = ($r['Status'] == 1) ? "<img src='../../img/edo_ok.png' alt='Activo'>" : "<img src='../../img/edo_nok.png' alt='Inactivo'>";
                    	        echo "<tr>";
                    	        echo "<td>
                    	                <center>
                    						<input type=\"checkbox\" name=\"IdsRegistros[]\" value='".$r['Id']."' class =\"delete_student\">
                    	                </center>
                    	              </td>";
                    	        echo "<td>" . $r['Nombres']. "</td>";
                    	        echo "<td>" . $r['Cedula'] . "</td>";
                    	        echo "<td>" . $r['Ciudad'] . "</td>";
                    	        echo "<td>" . $r['Celular'] . "</td>";
                    	        echo "<td>" . $r['Email'] . "</td>";
                    	        echo "<td>" . $r['Programa'] . "</td>";
                    	        echo "<td>" . $r['Carrera'] . "</td>";
                    	        echo "<td>" . $r['Mensaje'] . "</td>";
                    	        echo "<td>" . $r['Origen'] . "</td>";
                    	        echo "<td>" . $r['Id_medio'] . "</td>";
                    	        echo "<td>" . $date . "</td>";
                    	        echo "</tr>";

                    	      }
                    	    }
                    	    else{
                    	      echo "NO HAY REGISTROS PARA MOSTRAR";
                    	    }
                    	    ?>
                    	</tbody>
                    <tfoot>
                    <tr>
                       <th>Acciones</th>
                       <th>Nombre</th>
                       <th>Cédula</th>
                       <th>Cuidad</th>
                       <th>Celular</th>
                       <th>Email</th>
                       <th>Facultad</th>
                       <th>Carrera</th>
                       <th width="10%">Mensaje</th>
                       <th>Origen</th>
                       <th>Medio</th>
                       <th width="10%">Fecha</th>
                    </tr>
                    </tfoot>
                    </table>

                    </div>

                </div>
            </div>
            </div>

        </div>
        <!-- <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>Copyright</strong> Conjunto Digital &copy; 2018
            </div>
        </div> -->

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="front/js/sweetalert.min.js"></script>
    <link href="assets/datepicker/jquery-ui.min.js" rel="stylesheet">


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $("#new_User").click(function(){
              $("#Modal_Usuarios").modal({keyboard: true});
            });
            // $('#editable').DataTable({

            // });

            $('#editable').dataTable({
                responsive: true,
                // "pageLength": 50,
                "sSearch":"Buscar:",
                "pagingType": "simple_numbers",
                 "lengthMenu": [[10, 25, 50, 100,], [10, 25, 50, 100, "All"]],
                language: {
                "lengthMenu": "Ver _MENU_ Registros por Página",
                "zeroRecords": "No se encontró información",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros para mostrar",
                "paginate": {
                  "previous": "<",
                  "next": ">"
                },

                "search": "Buscar Registros: ",
                "search": "Buscar Registros: "
              }

            });

        });

        function DelRegistro(Id){
          /* Realiza conexión con el servidor */
          var id = [];

          $('.delete_student:checked').each(function(i){
          		id[i] = $(this).val();
          	});
          if(id.length == 0){
          		// alert("No hay registros seleccionados para eliminar");
          		swal("Error", "No hay registros seleccionados para eliminar", "error");
      		}else{
      			// if (!confirm("Esta seguro de ElIMINAR los registros seleccionados")) {
		       //      return;
		       //   }

		       swal({
		         title: "Eliminar Registros",
		         text: "Esta seguro de eliminar los registros",
		         type: "warning",
		         showCancelButton: true,
		         confirmButtonClass: 'btn-danger',
		         cancelButtonText: 'Cancelar',
		         confirmButtonText: 'Eliminar',
		         closeOnConfirm: false,
		         closeOnCancel: false

		       },
		       function(isConfirm){
		       	if (isConfirm){
		       		$.ajax({
		       		  data: {"accion":"del", "pId":id},
		       		  type: "POST",
		       		  datatype: "json",
		       		  url: "controller/contactosController.php",
		       		})
		       		.done(function(data){
		       		   swal({title: "Deleted!",
		       		         text: data.message,
		       		         type: "success"
		       		   },
		       		   function(isConfirm){document.location.href = "registros.php?v=ok";}
		       		   );

		       		})
		       		.fail(function(){
		       		    alert("Ha ocurrido un problema");
		       		});

		       	} else {
              		swal({title: "Cancelado!",
              		      text: "Your imaginary file has been deleted.",
              		      type: "error"
              		});
            	}


		       });

      		}
        }


        $( function() {

          $( "#txtFecha1" ).datepicker({
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Do", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ],
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            minDate: "",
            maxDate: ""
          });

          $( "#txtFecha2" ).datepicker({
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Do", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ],
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            minDate: "",
            maxDate: "",

          });

        } );


    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
    .date{height: 33px; position: relative;top: 2px;padding: 6px 12px;border: 1px solid #ccc;    border-radius: 10px;}
    a.logo {
        font-size: 22px;
        font-weight: 300;
        color: #fed189;
        margin-top: 15px;
        text-transform: uppercase;
        position: relative;
        left: 25px;
        top: 15px;
    }
    .lite {
    color: #00a0df !important;
}
</style>
</body>

</html>
