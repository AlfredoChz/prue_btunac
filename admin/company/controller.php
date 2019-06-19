
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){

 // `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`
		if ( $_POST['COMPANYNAME'] == "" || $_POST['COMPANYADDRESS'] == "" || $_POST['COMPANYCONTACT'] == "" || $_POST['COMPANYRUC'] == "" || $_POST['COMPANYWEB'] == "" || $_POST['COMPANYDESCRIPCION'] == "" || $_POST['COMPANYEMAIL'] == "" || $_POST['COMPANYEMAILCV'] == "" || $_POST['COMPANYSTATUS'] == "") {
			$messageStats = false;
			message("Todo el campo es obligatorio!","error");
			redirect('index.php?view=add');
		}else{	
			$company = New Company();
			$company->COMPANYNAME		= $_POST['COMPANYNAME'];
			$company->COMPANYADDRESS	= $_POST['COMPANYADDRESS'];
			$company->COMPANYCONTACT	= $_POST['COMPANYCONTACT'];
			$company->COMPANYRUC	= $_POST['COMPANYRUC'];
			$company->COMPANYWEB	= $_POST['COMPANYWEB'];
			$company->COMPANYDESCRIPCION	= $_POST['COMPANYDESCRIPCION'];
			$company->COMPANYEMAIL	= $_POST['COMPANYEMAIL'];
			$company->COMPANYEMAILCV	= $_POST['COMPANYEMAILCV'];
			$company->COMPANYSTATUS	= $_POST['COMPANYSTATUS'];

			// $company->COMPANYMISSION	= $_POST['COMPANYMISSION'];
			$company->create();

			message("Nueva empresa creado exitosamente!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
		if(isset($_POST['save'])){

			$company = New Company();
			$company->COMPANYNAME		= $_POST['COMPANYNAME'];
			$company->COMPANYADDRESS	= $_POST['COMPANYADDRESS'];
			$company->COMPANYCONTACT	= $_POST['COMPANYCONTACT'];
			$company->COMPANYRUC	= $_POST['COMPANYRUC'];
			$company->COMPANYWEB	= $_POST['COMPANYWEB'];
			$company->COMPANYDESCRIPCION	= $_POST['COMPANYDESCRIPCION'];
			$company->COMPANYEMAIL	= $_POST['COMPANYEMAIL'];
			$company->COMPANYEMAILCV	= $_POST['COMPANYEMAILCV'];
			$company->COMPANYSTATUS	= $_POST['COMPANYSTATUS'];
			// $company->COMPANYMISSION	= $_POST['COMPANYMISSION'];
			$company->update($_POST['COMPANYID']);

			message("Empresa ha sido actualizado!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$company = New Company();
			$company->delete($id);

			message("Empresa ha sido eliminado!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>