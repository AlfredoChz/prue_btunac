<?php
	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 



       	 <div class="col-lg-12">
            <h1 class="page-header">Lista de Usuarios  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i>Agregar Usuario</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 --> 
   		 	<div class="col-lg-12"> 
				<table id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0"> 
				  <thead>
				  	<tr>
				  		<th>Id Usuario</th>
				  		<th>Nombres</th>
				  		<th>Usuario</th>
				  		<th>Tipo de Usuario</th>
				  		<th>Facultad</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 

				  		$mydb->setQuery("SELECT u.USERID,t.TYPEUSERID,u.FULLNAME,u.USERNAME,f.FACULTADNAME,t.TYPEUSERNAME FROM tbltypeuser as t INNER JOIN tblusers as u ON t.TYPEUSERID=u.TYPEUSERID INNER JOIN tblemployees as e ON u.USERID=e.USERID INNER JOIN tblfacultad as f ON e.FACULTADID=f.FACULTADID  WHERE t.TYPEUSERID!=3");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {

					  		echo '<tr>';
					  	
						  		echo '<td>' . $result->USERID.'</a></td>';
						  		echo '<td>' . $result->FULLNAME.'</a></td>';
						  		echo '<td>'. $result->USERNAME.'</td>';
						  		echo '<td>'. $result->TYPEUSERNAME.'</td>';
						  		echo '<td>'. $result->FACULTADNAME	.'</td>';

						  		if($result->USERID==$_SESSION['ADMIN_USERID'] || $result->TYPEUSERID=='1') {

						  			$active = "Disabled";

						  		}else{

						  			$active = "";

						  		}

						  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->USERID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
						  					 <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-xs" '.$active.'><span class="fa fa-trash-o fw-fa"></span> </a>
						  					 </td>';

					  		echo '</tr>';

				  		} 
				  	?>
				  </tbody>
					
				</table>  
			</div> 
 
