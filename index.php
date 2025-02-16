<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1, h2 {
            color: #007BFF;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        ul {
            padding-left: 20px;
            list-style-type: disc;
        }
        li {
            margin-bottom: 8px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Largest Cities in the World</h1>

        <?php
            // initial array of cities
            $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];

            // Prints the cities separated by commas using a loop
            echo "<p><strong>Initial Cities: </strong>";
            foreach ($cities as $city) {
                echo "$city, ";
            }
            echo "</p>";

            // Sorts the array
            sort($cities);

            // Prints the sorted cities in an unordered list using a loop
            echo "<h2>Sorted List:</h2>";
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";

            // Adds new cities to the array 
            array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

            // Sorts the array again
            sort($cities);

            // Prints the final sorted list using a loop
            echo "<h2>Final Sorted List (with New Cities):</h2>";
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
