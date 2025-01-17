<?php
// Ceci est la page principale du magasin d'accessoires de jeu
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Boutique Gaming</title>
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
            </div>
        </section>

        <div class="content">
            <section class="index-container">
                <h2>Bienvenue chez la Boutique d'Accessoires de Jeux Vidéo</h2>
                <p>Découvrez une sélection unique d'accessoires conçus pour sublimer votre expérience de jeu.</p>
                <section class="legal-section">
                    <h2>Ce que nous offrons :</h2>
                    <ul>
                        <li>Accessoires de qualité : Des claviers, souris, casques, manettes et plus encore, spécialement sélectionnés pour les gamers exigeants.</li>
                        <li>Des produits pour tous les joueurs : Que vous soyez joueur occasionnel ou professionnel, nous avons ce qu’il vous faut.</li>
                        <li>Livraison rapide et sécurisée : Recevez vos produits directement chez vous, partout en France.</li>
                        <li>Support client dédié : Notre équipe est à votre écoute pour répondre à toutes vos questions.</li>
                        <li>Rejoignez notre communauté de passionnés et améliorez votre setup dès aujourd’hui !</li>
                    </ul>
                </section>
            </section>
        </div>

        <!-- Featured Products Carousel -->
        <section class="carousel" id="featured-products">
            <h2>Produits à la une</h2>
            <div class="carousel-container">
                <!-- Add your product images here -->
                <div class="carousel-item"><img src="img/ecran.jpg" alt="Produit 1"></div>
                <div class="carousel-item"><img src="img/clavier.jpg" alt="Produit 2"></div>
                <div class="carousel-item"><img src="img/tapis.jpg" alt="Produit 3"></div>
            </div>
            <button class="carousel-button prev" onclick="prevSlide('featured-products')">&#10094;</button>
            <button class="carousel-button next" onclick="nextSlide('featured-products')">&#10095;</button>
        </section>

        <!-- Customer Reviews Carousel -->
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            initCarousel('featured-products');
            initCarousel('customer-reviews');
        });
    </script>
</body>

</html>