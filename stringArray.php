<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>String Arrays Operations</title>
</head>
<body>
    <div id="mainContainer2">
    <h1 id="title-1">String Arrays</h1>

    <div id="arrayContainer">

    <div class="bothContainer">
    <h2>Sorting</h2>
    <form id="sortingForm" method="post">
        <label for="numbers">Enter a series of numbers:</label>
        <input type="text" id="numbers" name="numbers" required>
        <button type="submit">Sort</button>

        <?php
if (isset($_POST["numbers"])) {
    $numbers = $_POST["numbers"];

    $numbersArray = str_split($numbers);
    sort($numbersArray);
    $ascending = implode("", $numbersArray);

    rsort($numbersArray);
    $descending = implode("", $numbersArray);

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
    <form id="mergingForm" method="post">
        <label for="array_input_1">Input 1</label>
        <input type="text" id="array_input_1" name="array_input_1" required>
        <label for="array_input_2">Input 2</label>
        <input type="text" id="array_input_2" name="array_input_2" required>
        <button type="submit">Merge</button>

        <?php
if (isset($_POST["array_input_1"]) && isset($_POST["array_input_2"])) {
    $array_input_1 = $_POST["array_input_1"];
    $array_input_2 = $_POST["array_input_2"];


    $array_input_1Digits = str_split($array_input_1);
    $array_input_2Digits = str_split($array_input_2);


    $mergedDigits = array_merge($array_input_1Digits, $array_input_2Digits);


    sort($mergedDigits);


    $result = implode("", $mergedDigits);

    echo "<p class='sortResult'>Merged & Sorted (Ascending): $result</p>";
}
?>

    </form>



</div>
</div>
    <a href="./" id="backBtn">Go Back</a>

</div>



</body>
</html>
