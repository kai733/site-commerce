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
        <div class="contact-form">
    <h2>Contactez-nous</h2>
    <form>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" placeholder="Votre prénom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" placeholder="Votre message"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
        </div>

        <!-- Google Map Embed -->
        <div class="google-map">
            <h2>Notre emplacement</h2>
            <p>1234 Rue du Jeu Vidéo 75000 Paris</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9659352393777!2d2.294481315674846!3d48.85884407928793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d5c6d3a2b9%3A0x98be4fa18c9d4c5d!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1627646581097!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
<?php include 'include/pied-de-page.php'; ?>
</body>
</html>
