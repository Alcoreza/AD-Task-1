<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Food Generator</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="card">
        <h2> Today's Rando Food</h2>
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
                echo "<div class ='food-item><>$food</strong> - <span class='type'>.ucfirst($type).</span></div>";
            }
        ?>
    </div>
</body>
</html>