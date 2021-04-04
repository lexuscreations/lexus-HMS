<?php

    require_once '../controller/DBConnect.php';

    if (isset($_POST['searchBtn']) && isset($_POST['choicesSingleDefaul']) && isset($_POST['searchVal'])) {
        $searchVal = $_POST['searchVal'];
        if($_POST['choicesSingleDefaul'] == "BED"){
            $result = $db->searchByBeg($searchVal);
            echo json_encode($result);
        }elseif ($_POST['choicesSingleDefaul'] == "CITY") {
            $result = $db->searchByCity($searchVal);
            echo json_encode($result);
        }
    }
?>