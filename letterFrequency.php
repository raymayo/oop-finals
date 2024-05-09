<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Character Frequency Counter</title>
</head>
<body>
    <div id="mainContainer">
        <h1 id="title-1">Letter Frequency</h1>

        <!-- Form for user input -->
        <form id="freqForm" method="post">
            <label for="inputString">Enter sequence</label>
            <!-- Input field for user to enter a string -->
            <input type="text" id="inputString" name="inputString" required>
            <br>
            <!-- Submit button to trigger frequency count -->
            <button type="submit">Count Frequency</button>
        </form>

        <?php
        // PHP code block to count character frequency
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Function to count frequency of characters in a string
            function countFrequency($inputString) {
                // Initialize an array to store character counts
                $charCount = array();

                // Split the input string into individual characters
                $chars = str_split($inputString);

                // Loop through each character and update its count
                foreach ($chars as $char) {
                    if (isset($charCount[$char])) {
                        $charCount[$char]++;
                    } else {
                        $charCount[$char] = 1;
                    }
                }

                // Display the character frequency counts
                echo "<ul id='freqResult'>";
                foreach ($charCount as $char => $count) {
                    echo "<li>$char - $count</li>";
                }
                echo "</ul>";
            }

            // Retrieve the input string from the form
            $inputString = $_POST["inputString"];
            // Call the function to count character frequency
            countFrequency($inputString);
        }
        ?>

        <!-- Link to navigate back to the main page -->
        <a href="./" id="backBtn">Go Back</a>
    </div>
</body>
</html>
