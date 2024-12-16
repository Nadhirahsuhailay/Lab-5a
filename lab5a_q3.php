<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($width, $length) {
        return $width * $length;
    }

    // Call the function with any value of your choice
    $width = 12;
    $length = 2;
    $area = calculateArea($width, $length);

    // Display the result in bold font
    echo "<p><strong>The area of a rectangle with a width of $width and $length is $area.</strong></p>";
    ?>
</body>
</html>
