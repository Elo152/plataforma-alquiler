<?php
session_start();
?>
<header>
    <div class="header-content">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo-home.png" alt="logo-home">
            </a>
        </div>
        <div class="search-bar">
            <form action="" method="get">
                <div class="search-container">
                    <svg class="search-icon" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M14.1922 15.6064C13.0236 16.4816 11.5723 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 11.5723 16.4816 13.0236 15.6064 14.1922L20.707 19.2929C21.0976 19.6834 21.0976 20.3166 20.707 20.7071C20.3165 21.0976 19.6834 21.0976 19.2928 20.7071L14.1922 15.6064ZM15 10C15 12.7614 12.7614 15 10 15C7.23858 15 5 12.7614 5 10C5 7.23858 7.23858 5 10 5C12.7614 5 15 7.23858 15 10Z" fill="rgba(51, 51, 51, 1)" fill-rule="evenodd"></path></svg>
                    <input type="text" id="search" name="search" class="search" placeholder="Buscar productos..." required>
                </div>
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
    <div class="categories-menu">
        <nav>
            <a href="#">Categoría 1</a>
            <a href="#">Categoría 2</a>
            <a href="#">Categoría 3</a>
            <a href="#">Categoría 4</a>
            <a href="#">Categoría 5</a>
            <a href="#">Categoría 6</a>
            <a href="#">Categoría 7</a>
        </nav>
    </div>
</header>
