<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="view/img/logo-home-page.png" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Coaching</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Workshop</a>
                </li>
                <?php if($_SESSION['id']==1){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                <?php }; ?>
            </ul>
        </div>
        <div class="navbar-text" id="navbarNav">
            <ul class="navbar-nav"> 
                <li class="nav-item active">
                    <a class="nav-link" href="#">Login</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</header>