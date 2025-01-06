<?php
    // Store Page for the Gaming Accessories Store
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Gaming Accessories Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/entete.php'; ?>
    <main>
        <section>
            <h2>Our Products</h2>
            <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 16px;">
                <div class="product">
                    <a href="product.php?id=1">
                        <div class="product-box" style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; text-align: center;">
                            <img src="img/product1.jpg" alt="Product 1" style="max-width: 100%; height: auto;">
                            <h3>Product 1</h3>
                            <p>$29.99</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="product.php?id=2">
                        <div class="product-box" style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; text-align: center;">
                            <img src="img/product2.jpg" alt="Product 2" style="max-width: 100%; height: auto;">
                            <h3>Product 2</h3>
                            <p>$49.99</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="product.php?id=3">
                        <div class="product-box" style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; text-align: center;">
                            <img src="img/product3.jpg" alt="Product 3" style="max-width: 100%; height: auto;">
                            <h3>Product 3</h3>
                            <p>$19.99</p>
                        </div>
                    </a>
                </div>
                <!-- Add more placeholder products as needed -->
            </div>
        </section>
    </main>
    <?php include 'include/pied-de-page.php'; ?>
</body>
</html>
