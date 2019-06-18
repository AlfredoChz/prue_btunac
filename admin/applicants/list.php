<?php

	if(!isset($_SESSION['ADMIN_USERID'])){

      	redirect(web_root."admin/index.php");

    }

?> 
	<div class="row">
    <div class="col-lg-12">

        <h1 class="page-header">Lista de Postulantes de la UNAC   </h1>

       	</div>

   		</div>
                
 
			<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
				<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

					<thead>

						<tr>

							<th>Nombre del Postulante</th>
							<th>Oferta de Empleo</th>
							<th>Empresa</th>
							<th>Fecha de Postulacion</th> 
							<th>Observaciones</th>
							<th width="14%" >Accion</th> 

						</tr>

					</thead> 

					<tbody>
							  	<?php   
							  		
							  		$mydb->setQuery("SELECT * FROM `tblcompany` c  , `tbljobregistration` j, `tbljob` j2, `tblapplicants` a WHERE c.`COMPANYID`=j.`COMPANYID` AND  j.`JOBID`=j2.`JOBID` AND j.`APPLICANTID`=a.`APPLICANTID` ");

							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 

								  		echo '<tr>';
								  		
									  		echo '<td>'. $result->LNAME .' ' . $result->MNAME . ' '
									  		. $result->FNAME .'</td>';
									  		echo '<td>' . $result->OCCUPATIONTITLE.'</a></td>';
									  		echo '<td>' . $result->COMPANYNAME.'</a></td>'; 
									  		echo '<td>' . $result->REGISTRATIONDATE.'</td>';
									  		echo '<td>' . $result->REMARKS.'</td>';  

							  				echo '<td align="center" >    
							  		             <a title="View" href="index.php?view=view&id='.$result->REGISTRATIONID.'"  class="btn btn-info btn-xs  ">

							  		             	<span class="fa fa-info fw-fa"></span> Ver
							  		             </a> 

							  		             <a title="Remove" href="index.php?view=delete&id='.$result->REGISTRATIONID.'"  class="btn btn-danger btn-xs  ">
							  		             	<span class="fa fa-trash-o fw-fa"></span> Eliminar
							  		             </a> 

							  					 </td>';

								  		echo '</tr>';

							  		} 

							  	?>

					</tbody>
								
				</table>
 	 
			</form>
       
                 
 