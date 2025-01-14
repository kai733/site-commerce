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
</head>

<body>
    <?php include 'include/entete.php'; ?>
    <main>
        <div>
            <section>
                <h2>À propos de notre magasin</h2>
                <p>Découvrez la collection ultime d'accessoires de jeu pour améliorer votre expérience de jeu. Des claviers aux casques, nous avons tout ce dont vous avez besoin pour gagner.</p>
            </section>
            <section>
                <h2>Pourquoi nous choisir ?</h2>
                <p>Nous offrons des produits haut de gamme de grandes marques, garantissant qualité et performance. Achetez en toute confiance et faites passer votre jeu au niveau supérieur.</p>
            </section>
        </div>

        <!-- Featured Products Carousel -->
        <section class="carousel">
            <h2>Produits à la une</h2>
            <div class="carousel-container" id="featured-products">
                <!-- Add your product images here -->
                <div class="carousel-item"><img src="img/écran gaming.jpg" alt="Ecran Gamer"></div>
                <div class="carousel-item"><img src="img/PC Gamer.jpg" alt="PC Gamer"></div>
                <div class="carousel-item"><img src="img/clavier.jpg" alt="Clavier"></div>
            </div>
            <button class="carousel-button prev" onclick="prevSlide('featured-products')">&#10094;</button>
            <button class="carousel-button next" onclick="nextSlide('featured-products')">&#10095;</button>
        </section>

        <!-- Customer Reviews Carousel -->
<!-- Customer Reviews Carousel -->
<section class="carousel">
    <h2>Avis des clients satisfaits</h2>
    <div class="carousel-container" id="customer-reviews">
        <!-- Add your customer reviews here -->
        <div class="carousel-item"><p>"Une qualité incroyable, bien au-delà de mes attentes!" - Sarah</p></div>
        <div class="carousel-item"><p>"J'ai adoré l'expérience d'achat, tout était parfait." - Thomas</p></div>
        <div class="carousel-item"><p>"Produit vraiment bien pensé et pratique au quotidien." - Claire</p></div>
        <div class="carousel-item"><p>"Un must-have! Je suis super content de mon achat." - Julien</p></div>
        <div class="carousel-item"><p>"Le design est élégant et la fonctionnalité est impeccable." - Emma</p></div>
        <div class="carousel-item"><p>"Equipe super professionnelle, je reviendrai sans hésiter." - Louis</p></div>
        <div class="carousel-item"><p>"Le meilleur service que j'aie connu jusqu'à présent!" - Camille</p></div>
        <div class="carousel-item"><p>"Très satisfait du rapport qualité/prix, bravo!" - Nicolas</p></div>
        <div class="carousel-item"><p>"L'emballage soigné et la livraison rapide m'ont impressionné." - Lucie</p></div>
        <div class="carousel-item"><p>"Le produit dépasse largement les concurrents, je recommande vivement." - Paul</p></div>
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