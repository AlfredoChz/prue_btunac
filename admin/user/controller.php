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

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){

		global $mydb;
		global $mydbuser;

		if(isset($_POST['save'])){

			if ($_POST['U_USERNAME'] == "" OR $_POST['U_PASS'] == "") {

				$messageStats = false;
				message("All field is required!","error");
				redirect('index.php?view=add');

			}else{	

				$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

				$age = date_diff(date_create($birthdate),date_create('today'))->y;

				@$datehired = date_format(date_create($_POST['EMP_HIREDDATE']),'Y-m-d');

				$user = new User();

				$user->FULLNAME 		= $_POST['FNAME'];
				$user->USERNAME			= $_POST['U_USERNAME'];
				$user->PASS				=sha1($_POST['U_PASS']);
				$user->TYPEUSERID		=  $_POST['U_ROLE'];
				
				$user->create();

				$emp = new Employee(); 

				//$emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
				$emp->FNAME				= $_POST['FNAME']; 
				$emp->LNAME				= $_POST['LNAME'];
				$emp->MNAME 	   		= $_POST['MNAME'];
				$emp->ADDRESS			= $_POST['ADDRESS'];  
				$emp->BIRTHDATE	 		= $birthdate;
				$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];  
				$emp->AGE			    = $age;
				$emp->SEX 				= $_POST['optionsRadios']; 
				$emp->TELNO				= $_POST['TELNO'];
				$emp->CIVILSTATUS		= $_POST['CIVILSTATUS']; 
				$emp->POSITION			= trim($_POST['POSITION']);
				$emp->EMP_EMAILADDRESS	= $_POST['EMP_EMAILADDRESS'];
				$emp->USERID			= $user->find_ultimouser();
				$emp->DATEHIRED			=  @$datehired;
				$emp->COMPANYID			= $_POST['COMPANYID'];
				$emp->FACULTADID 		=$_POST['FACULTADID'];

				$emp->create(); 

				//$autonum = New Autonumber(); 
				//$autonum->auto_update('userid');

				message("The account [". $_POST['U_USERNAME'] ."] created successfully!", "success");
				redirect("index.php");
				
			}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

				$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

				$age = date_diff(date_create($birthdate),date_create('today'))->y;

				@$datehired = date_format(date_create($_POST['EMP_HIREDDATE']),'Y-m-d');

				$user = new User();

				$user->FULLNAME 		= $_POST['FNAME'];
				$user->USERNAME			= $_POST['U_USERNAME'];
				$user->PASS				=sha1($_POST['U_PASS']);
				$user->TYPEUSERID		=  $_POST['U_ROLE'];
				
				$user->update($_POST['USERID']);

				$emp = new Employee(); 

				//$emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
				$emp->FNAME				= $_POST['FNAME']; 
				$emp->LNAME				= $_POST['LNAME'];
				$emp->MNAME 	   		= $_POST['MNAME'];
				$emp->ADDRESS			= $_POST['ADDRESS'];  
				$emp->BIRTHDATE	 		= $birthdate;
				$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];  
				$emp->AGE			    = $age;
				$emp->SEX 				= $_POST['optionsRadios']; 
				$emp->TELNO				= $_POST['TELNO'];
				$emp->CIVILSTATUS		= $_POST['CIVILSTATUS']; 
				$emp->POSITION			= trim($_POST['POSITION']);
				$emp->EMP_EMAILADDRESS	= $_POST['EMP_EMAILADDRESS'];
				$emp->DATEHIRED			=  @$datehired;
				$emp->COMPANYID			= $_POST['COMPANYID'];
				$emp->FACULTADID 		=$_POST['FACULTADID'];

				$emp->update2($_POST['USERID']); 

			if (isset($_GET['view'])) {
				# code...
				message("Perfil ha sido actualizado!", "success");
				redirect("index.php?view=view");
			}else{ 
				message("[". $_POST['U_USERNAME'] ."] has been updated!", "success");
				redirect("index.php");
			}
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$user = New User();
		// 	$user->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$emp=new Employee();
				$emp->delete2($id);

				$user = New User();
	 		 	$user->delete($id);

			 
			message("Usuario ha sido borrado!","info");
			redirect('index.php');
		// }
		// }

		
	}

	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
			}else{
					//uploading the file
					move_uploaded_file($temp,"photos/" . $myfile);
		 	
					 

						$user = New User();
						$user->PICLOCATION 			= $location;
						$user->update($_SESSION['ADMIN_USERID']);
						redirect("index.php?view=view");
						 
							
					}
			}
			 
		}
 
?>