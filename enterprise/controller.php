<?php

require_once ("../include/initialize.php");



if (!isset($_SESSION['COMPANYID'])){
    redirect(web_root."index.php");
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
        // `COMPANYID`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`
        $servername = "localhost";
        $username = "root";
        $password = "prosor";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=unac_bdt", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        if ( $_POST['COMPANYID'] == "None") {
            $messageStats = false;
            message("All field is required!","error");
            redirect('index.php?view=add');
        }else{
            $operation = $conn->prepare("insert into tbljob (COMPANYID, CATEGORY, OCCUPATIONTITLE, REQ_NO_EMPLOYEES, SALARIES, QUALIFICATION_WORKEXPERIENCE,
                    JOBDESCRIPTION, PREFEREDSEX, JOBSTATUS, DATEPOSTED, DURATION_VACANCY)
                    values (:companyid,:category,:ocupationtitle,:req_no_employees,:salary,:qual_workexperience,
                    :jobdescription,:preferedsex,:jobstatus,current_date,:duration )");
            $data =[
                'companyid' =>$_POST['COMPANYID'],
                'category'=>$_POST['CATEGORY'],
                'ocupationtitle'=>$_POST['OCCUPATIONTITLE'],
                'req_no_employees'=>$_POST['REQ_NO_EMPLOYEES'],
                'salary'=>$_POST['SALARIES'],
                'qual_workexperience'=>$_POST['QUALIFICATION_WORKEXPERIENCE'],
                'jobdescription'=>$_POST['JOBDESCRIPTION'],
                'preferedsex'=>$_POST['PREFEREDSEX'],
                'duration'=>$_POST['DURATION_EMPLOYEMENT'],
                'jobstatus'=>"FREE"
            ];

            $operation->execute($data);
            if($operation)
            {

                message("New Job Vacancy created successfully!", "success");
                redirect(web_root."index.php");
            }
            else{
                message("Revise los datos ingresados","error");
                redirect(web_root."index.php?q=addJob");

            }

            $conn=null;
        }
    }

}

function doEdit(){
    if(isset($_POST['save'])){
        if ( $_POST['COMPANYID'] == "None") {
            $messageStats = false;
            message("All field is required!","error");
            redirect('index.php?view=add');
        }else{
            $job = New Jobs();
            $job->COMPANYID							= $_POST['COMPANYID'];
            $job->CATEGORY							= $_POST['CATEGORY'];
            $job->OCCUPATIONTITLE					= $_POST['OCCUPATIONTITLE'];
            $job->REQ_NO_EMPLOYEES					= $_POST['REQ_NO_EMPLOYEES'];
            $job->SALARIES							= $_POST['SALARIES'];
            $job->DURATION_EMPLOYEMENT				= $_POST['DURATION_EMPLOYEMENT'];
            $job->QUALIFICATION_WORKEXPERIENCE		= $_POST['QUALIFICATION_WORKEXPERIENCE'];
            $job->JOBDESCRIPTION					= $_POST['JOBDESCRIPTION'];
            $job->PREFEREDSEX						= $_POST['PREFEREDSEX'];
            $job->SECTOR_VACANCY					= $_POST['SECTOR_VACANCY'];
            $job->update($_POST['JOBID']);

            message("Job Vacancy has been updated!", "success");
            redirect("index.php");
        }
    }

}

/*
function doDelete(){
    // if (isset($_POST['selector'])==''){
    // message("Select a records first before you delete!","error");
    // redirect('index.php');
    // }else{

    $id = $_GET['id'];

    $job = New Jobs();
    $job->delete($id);

    message("Company has been Deleted!","info");
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
*/