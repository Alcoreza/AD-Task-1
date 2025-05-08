<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
</head>
<body>
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
                if($type == "Healthy"){
                    echo "<li>$name</li>";
                }
            }
            echo "</ul>";
            echo "<h4>Junk Foods</h4><ul>";
            foreach ($foods as $name => $type){
                if ($type == "Junk"){
                    echo "<li>$name</li>";
                }
            }
            echo "</ul>";
        
        ?>
    </div>
</body>
</html>
