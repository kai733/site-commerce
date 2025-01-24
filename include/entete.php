<header>
    <div class="banner">
    </div>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="img/logo.png" alt="Logo" class="logo-img">
                PixelPlay
            </a>
            
            <!-- Add hamburger here -->
            <button class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <ul class="nav-links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="panier.php">Panier</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.hamburger').addEventListener('click', function() {
        this.classList.toggle('active');
        document.querySelector('.nav-links').classList.toggle('active');
    });
});
</script>
</body>