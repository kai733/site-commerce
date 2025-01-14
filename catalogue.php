<?php
    // Function to load products from the CSV file
    function loadProductsFromCSV($filePath) {
        $products = [];
        if (($handle = fopen($filePath, "r")) !== false) {
            // Skip the header row
            fgetcsv($handle);

            // Read each row and store as an associative array
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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Boutique Gaming</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/entete.php'; ?>
    <main>
        <section>
            <h2>Nos Produits</h2>
            <div class="product-flex">
                <?php foreach ($products as $product): ?>
                        <a href="produit.php?id=<?= htmlspecialchars($product['id']) ?>">
                            <div class="product-box">
                                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                                <h3><?= htmlspecialchars($product['name']) ?></h3>
                                <p><?= htmlspecialchars($product['price']) ?>€</p>
                            </div>
                        </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <?php include 'include/pied-de-page.php'; ?>
</body>
</html>
