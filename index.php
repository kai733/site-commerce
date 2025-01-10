<?php
    // This is the main page of the Gaming Accessories Store
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Accessories Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/entete.php'; ?>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h1>Bienvenue dans le paradis des gamers</h1>
            <p>Équipez-vous avec les meilleurs accessoires pour dominer vos parties.</p>
            <a href="#about" class="btn-primary">En savoir plus</a>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <h2>À propos de notre boutique</h2>
            <p>Découvrez une collection ultime d'accessoires de gaming pour améliorer vos performances. Que vous soyez un amateur ou un pro, nous avons ce qu'il vous faut !</p>
        </section>

        <!-- Features Section -->
        <section class="features">
            <h2>Pourquoi nous choisir ?</h2>
            <div class="features-grid">
                <div class="feature">
                    <img src="images/high-quality.png" alt="Qualité supérieure">
                    <h3>Qualité supérieure</h3>
                    <p>Nos produits sont soigneusement sélectionnés parmi les meilleures marques pour garantir performance et durabilité.</p>
                </div>
                <div class="feature">
                    <img src="images/fast-shipping.png" alt="Livraison rapide">
                    <h3>Livraison rapide</h3>
                    <p>Recevez vos produits rapidement et en toute sécurité grâce à notre service de livraison premium.</p>
                </div>
                <div class="feature">
                    <img src="images/customer-support.png" alt="Service client">
                    <h3>Service client dédié</h3>
                    <p>Notre équipe est à votre disposition pour répondre à toutes vos questions et assurer une expérience sans stress.</p>
                </div>
            </div>
        </section>

        <!-- Call-to-Action Section -->
        <section class="cta">
            <h2>Prêt à transformer votre setup ?</h2>
            <p>Explorez notre collection et commencez votre aventure gaming dès aujourd'hui.</p>
            <a href="boutique.php" class="btn-secondary">Voir nos produits</a>
        </section>
    </main>
    <?php include 'include/pied-de-page.php'; ?>
</body>
</html>
