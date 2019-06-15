<?php
require_once("include/initialize.php");
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) {
	case 'apply' :
        $title="Postular";
		$content='applicationform.php';
		break;
	case 'login' :
        $title="Login";
		$content='login.php';
		break;
	case 'company' :
        $title="Empresa";
		$content='company.php';
		break;
	case 'hiring' :
		$title = isset($_GET['search']) ? 'Ofertas en '.$_GET['search'] :"Ofertas";
		$content='hirring.php';
		break;
	case 'category' :
        $title='Buscando en '. $_GET['search'];
		$content='category.php';
		break;
	case 'viewjob' :
        $title="Detalles del Trabajo";
		$content='viewjob.php';
		break;
	case 'success' :
        $title="Success";
		$content='success.php';
		break;
	case 'register' :
        $title="Registrate";
		$content='register.php';
		break;
	case 'Contact' :
        $title='Contactanos';
		$content='Contact.php';
		break;
	case 'About' :
        $title='Acerca de Nosotros';
		$content='About.php';
		break;
	case 'advancesearch' :
        $title='Busqueda Avanzada';
		$content='advancesearch.php';
		break; 

	case 'result' :
        $title='Busqueda Avanzada';
		$content='advancesearchresult.php';
		break;
	case 'search-company' :
        $title='Busqueda por Empresa';
		$content='searchbycompany.php';
		break;
	case 'search-function' :
        $title='Busqueda por Profesion';
		$content='searchbyfunction.php';
		break;
	case 'search-jobtitle' :
        $title='Busqueda por Especialidad';
		$content='searchbytitle.php';
		break;
	default :
	    $active_home='active';
	    $title="Home";
		$content ='home.php';
}
require_once("theme/templates.php");
?>
