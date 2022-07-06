<section class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand m-0 text-center" style="width: 33%" href="index.php"><?php echo $site_name ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto me-auto w-50" role="search">
                    <input class="form-control me-2 rounded-10" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="las la-search"></i></button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-50 justify-content-center" style="font-size: 1.5rem">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lar la-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if(isset($_SESSION['username'])){
                                echo '
                            <li><p class="text-center"><small>Logged in as '.$_SESSION['username'].'</small></p></li>
                            <li><a class="dropdown-item" href="profile.php">My Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="core/form/logout.php"><i class="las la-sign-out-alt"></i> Logout</a></li>';
                            } else {
                                echo '
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="las la-shopping-cart"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">View Cart</a></li>
                            <!--                            <li><hr class="dropdown-divider"></li>-->
                            <!--                            <li><a class="dropdown-item" href="#">Check out</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<?php
include "toast.php";
?>