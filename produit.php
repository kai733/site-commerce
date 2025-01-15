<?php
// Function to load products from the CSV file (same as in catalogue.php)
function loadProductsFromCSV($filePath)
{
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

// Load products
$products = loadProductsFromCSV('produits.csv');

// Get product ID from URL parameter
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// Find the product with the matching ID
$product = null;
foreach ($products as $p) {
    if ($p['id'] == $productId) {
        $product = $p;
        break;
    }
}

// If product not found, display an error message
if (!$product) {
    die("Produit introuvable.");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit - Boutique Gaming</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'include/entete.php'; ?>
    <main>
        <section>
            <h2><?= htmlspecialchars($product['name']) ?></h2>
            <div class="product-details">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                <p>Prix: <?= htmlspecialchars($product['price']) ?>€</p>
                <form method="post">
                    <div class="quantity-selector">
                        <label for="quantity">Quantité:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="99">
                    </div>
                    <button class="boutton-vert" type="submit" name="add_to_cart" value="<?= htmlspecialchars($product['id']) ?>">Ajouter au panier</button>
                </form>
            </div>
        </section>
    </main>
    <?php include 'include/pied-de-page.php'; ?>
</body>

</html>

<?php
// Handle adding to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $productId = $_POST["add_to_cart"];
    $quantity = isset($_POST["quantity"]) ? (int)$_POST["quantity"] : 1;

    // Get existing cart from cookie
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    // Add product to cart (or update quantity if already exists)
    if (isset($cart[$productId])) {
        $cart[$productId] += $quantity;
    } else {
        $cart[$productId] = $quantity;
    }

    // Set cookie with updated cart (expire in 1 day)
    setcookie('cart', json_encode($cart), time() + 86400, '/');

    // Redirect to confirmation page
    header("Location: confirmation.php?id=" . $productId);
    exit();
}
?>