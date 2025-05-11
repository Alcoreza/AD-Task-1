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
    <div class="main-content">
        <div class="menu">
            <a href="page/landingPage/index.php">Home</a> |
            <a href="page/factsPage/index.php">Food Facts</a> |
            <a href="page/categoriesPage/index.php">Categories</a> |
        </div>
        <div class="welcome-banner">
            <h1>Welcome to the Random Food Generator!</h1>
            <p>Discover random foods and whether they're healthy or junk – just one click away.</p>
        </div>
        <div class="card">
            <h2 class="random-title">Today's Random Food</h2>
            <div class="food-card-container">
                <?php
                $foods = [
                    "Pizza" => "Junk",
                    "Salad" => "Healthy",
                    "Burger" => "Junk",
                    "Sushi" => "Healthy",
                    "Fried Chicken" => "Junk",
                    "Fruit Bowl" => "Healthy",
                    "Ramen" => "Junk",
                    "Grilled Fish" => "Healthy",
                    "Oatmeal" => "Healthy",
                    "Avocado" => "Healthy",
                    "Corn Dogs" => "Junk"
                ];

                $keys = array_keys($foods);
                shuffle($keys);

                for ($i = 0; $i < 3; $i++) {
                    $food = $keys[$i];
                    $type = $foods[$food];
                    $imgPath = "page/landingPage/assets/img/" . strtolower(str_replace(' ', '_', $food)) . ".jpg"; // e.g. pizza.jpg
                
                    echo "<div class='food-card'>";
                    echo "<img src='{$imgPath}' alt='{$food}' class='food-image'>";
                    echo "<div class='food-name'><strong>{$food}</strong></div>";
                    echo "<div class='food-type " . strtolower($type) . "'>" . ucfirst($type) . "</div>";
                    echo "</div>";
                }
                ?>
            </div>

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
    </div>
</body>

</html>