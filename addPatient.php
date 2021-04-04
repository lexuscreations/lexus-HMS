<?php
    require_once './controller/DBConnect.php';
    $db->authLogin("1");
?>

<?php
    $title = "Add Patient";
    include './views/layout/header.php';
?>

<?php
    $addPatientActive = "active";
    include './views/layout/topNavBar.php';
?>



<div class="container bg-dark text-info p-4 rounded" style="box-shadow: 0px 0px 20px 20px #cdc6c6;;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" class="addPatient" id="addPatient" role="form" action="">

            <?php
                include './views/partials/addPatientBasic.php';
            ?>
            
            <?php
                include './views/partials/addPatientMedical.php';
            ?>

                <button type="submit" name="addPatientFormSubBtn" class="btn btn-primary addPatientFormSubBtn fw-bolder">Submit</button>
            </form>
            <div class="alert mt-3 m-1 p-2 rounded addPatientErrorMsgContainer">
                <i class="fas fa-exclamation-triangle"></i> <span class="addPatientErrorMsg"></span>
            </div>
        </div>
    </div>
</div>

<?php
    include './views/layout/footer.php';
?>