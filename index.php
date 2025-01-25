<?php
// Ceci est la page principale du magasin d'accessoires de jeu
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - PixelPlay</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'include/entete.php'; ?>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue chez PixelPlay</h1>
                <p>Découvrez les meilleurs accessoires de jeu pour améliorer votre expérience.</p>
                <a href="#featured-products" class="btn">Voir les produits à la une</a>
                <img src="img/fleche.png" alt="fleche">
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="feature-item">
                <img src="img/qualite.png" alt="Qualité">
                <h3>Accessoires de qualité</h3>
                <p>Des claviers, souris, casques, manettes et plus encore, spécialement sélectionnés pour les gamers exigeants.</p>
            </div>
            <div class="feature-item">
                <img src="img/imanette.png" alt="Variété">
                <h3>Des produits pour tous les joueurs</h3>
                <p>Que vous soyez joueur occasionnel ou professionnel, nous avons ce qu'il vous faut.</p>
            </div>
            <div class="feature-item">
                <img src="img/livraison.png" alt="Livraison">
                <h3>Livraison rapide et sécurisée</h3>
                <p>Recevez vos produits directement chez vous, partout en France.</p>
            </div>
            <div class="feature-item">
                <img src="img/service.png" alt="Support">
                <h3>Support client dédié</h3>
                <p>Notre équipe est à votre écoute pour répondre à toutes vos questions.</p>
            </div>
            <div class="feature-item">
                <img src="img/connexion.png" alt="Communauté">
                <h3>Rejoignez notre communauté</h3>
                <p>Rejoignez notre communauté de passionnés et améliorez votre setup dès aujourd’hui !</p>
            </div>
        </section>

        <!-- Featured Products Carousel -->
        <section class="carousel" id="featured-products">
            <h2>Produits à la une</h2>
            <div class="carousel-container">
                <!-- Add your product images here -->
                <div class="carousel-item"><a href="produit.php?id=1"><img src="img/ecran.jpg" alt="Produit 1"></a></div>
                <div class="carousel-item"><a href="produit.php?id=2"><img src="img/clavier.jpg" alt="Produit 2"></a></div>
                <div class="carousel-item"><a href="produit.php?id=4"><img src="img/tapis.jpg" alt="Produit 3"></a></div>
            </div>
            <button class="carousel-button prev" onclick="prevSlide('featured-products')">&#10094;</button>
<button class="carousel-button next" onclick="nextSlide('featured-products')">&#10095;</button>
</section>

<section class="carousel">
    <h2>Avis des clients satisfaits</h2>
    <div class="carousel-container" id="customer-reviews">
        <!-- Add your customer reviews here -->
        <div class="carousel-item"><p>"Excellent produit, je recommande!" - Jean</p></div>
        <div class="carousel-item"><p>"Service client au top!" - Marie</p></div>
        <div class="carousel-item"><p>"Livraison rapide et produit conforme." - Pierre</p></div>
    </div>
    <button class="carousel-button prev" onclick="prevSlide('customer-reviews')">&#10094;</button>
    <button class="carousel-button next" onclick="nextSlide('customer-reviews')">&#10095;</button>
</section>
</main>

<?php include 'include/pied-de-page.php'; ?>

<script src="styles.js"></script>
</body>

</html>