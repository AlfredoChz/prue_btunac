<?php
require_once("include/initialize.php");
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) {
	case 'apply' :
        $title="Enviar Postulacion";
		$content='applicationform.php';
		break;
	case 'login' :
        $title="Login";
		$content='login.php';
		break;
	case 'company' :
        $title="EMPRESAS";
		$content='company.php';
		break;
	case 'hiring' :
		$title = isset($_GET['search']) ? 'Hiring in '.$_GET['search'] :"Hiring";
		$content='hirring.php';
		break;
	case 'category' :
        $title='Search for '. $_GET['search'];
		$content='category.php';
		break;
	case 'viewjob' :
        $title="Detalles del Empleo";
		$content='viewjob.php';
		break;
	case 'success' :
        $title="Success";
		$content='success.php';
		break;
	case 'register' :
        $title="Register New Member";
		$content='register.php';
		break;
	case 'Contact' :
        $title='CONTACTANOS';
		$content='Contact.php';
		break;
	case 'About' :
        $title='NOSOTROS';
		$content='About.php';
		break;
	case 'advancesearch' :
        $title='Advance Search';
		$content='advancesearch.php';
		break;

	case 'result' :
        $title='Advance Search';
		$content='advancesearchresult.php';
		break;
	case 'search-company' :
        $title='Search by Company';
		$content='searchbycompany.php';
		break;
	case 'search-function' :
        $title='Search by Function';
		$content='searchbyfunction.php';
		break;
	case 'search-jobtitle' :
        $title='Search by Job Title';
		$content='searchbytitle.php';
		break;
	default :
	    $active_home='active';
	    $title="Home";
		$content ='home.php';
}
require_once("theme/templates.php");
?>
