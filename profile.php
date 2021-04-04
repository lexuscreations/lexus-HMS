<?php
    require_once './controller/DBConnect.php';
    $db->authLogin("1");
?>

<?php
    $title="ProfileNo. ".$_GET['id'];
    include './views/layout/header.php';
?>

<?php
    include './views/layout/topNavBar.php';
?>

<?php
    $result = $db->getPatientsProfileById($_GET['id']);
?>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-5">
            <div class="border border-light border-2 shadow rounded p-2">
                    <table class="table-condensed table table-dark table-striped caption-top">
                    <caption><h5 class="text-dark"><i class="fas fa-notes-medical"></i> Basic Info</h5></caption>
                        <tr>
                            <td><label>ID</label></td>
                            <td><?= $result[0]['id']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Name</label></td>
                            <td><?= $result[0]['fname']." ".$result[0]['lname']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><?= $result[0]['sex']; ?></td>
                        </tr>
                        <tr>
                            <td><label>D.O.B</label></td>
                            <td><?= $result[0]['bday']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Bed No.</label></td>
                            <td><?= $result[0]['bed_no']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Address</label></td>
                            <td><?= wordwrap($result[0]['address'], 25, '<br>'); ?></td>
                        </tr>
                        <tr>
                            <td><label>City</label></td>
                            <td><?= $result[0]['city']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Admit Date</label></td>
                            <td><?= $result[0]['admit_date']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Status</label></td>
                            <td><?= $result[0]['status']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Contact</label></td>
                            <td><?= $result[0]['mobile']; ?></td>
                        </tr>
                    </table>
            </div>
        </div>
        <div class="col-md-5">
            <div class="border border-light border-2 shadow rounded p-2">
                    <table aria-describedby="tabDesc" class="table table-condensed table-dark table-striped caption-top">
                    <caption><h5 class="text-dark"><i class="fas fa-file-medical-alt"></i> Medical Info</h5></caption>
                        <tr>
                            <td><label>Previous Diseases</label></td>
                            <td><?= $result[0]['prv_decs']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Blood Group</label></td>
                            <td><?= $result[0]['bd_gp']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Department Last</label></td>
                            <td><?= $result[0]['lst_dprt']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Weight</label></td>
                            <td><?= $result[0]['weight']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Height</label></td>
                            <td><?= $result[0]['height']; ?></td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>

<?php
    include './views/layout/footer.php';
?>
