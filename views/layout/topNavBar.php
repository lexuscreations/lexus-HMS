<nav class="navBar">
    <div class="navSecCon">
        <div class="navbar-head">
            <button type="button" class="navbar-toggle-trigger" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navBar-body">
            <div class="navbar-collapse-target">
                <ul class="navLinkContainerUl">
                    <li class="<?php echo ($homeActive) ? "active" : '' ?>">
                        <a href="./home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="<?php echo ($addPatientActive) ? "active" : '' ?>">
                        <a href="./addPatient.php"><i class="fas fa-file-medical"></i> Add Patient</a>
                    </li>
                    <li class="<?php echo ($aboutActive) ? "active" : '' ?>">
                        <a href="./about.php"><i class="fas fa-users"></i> About</a>
                    </li>
                    <li>
                        <a href="./logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>