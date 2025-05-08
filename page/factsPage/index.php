<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Facts</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="assets/css/facts.css">
</head>
<body>
    <div class="menu">
        <a href="../../page/landingPage/index.php">Home</a> |
        <a href="../../page/factsPage/index.php">Food Facts</a> |
        <a href="../../page/categoriesPage/index.php">Categories</a> |
    </div>
    <div class="card">
        <h2>Food Facts</h2>

        <?php
            $facts = [
                "Carrots were originally purple.",
                "Apple float because they are 25% air.",
                "Honey never spoils.",
                "Bananas are berries, but strawberries aren't",
                "The most stolen food in the world is cheese.",
                "Cucumbers are 96% water.",
                "The popsicle was invented by accident.",
                "One fast food burger can contain meat from 100+ cows",
                "Watermelon is both a fruit and a vegetable",
                "Cucumbers are 96% water",
                "The world’s hottest pepper can cause temporary blindness"
            ];

            shuffle($facts);

            for ( $i = 0; $i < 3; $i++) {
                echo "<p> $facts[$i]</p>";
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
