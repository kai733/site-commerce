<?php
// Get product ID from URL parameter (if available)
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// Get existing cart from cookie
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

//If no product ID is provided, display a message and exit
if (!$productId) {
    die("Aucun produit n'a été ajouté au panier.");
}

// Load products (same function as in produit.php)
function loadProductsFromCSV($filePath) {
    $products = [];
    if (($handle = fopen($filePath, "r")) !== false) {
        fgetcsv($handle); // Skip header row
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $products[] = [
                'id' => $data[0],
                'name' => $data[2],
                'price' => $data[3],
                'image' => $data[1]
            ];
        }
        fclose($handle);
    }
    return $products;
}

$products = loadProductsFromCSV('produits.csv');

// Find the product with the matching ID
$product = null;
foreach ($products as $p) {
    if ($p['id'] == $productId) {
        $product = $p;
        break;
    }
}

//If product not found, display an error message
if (!$product) {
    die("Produit introuvable.");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'ajout au panier - Boutique Gaming</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'include/entete.php'; ?>
    <main>
        <section>
            <h2><?= htmlspecialchars($product['name']) ?> a été ajouté à votre panier !</h2>
            <div class="product-details">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
            </div>
            <a href="catalogue.php"><button class="boutton-pas-vert">Continuer vos achats</button></a>
            <a href="panier.php"><button class="boutton-pas-vert">Aller au panier</button></a>
        </section>
    </main>
    <?php include 'include/pied-de-page.php'; ?>
</body>
</html>
