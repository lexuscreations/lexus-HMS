<?php

    require_once '../controller/DBConnect.php';

    if(isset($_POST['addPatientFormSubBtn'])){
       
        $returnVal = $db->addPatient($_POST['fname'], $_POST['lname'], $_POST['sex'], $_POST['bed_no'], $_POST['bday'], $_POST['address'], $_POST['city'], $_POST['status'],$_POST['prv_decs'], $_POST['bd_gp'], $_POST['weight'], $_POST['height'],$_POST['mobile']);

        if($returnVal){
            echo TRUE;
        } else {
            echo FALSE;
        }
    }

?>