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
        <section class="carousel">
            <h2>Produits à la une</h2>
            <div class="carousel-container" id="featured-products">
                <!-- Add your product images here -->
                <div class="carousel-item"><a href="produit.php?id=1"><img src="img/écran gaming.jpg" alt="ecran.jpg"></a></div>
                <div class="carousel-item"><a href="produit.php?id=8"><img src="img/PC Gamer.jpg" alt="PCGamer"></a></div>
                <div class="carousel-item"><a href="produit.php?id=2"><img src="img/clavier.jpg" alt="Clavier"></a></div>
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
                <div class="carousel-item">
                    <p>"Une qualité incroyable, bien au-delà de mes attentes!" - Sarah</p>
                </div>
                <div class="carousel-item">
                    <p>"J'ai adoré l'expérience d'achat, tout était parfait." - Thomas</p>
                </div>
                <div class="carousel-item">
                    <p>"Produit vraiment bien pensé et pratique au quotidien." - Claire</p>
                </div>
                <div class="carousel-item">
                    <p>"Un must-have! Je suis super content de mon achat." - Julien</p>
                </div>
                <div class="carousel-item">
                    <p>"Le design est élégant et la fonctionnalité est impeccable." - Emma</p>
                </div>
                <div class="carousel-item">
                    <p>"Equipe super professionnelle, je reviendrai sans hésiter." - Louis</p>
                </div>
                <div class="carousel-item">
                    <p>"Le meilleur service que j'aie connu jusqu'à présent!" - Camille</p>
                </div>
                <div class="carousel-item">
                    <p>"Très satisfait du rapport qualité/prix, bravo!" - Nicolas</p>
                </div>
                <div class="carousel-item">
                    <p>"L'emballage soigné et la livraison rapide m'ont impressionné." - Lucie</p>
                </div>
                <div class="carousel-item">
                    <p>"Le produit dépasse largement les concurrents, je recommande vivement." - Paul</p>
                </div>
            </div>
            <button class="carousel-button prev" onclick="prevSlide('customer-reviews')">&#10094;</button>
            <button class="carousel-button next" onclick="nextSlide('customer-reviews')">&#10095;</button>
        </section>

    </main>
    <?php include 'include/pied-de-page.php'; ?>
    <script src="styles.js"></script>
</body>

</html>