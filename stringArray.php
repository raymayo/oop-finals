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

    <div class="bothContainer">
    <h2>Sorting</h2>
    <form id="sortingForm" method="post">
        <label for="numbers">Enter a series of numbers:</label>
        <input type="text" id="numbers" name="numbers" required>
        <br>
        <button type="submit">Sort</button>
    </form>

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

</div>

    <div class="bothContainer">
    <h2>Merging</h2>
    <form id="mergingForm" method="post">
        <label for="array1">Enter input 1</label>
        <input type="text" id="array1" name="array1" required>
        <br>
        <label for="array2">Enter input 2</label>
        <input type="text" id="array2" name="array2" required>
        <br>
        <button type="submit">Merge</button>
    </form>

<?php
if (isset($_POST["array1"]) && isset($_POST["array2"])) {
    $array1 = $_POST["array1"];
    $array2 = $_POST["array2"];


    $array1Digits = str_split($array1);
    $array2Digits = str_split($array2);


    $mergedDigits = array_merge($array1Digits, $array2Digits);


    sort($mergedDigits);


    $result = implode("", $mergedDigits);

    echo "<p class='sortResult'>Merged & Sorted (Ascending): $result</p>";
}
?>

</div>
    <a href="./" id="backBtn">Back</a>

</div>



</body>
</html>
