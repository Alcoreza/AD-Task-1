<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Food Generator</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="page/landingPage/assets/css/landingPage.css">
</head>
<body>
    <div class="menu">
        <a href="page/landingPage/index.php">Home</a> |
        <a href="page/factsPage/index.php">Food Facts</a> |
        <a href="page/categoriesPage/index.php">Categories</a> |
    </div>
    <div class="card">
        <h2> Today's Random Food </h2>
        <?php
            $foods = [
                "Pizza" => "Junk",
                "Salad"=> "Healthy",
                "Burger"=> "Junk",
                "Sushi"=> "Healthy",
                "Fried Chicken"=> "Junk",
                "Fruit Bowl"=> "Healthy",
                "Ramen"=> "Junk",
                "Grilled Fish"=> "Healthy",
            ];

            $keys = array_keys($foods);
            shuffle($keys);

            for ($i = 0; $i < 3; $i++) {
                $food = $keys[$i];
                $type = $foods[$food];
                echo "<div class='food-item'><strong>{$food}</strong> - <span class='type'>" . ucfirst($type) . "</span></div>";
            }
        ?>
    </div>
    <div class="refresh-button-container">
        <form method="get">
            <button type="submit">Refresh Food List</button>
        </form>
    </div>
    <footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Random Food Generator. All rights reserved.</p>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
    </div>
</footer>
</body>
</html>