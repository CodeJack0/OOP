<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
    width: 50%;
    margin: 0 auto;
    text-align: center;
}

form {
    margin-top: 20px;
}

input[type="submit"] {
    margin-top: 10px;
}

.error {
    color: red;
    font-weight: bold;
}

    </style>
</head>
<body>
<body>
    <div class="container">
        <h2>Rectangle Perimeter Calculator</h2>
        <form method="post" action="">
            <label for="length">Enter the length of the rectangle:</label><br>
            <input type="text" id="length" name="length"><br>
            <label for="width">Enter the width of the rectangle:</label><br>
            <input type="text" id="width" name="width"><br><br>
            <input type="submit" value="Calculate Perimeter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $length = $_POST['length'];
            $width = $_POST['width'];

            
            if (!is_numeric($length) || !is_numeric($width)) {
                echo "<div class='error'>Please enter valid numeric values for length and width.</div>";
            } else {
                
                $perimeter = 2 * ($length + $width);
                echo "The perimeter of the rectangle is: " . $perimeter;
            }
        }
        ?>
</body>
</html>