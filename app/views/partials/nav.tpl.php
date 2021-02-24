<body>
    <header>
        <nav>
            <img id="logo" src="../public/assets/images/logo_DoingDone.png">
            <div id="nav-link">
                <a class="nav-link" href="<?= $router->generate('main-home') ?>"><img class="nav-img" src="../public/assets/images/home.png"> Accueil</a>
                <a class="nav-link" href="<?= $router->generate('array-display') ?>"><img class="nav-img" src="../public/assets/images/array.png"> Tableaux</a>
                <div style="float: right;">
                    <?php if( isset( $_SESSION['user'] ) ) : ?>
                        <b class="text-white">Bonjour <?= $_SESSION['user']->getPseudo() ?></b>
                        <br>
                        <a class="text-warning" href="<?= $router->generate( 'main-logout' ) ?>">
                            Déconnexion
                        </a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= $router->generate('login') ?>"><img class="nav-img" src="../public/assets/images/user-shape.png"> Connexion</a>
                        </a>
                    <?php endif; ?>
            </div>
        </nav>
    </header>