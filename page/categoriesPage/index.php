<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/categories.css">

</head>
<body>
    <div class="menu">
        <a href="page/landingPage/index.php">Home</a> |
        <a href="page/factsPage/index.php">Food Facts</a> |
        <a href="page/categoriesPage/index.php">Categories</a> |
    <div class="card">
        <h2>Food Categories</h2>

        <?php
            $foods = [
                "Pizza"=> "Junk",
                "Salad"=> "Healthy",
                "Burger"=> "Junk",
                "Sushi"=> "Healthy",
                "Fried Chicken"=> "Junk",
                "Fruit Bowl"=> "Healthy",
                "Ramen"=> "Junk",
                "Grilled Fish"=> "Healthy",
            ];

            echo "<h4>Healthy Foods</h4><ul>";
            foreach ($foods as $name => $value) {
                if($value == "Healthy"){
                    echo "<li>$name</li>";
                }
            }
            echo "</ul>";
            echo "<h4>Junk Foods</h4><ul>";
            foreach ($foods as $name => $value){
                if ($value == "Junk"){
                    echo "<li>$name</li>";
                }
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
