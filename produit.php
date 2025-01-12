<?php
    // Function to load products from the CSV file (same as in catalogue.php)
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
    <title>Détails du produit - Gaming Accessories Store</title>
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
                </div>
        </section>
    </main>
<?php include 'include/pied-de-page.php'; ?>
</body>
</html>
