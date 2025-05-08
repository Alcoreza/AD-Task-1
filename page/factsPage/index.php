<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Facts</title>
</head>
<body>
    <div class="card">
        <h2>Food Facts</h2>

        <?php
            $facts = [
                "Carrots were originally purple.",
                "Apple float because they are 25% air.",
                "Honey never spoils.",
                "Bananas are berries, but strawberries aren't",
                "The most stolen food in the world is cheese.",
                "Cucumbers are 96% water."
            ];

            shuffle($facts);

            for ( $i = 0; $i < 3; $i++) {
                echo "<p> $facts[$i]</p>";
            }
        ?>
    </div>
</body>
</html>
