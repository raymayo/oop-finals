<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and viewport settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Preconnect links for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Link to Google Fonts CSS with specified font family and weights -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Title of the HTML page -->
    <title>String Arrays Operations</title>
</head>
<body>
    <div id="mainContainer2">
        <h1 id="title-1">String Arrays</h1>

        <div id="arrayContainer">

            <div class="bothContainer">
                <h2>Sorting</h2>

                <!-- Form for sorting operation -->
                <form id="sortingForm" method="post">
                    <label for="numbers">Enter a series of numbers:</label>
                    <!-- Input field for numbers -->
                    <input type="text" id="numbers" name="numbers" required>

                    <button type="submit">Sort</button>

                    <?php
                    // PHP code block for sorting operation
                    if (isset($_POST["numbers"])) {
                        // Retrieve input from the form
                        $numbers = $_POST["numbers"];
                        
                        // Split the input into an array of characters
                        $numbersArray = str_split($numbers);
                        
                        // Sort the array in ascending order
                        sort($numbersArray);
                        $ascending = implode("", $numbersArray);

                        // Sort the array in descending order
                        rsort($numbersArray);
                        $descending = implode("", $numbersArray);

                        // Display the sorted results
                        echo "<div class='sortContainer'>";
                        echo "<p class='sortResult'>Ascending: $ascending</p>";
                        echo "<p class='sortResult'>Descending: $descending</p>";
                        echo "</div>";
                    }
                    ?>
                </form>
            </div>


            <div class="bothContainer">
                <h2>Merging</h2>
                
                <!-- Form for merging operation -->
                <form id="mergingForm" method="post">
                    <label for="array_input_1">Input 1</label>
                    <!-- Input field for first array -->
                    <input type="text" id="array_input_1" name="array_input_1" required>
                    <label for="array_input_2">Input 2</label>
                    <!-- Input field for second array -->
                    <input type="text" id="array_input_2" name="array_input_2" required>
                    <!-- Submit button for merging -->
                    <button type="submit">Merge</button>

                    <?php
                    // PHP code block for merging operation
                    if (isset($_POST["array_input_1"]) && isset($_POST["array_input_2"])) {
                        // Retrieve inputs from the form
                        $array_input_1 = $_POST["array_input_1"];
                        $array_input_2 = $_POST["array_input_2"];
                        
                        // Split the inputs into arrays of characters
                        $array_input_1Digits = str_split($array_input_1);
                        $array_input_2Digits = str_split($array_input_2);
                        
                        // Merge the arrays
                        $mergedDigits = array_merge($array_input_1Digits, $array_input_2Digits);
                        
                        // Sort the merged array
                        sort($mergedDigits);
                        
                        // Convert the sorted array back to a string
                        $result = implode("", $mergedDigits);
                        
                        // Display the merged and sorted result
                        echo "<p class='sortResult'>Merged & Sorted (Ascending): $result</p>";
                    }
                    ?>
                </form>
            </div>
        </div>
        <!-- Link to navigate back to the main page -->
        <a href="./" id="backBtn">Go Back</a>
    </div>
</body>
</html>
