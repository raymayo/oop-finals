<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Minimum Money Problem</title>
</head>
<body>
    <div id="mainContainer">

        <h1 id="title-1">Minimum Money Problem</h1>

        <!-- Form for user input -->
        <form id="coinForm" method="post">
            <label for="targetAmount">Input Amount</label>
            <!-- Input field for target amount -->
            <input type="number" id="targetAmount" name="targetAmount" required>
            <!-- Submit button to trigger calculation -->
            <button type="submit">Calculate</button>
        </form>

        <?php
            // PHP code block to calculate minimum coins needed
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Array of coin denominations
                $coinDenominations = [1000, 500, 200, 100, 50, 20, 10, 5, 1];
                // Retrieve target amount from form input
                $targetAmount = $_POST["targetAmount"];
                // Function call to calculate minimum coins
                minimumCoins($coinDenominations, $targetAmount);
            }

            // Function to calculate minimum coins needed
            function minimumCoins($coins, $targetAmount) {
                // Sort coins in descending order
                rsort($coins);
                // Initialize arrays for coin count and remaining amount
                $coinCount = array();
                $remainingAmount = $targetAmount;

                // Loop through each coin denomination
                foreach ($coins as $coin) {
                    // Calculate number of coins needed for the current denomination
                    $coinCount[$coin] = floor($remainingAmount / $coin);
                    // Update remaining amount
                    $remainingAmount %= $coin;
                }

                // Display the target amount and minimum coins needed
                echo "<p id='amount'>Target Amount = P$targetAmount</p>";
                echo "<ul id='coinsContainer'>";
                foreach ($coinCount as $coin => $count) {
                    echo "<li>$coin = $count</li>";
                }
                echo "</ul>";
            }
        ?>
        <!-- Link to navigate back to the main page -->
        <div>
            <a href="./" id="backBtn">Go Back</a>
        </div>
    </div>
</body>
</html>
