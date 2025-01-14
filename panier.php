<?php
session_start();

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remove_item"])) {
    $productIdToRemove = $_POST['remove_item'];
    
    // Get existing cart from cookie
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
    
    // Remove the item
    unset($cart[$productIdToRemove]);
    
    // Update the cookie
    setcookie('cart', json_encode($cart), time() + 86400, '/');
    
    // Redirect using JavaScript
    echo "<script>window.location.href='panier.php';</script>";
    exit();
}

// Load products (you'll need the loadProductsFromCSV function from your other files)
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

// Get cart from cookie
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Boutique Gaming</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/entete.php'; ?>
<main>
    <section class="cart-section">
        <h2>Votre Panier</h2>
        <?php
        if (empty($cart)) {
            echo "<p class='empty-cart'>est vide...</p>";
        } else {
            $total = 0;
            ?>
            <form method="post">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($cart as $productId => $quantity) {
                        $product = null;
                        foreach ($products as $p) {
                            if ($p['id'] == $productId) {
                                $product = $p;
                                break;
                            }
                        }
                        if ($product) {
                            $price = floatval($product['price']);
                            $itemTotal = $price * $quantity;
                            $total += $itemTotal;
                            ?>
                            <tr>
                                <td><a href="produit.php?id=<?php echo htmlspecialchars($productId); ?>"><?php echo htmlspecialchars($product['name']); ?></a></td>
                                <td><?php echo htmlspecialchars($product['price']); ?> €</td>
                                <td><?php echo $quantity; ?></td>
                                <td><?php echo number_format($itemTotal, 2); ?> €</td>
                                <td>
                                    <button type="submit" name="remove_item" value="<?= htmlspecialchars($productId) ?>">Supprimer</button >
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><strong>Total:</strong></td>
                        <td colspan="2"><strong><?php echo number_format($total, 2); ?> €</strong></td>
                    </tr>
                </tfoot>
            </table>
            </form>
            <a href="index.php"><button class="checkout">Payer</button></a>
            <?php
        }
        ?>
    </section>
</main>
<?php include 'include/pied-de-page.php'; ?>
</body>
</html>
