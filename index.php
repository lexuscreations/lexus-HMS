<?php
    require_once './controller/DBConnect.php';
    $db->authLogin(1);
?>

<?php
    $title="Login";
    include './views/layout/header.php';
?>

<div class="container">
    <div class="cusBgIndex"></div>
    <div class="cusCenter">
        <div class="card">
            <div class="card-body">
                <div class="cusCardLogo">
                    <i class="fas fa-database text-info"></i> <span> LHMS - Login</span>
                </div>
                <form class="form form-vertical" id="loginForm" role="form" method="POST" action="">
                    <div class="form-group m-2 p-2 d-flex justify-content-center align-items-center">
                        <label for="username" class="m-2"><i class="fas fa-user text-info"></i></label>
                        <input id="username" autocomplete="off" type="text" class="form-control loginUsername" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group m-1 p-2 d-flex justify-content-center align-items-center">
                        <label for="password" class="m-2"><i class="fas fa-key text-info"></i></label>
                        <input id="password" type="password" required="true" class="form-control loginPassword" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn m-1 p-2 d-flex justify-content-center align-items-center">
                        <button type="submit" name="loginBtn" class="btn btn-primary loginBtnindexPage btn-sm m-1 fw-bold p-2 text-light"><i class="fas fa-sign-in-alt"></i> Login</button>
                        <a href="" class="btn btn-sm btn-warning m-1 fw-bold p-2 text-secondary"><i class="fas fa-user-plus"></i> SignUp</a>
                    </div>
                    <div class="alert-danger m-1 p-2 rounded loginErrorMsgContainer">
                        <i class="fas fa-exclamation-triangle"></i> <span class="loginErrorMsg"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include './views/layout/footer.php';
?>
