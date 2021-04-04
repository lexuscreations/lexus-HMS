<?php
    require_once './controller/DBConnect.php';
    $db->authLogin("1");
?>

<?php
    $title="ABOUT";
    include './views/layout/header.php';
?>

<?php
    $aboutActive = true;
    include './views/layout/topNavBar.php';
?>

<div class="container aboutCon">
    <form>
        <div class="mb-3">
            <div style="z-index: -100;" class="alert alert-primary shadow rounded p-2 m-2 text-warning h3 text-break" role="alert">
                (OPNE) - > "./docs/authorNotes/README.md"
            </div>
        </div>
    </form>
</div>
<?php
    include './views/layout/footer.php';
?>
