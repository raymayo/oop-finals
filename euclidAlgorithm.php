<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Euclid's Algorithm</title>
</head>

<body>
    <div id="mainContainer">
        <h1 id="title-1">Euclid's Algorithm</h1>

        <!-- Form for user input -->
        <form id="gcdForm" method="post">
            <label for="number1">First number</label>
            <!-- Input field for the first number -->
            <input type="number" id="number1" name="number1" required>
            <br>
            <label for="number2">Second number</label>
            <!-- Input field for the second number -->
            <input type="number" id="number2" name="number2" required>
            <br>
            <!-- Submit button to trigger GCD calculation -->
            <button type="submit">Calculate GCD</button>
        </form>

        <?php
        // PHP code block to calculate GCD using Euclid's Algorithm
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Function to calculate GCD
            function gcd($a, $b)
            {
                // Loop until b becomes 0
                while ($b != 0) {
                    // Store the current value of b in a temporary variable
                    $temp = $b;
                    // Update b to the remainder of a divided by b
                    $b = $a % $b;
                    // Update a to the value of the temporary variable
                    $a = $temp;
                }
                // Return the final value of a, which is the GCD
                return $a;
            }

            // Retrieve the input numbers from the form
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            // Calculate the GCD using the gcd function
            $result = gcd($number1, $number2);
            // Display the result
            echo "<p id='algoResult'>GCD($number1, $number2) = $result</p>";
        }
        ?>
        <!-- Link to navigate back to the main page -->
        <a href="./" id="backBtn">Go Back</a>
    </div>

</body>

</html>
