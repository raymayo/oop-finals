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

        <form id="gcdForm" method="post">
            <label for="number1">First number</label>
            <input type="number" id="number1" name="number1" required>
            <br>
            <label for="number2">Second number</label>
            <input type="number" id="number2" name="number2" required>
            <br>
            <button type="submit">Calculate GCD</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function gcd($a, $b)
            {
                while ($b != 0) {
                    $temp = $b;
                    $b = $a % $b;
                    $a = $temp;
                }
                return $a;
            }

            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $result = gcd($number1, $number2);
            echo "<p id='algoResult'>GCD($number1, $number2) = $result</p>";
        }
        ?>
        <a href="./" id="backBtn">Back</a>
    </div>

</body>

</html>