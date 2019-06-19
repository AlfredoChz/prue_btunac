<?php 
	  if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     } 
?>
	<div class="row">
       	 <div class="col-lg-12">
            <h1 class="page-header">Lista de Empresas  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Añádir Empresas </a>  </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  	
			     <div class="table-responsive">					
				<table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<!-- <th>No.</th> -->
				  		<th>Nombre</th> 
				  		<th>Direccion</th> 
				  		<th>Numero</th> 
				  		<th>RUC</th>
				  		<th>Pagina web</th> 
				  		<th>Descripcion</th> 
				  		<th>Email</th>
				  		<th>Email CV</th>    
				  		<th>Estado</th>   
				  		 <th width="10%" align="center">Action</th>
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM `tblcompany`");
				  		$cur = $mydb->loadResultList(); 
						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>
				  		//      <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CATEGORYID. '"/>
				  		// 		' . $result->CATEGORIES.'</a></td>';
				  			echo '<td>' . $result->COMPANYNAME.'</td>';
				  			echo '<td>' . $result->COMPANYADDRESS.'</td>';
				  			echo '<td>' . $result->COMPANYCONTACT.'</td>';
				  			echo '<td>' . $result->COMPANYRUC.'</td>';
				  			echo '<td>' . $result->COMPANYWEB.'</td>';
							echo '<td>' . $result->COMPANYDESCRIPCION.'</td>';
				     		echo '<td>' . $result->COMPANYEMAIL.'</td>';
				  			echo '<td>' . $result->COMPANYEMAILCV.'</td>';
  							echo '<td>' . $result->COMPANYSTATUS.'</td>';


				  		echo '<td align="center"><a title="Edit" href="index.php?view=edit&id='.$result->COMPANYID.'" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
				  		     <a title="Delete" href="controller.php?action=delete&id='.$result->COMPANYID.'" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>';
				  		// echo '<td></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
						<div class="btn-group">
				 <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
					<?php
					if($_SESSION['ADMIN_ROLE']=='Administrator'){
					// echo '<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button'
					; }?>
				</div>
			
			
				</form>
	
 <div class="table-responsive">	 