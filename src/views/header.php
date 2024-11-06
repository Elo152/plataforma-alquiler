<?php
session_start();
?>
<header>
    <div class="header-content">
        <div class="logo">
        <a href="index.php"><h1>Rentify</h1></a>
        </div>

        <div class="search-bar">
            <form action="" method="get">
                <input type="text" id="search" name="search" placeholder="Buscar productos..." required>
            </form>
        </div>

        <div class="login">
            <?php
            if (isset($_SESSION['usuario'])) {
            } else {
                echo '<a href="" class="button">Regístrate o inicia sesión</a>';
            }
            ?>
        </div>

    </div>
</header>