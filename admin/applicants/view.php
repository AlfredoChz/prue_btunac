<?php 

	global $mydb;

	$red_id = isset($_GET['id']) ? $_GET['id'] : '';

	$jobregistration = New JobRegistration();
	$jobreg = $jobregistration->single_jobregistration($red_id);

	$applicant = new Applicants();
	$appl = $applicant->single_applicant($jobreg->APPLICANTID);

	$jobvacancy = New Jobs();
	$job = $jobvacancy->single_job($jobreg->JOBID);

	$company = new Company();
	$comp = $company->single_company($jobreg->COMPANYID);

	$sql = "SELECT * FROM `tblattachmentfile` WHERE `FILEID`=" .$jobreg->FILEID;
	$mydb->setQuery($sql);
	$attachmentfile = $mydb->loadSingleResult();


?> 
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>

<form action="controller.php?action=approve" method="POST">

	<div class="col-sm-12 content-header" style="">Ver Detalles</div>

	<div class="col-sm-6 content-body" > 

		<p>Detalles del Empleo</p> 

		<h3><?php echo $job->OCCUPATIONTITLE; ?></h3>

		<input type="hidden" name="JOBREGID" value="<?php echo $jobreg->REGISTRATIONID;?>">
		<input type="hidden" name="APPLICANTID" value="<?php echo $appl->APPLICANTID;?>">

		<div class="col-sm-6">

			<ul>

	            <li><i class="fp-ht-bed"></i>Empleados Requeridos: <?php echo $job->REQ_NO_EMPLOYEES; ?></li>
	            <li><i class="fp-ht-food"></i>Salario : <?php echo number_format($job->SALARIES,2);  ?></li>
	            <li><i class="fa fa-sun-"></i>Duracion del Empleo : <?php echo $job->DURATION_EMPLOYEMENT; ?></li>

	        </ul>

		</div> 

		<div class="col-sm-6">

			<ul> 

	            <li><i class="fp-ht-tv"></i>Preferencia de Genero: <?php echo $job->PREFEREDSEX; ?></li>
	            <li><i class="fp-ht-computer"></i>Sector en la Empresa : <?php echo $job->SECTOR_VACANCY; ?></li>

	        </ul>

		</div>

		<div class="col-sm-12">

			<p>Descripcion del Empleo : </p>   
			<p style="margin-left: 15px;"><?php echo $job->JOBDESCRIPTION;?></p>

		</div>

		<div class="col-sm-12"> 

			<p>Experiencia Laboral : </p>
			<p style="margin-left: 15px;"><?php echo $job->QUALIFICATION_WORKEXPERIENCE; ?></p>

		</div>

		<div class="col-sm-12"> 

			<p>Empresa : </p>
			<p style="margin-left: 15px;"><?php echo $comp->COMPANYNAME ; ?></p> 
			<p style="margin-left: 15px;">@ <?php echo $comp->COMPANYADDRESS ; ?></p>

		</div>

	</div>

	<div class="col-sm-6 content-body" >

		<p>Informacion del Postulante</p> 

		<h3> <?php echo $appl->LNAME. ', ' .$appl->FNAME . ' ' . $appl->MNAME;?></h3>

		<ul> 

			<li>Direccion : <?php echo $appl->ADDRESS; ?></li>
			<li>Numero de Contacto: <?php echo $appl->CONTACTNO;?></li>
			<li>Correo Electronico : <?php echo $appl->EMAILADDRESS;?></li>
			<li>Sexo: <?php echo $appl->SEX;?></li>
			<li>Edad : <?php echo $appl->AGE;?></li> 

		</ul>

		<div class="col-sm-12"> 

			<p>Titulo Academico : </p>
			<p style="margin-left: 15px;"><?php echo $appl->DEGREE;?></p>

		</div>


	</div> 

	<div class="col-sm-12 content-footer">

		<p> <i class="fa fa-paperclip"></i> Archivos Adjuntos </p>

		<div class="col-sm-12 slider">

			 <h3>Descargar CV <a href="<?php echo web_root.'applicant/'.$attachmentfile->FILE_LOCATION; ?>">Aqui</a></h3>

		</div> 

		<?php

			if($jobreg->REMARKS=='Pendiente'){

				echo '<div class="col-sm-12">

						<p>Mensaje de Respuesta</p>
						<textarea class="input-group" name="REMARKS">'. $jobreg->REMARKS .'</textarea>

					  </div>


					<div class="col-sm-12  submitbutton "> 

						<button type="submit" name="submit" class="btn btn-primary">Aceptar</button>

					</div> ';


			}else{

				echo '
						
					<div class="col-sm-12">

						<p>Mensaje de Respuesta</p>

						<div style="display:flex;justify-content:space-between;height:80px;">
							
							<p style="height:30px;font-size:1.2em;" class="badge badge-dark">Alumno '.$jobreg->REMARKS.'</p>
							<img src="'.web_root.'img/feliz.png" alt="" width="60px">
			
						</div>

					  </div>

				';


			}

		?>

	</div>

</form>