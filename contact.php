<?php
    // Contact Page for the Gaming Accessories Store
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Gaming Accessories Store</title>
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
<?php include 'include/entete.php'; ?>
    <main>
    <section class="contact">
        <h2>Contactez-nous</h2>
        <div class="contact-info">
            <div class="info">
                <h3>Horaires</h3>
                <p>Ouvert du lundi au samedi, de 9h à 18h,<br> même les jours fériés.</p>
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
        </section>
    </main>
    <footer>
        <div class="footer-banner">
            <p>&copy; 2024 Gaming Accessories Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

