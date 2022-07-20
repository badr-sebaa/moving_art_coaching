<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logo-home-page.png" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Coaching</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="workshop.php">Workshop</a>
                </li>
                <?php if($_SESSION['id']==1){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                <?php }; ?>
            </ul>
        </div>
        <div class="navbar-text" id="navbarNav">
            
                <ul class="navbar-nav"> 
                    <?php if($_SESSION['id'] == null){?>

                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                    <?php }else{ ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="profil.php">Profil</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="../controler/disconnexion.php">Disconnect</a>
                            </li>
                    <?php } ; ?>
                </ul>
            
            
        </div>
    </nav>
</header>