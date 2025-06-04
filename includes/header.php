<header>
    <?php
    $currentUser = $currentUser ?? false;
    ?>

    <a href="/" class="logo">Blog</a>
    <ul class="header-menu">
        <?php if ($currentUser): ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
                <a href="/form-article.php">Écrire un article</a>
            </li>
            <li>
                <a href="/auth-logout.php">Déconnexion</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/profil.php' ? 'active' : '' ?>>
                <a href="/profil.php">Mon profil</a>
            </li>
        <?php else: ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-register.php' ? 'active' : '' ?>>
                <a href="/auth-register.php">Inscription</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-login.php' ? 'active' : '' ?>>
                <a href="/auth-login.php">Connexion</a>
            </li>
        <?php endif; ?>
    </ul>
</header>