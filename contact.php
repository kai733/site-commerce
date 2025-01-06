<?php
    // Contact Page for the Gaming Accessories Store
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Gaming Accessories Store</title>
    <link rel="stylesheet" href="style.css"><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-nous pour toute question ou assistance sur nos accessoires de gaming. Nous sommes à votre écoute.">
    <title>Contactez-nous - Boutique Accessoires Gaming</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="banner">
            <h1>Boutique Accessoires Gaming</h1>
            <p>Votre destination pour les meilleurs accessoires de gaming</p>
        </div>
    </header>
    <nav>
        <ul class="nav-bar">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="store.php">Boutique</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="legal.php">Mentions Légales</a></li>
            <li><a href="cart.php">Panier</a></li>
        </ul>
    </nav>
    <main>
    <section class="contact">
        <h2>Contactez-nous</h2>
        <div class="contact-info">
            <div class="info">
                <h3>Horaires</h3>
                <p>Ouvert du lundi au samedi, de 9h à 18h,<br< même les jours fériés.</p>
            </div>
            <div class="info">
                <h3>Service Client</h3>
                <p>+33 1 23 45 67 89<br>Disponible 7j/7, 24h/24.</p>
            </div>
            <div class="info">
                <h3>Email</h3>
                <p><a href="mailto:contact@jeux.com">contact@jeux.com</a></p>
            </div>
        </div>

        <form class="contact-form">
            <h2>Envoyez-nous un message</h2>
            <div class="form-group">
                <label for="first-name">Prénom</label>
                <input type="text" id="first-name" name="first-name" placeholder="Votre prénom" required>
            </div>
            <div class="form-group">
                <label for="last-name">Nom</label>
                <input type="text" id="last-name" name="last-name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <!-- Google Maps -->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.276222315181!2d2.292292315674072!3d48.85884477928765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d6fb63d087%3A0x34a8e96bb50c72b6!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1631649148954!5m2!1sfr!2sfr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>
    <footer>
        <div class="footer-banner">
            <p>&copy; 2025 Boutique Accessoires Gaming. Tous droits réservés.</p>
            <nav>
                <ul>
                    <li><a href="privacy.php">Politique de Confidentialité</a></li>
                    <li><a href="terms.php">Conditions d’Utilisation</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>

