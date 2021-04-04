<?php
    require_once './controller/DBConnect.php';
    $db->authLogin("1");
?>

<?php
    $title="HOME";
    include './views/layout/header.php';
?>

<?php
    $homeActive = true;
    include './views/layout/topNavBar.php';
?>

<div class="container homeCon">

    <div class="cusBgHome"></div>

    <div class="searchSec">
        <div>
            <h1 class="text-light">Search Patient Details</h1>
        </div>
        <div>
            <form class="form-horizontal" id="homeForm" method="post" action="">
                <div class="inner-form">
                    <div class="input-field first-wrap">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul" class="choices-single-defaul homeSelect">
                                <option value="BED">BED NO.</option>
                                <option value="CITY">CITY</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field second-wrap">
                        <input id="search" class="homeSearch" type="text" name="searchVal" placeholder="Search" />
                    </div>
                    <div class="input-field third-wrap">
                        <button class="btn-search homeSearchBtn" name="searchBtn"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="text-info">
        <div class="hatana-Nahi-Reason-H">
            <label id="tabDesc">Total Result Found: </label><span class="totResltCunt"> 0</span>
            <div style="overflow-x: auto;">
                <table aria-describedby="tabDesc" class="table text-info">
                    <thead>
                        <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Status</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Bed no.</th>
                        </tr>
                    </thead>
                    <tbody class="homeTableDataRow">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    include './views/layout/footer.php';
?>
