<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <style>
       body, html {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center; 
          
        }
        body{
            background-position: 100%;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgb(250, 208, 226) 0%, rgb(171, 210, 255) 100%);
        }

        .result-box {
            background-color: #f0f0f0; 
            color: #333; 
            padding: 10px;
            border-radius: 5px;
            box-shadow: 5px 5px 10px black;
        }

        h2{
            color: black;
            font-size: xx-large;
        }

        .result-box span {
            font-weight: bold;
        }

    </style>
</head>
<body>
    
    <h2>Result</h2>
<?php
    if(isset($_POST['submit'])) {
        $radius = $_POST['radius'];
        $height = $_POST['height'];

        $volume = calculateCylinderVolume($radius, $height);
        
        echo "<div class='result-box'>Volume of the Cylinder: <span>$volume</span> cubic units</div>";
    }

    function calculateCylinderVolume($radius, $height) {
        $circle_area = pi() * $radius * $radius;
        $volume = $circle_area * $height;
        return $volume;
    }
    ?>

</body>
</html>