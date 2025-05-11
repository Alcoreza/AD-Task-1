<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="assets/css/categories.css">

</head>

<body>
    <div class="menu">
        <a href="../../index.php">Home</a> |
        <a href="../../page/factsPage/index.php">Food Facts</a> |
        <a href="../../page/categoriesPage/index.php">Categories</a> |
    </div>
    <div class="welcome-banner">
        <h1>Tasty Types!</h1>
        <p>Explore different types of food, from healthy bites to guilty pleasures!</p>
    </div>
    <div class="card">
        <h2 class="categories-title">Food Categories</h2>
        <div class="category-card-container">
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

            // Group foods by type
            $grouped = ["Healthy" => [], "Junk" => []];
            foreach ($foods as $name => $type) {
                $grouped[$type][] = $name;
            }

            // Output one card per category
            foreach ($grouped as $type => $items) {
                // add a class based on type for coloring
                $typeClass = strtolower($type);
                echo "<div class='category-card {$typeClass}'>";
                echo "<h3>{$type} Foods</h3>";
                echo "<ul>";
                foreach ($items as $food) {
                    echo "<li>{$food}</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
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