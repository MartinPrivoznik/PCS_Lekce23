<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/globals.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "./components/header.php";
    ?>
    <h2>PHP je zábava</h2>

    <?php
    // echo
    $testString = "PRAHA CODING SCHOOL";
    echo "<p>" . $testString . "</p>";
    echo "<p>$testString</p>";

    $integer = 10;
    $float = 10.00;
    $boolean = true;
    $array = ['sda', 1, 'sd'];

    //prace ve tride
    $country = "Česká republika";
    $city = "Praha";
    $population = 1309000;
    ?>

    <!-- Varianta 1 -->
    <?php
    echo "<ul>" .
        "<li>" . $country . "</li>" .
        "<li>" . $city . "</li>" .
        "<li>" . $population . "</li>" .
        "</ul>";

    echo "$city je největší město České republiky";
    echo "<br/>";
    echo "$country a $city rychle rostou";
    ?>

    <br />
    <br />
    <br />

    <!-- Varianta 2 -->
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>
    <?php echo "$city je největší město České republiky"; ?>
    <br />
    <?php echo "$country a $city rychle rostou"; ?>

    <br />
    <br />
    <br />

    <!-- Varianta 3 -->
    <?php
    echo "<ul> 
        <li>$country</li>
        <li>$city</li>
        <li>$population</li>
        </ul>";

    echo "$city je největší město České republiky";
    echo "<br/>";
    echo "$country a $city rychle rostou";
    echo "změna GIT"
    ?>

    <br />
    <br />
    <br />

    <table>
        <thead>
            <tr>
                <th>Jmeno zviratka</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $animals = ['pes', 'kocka', 'narval', 'kapybara'];

            foreach ($animals as $animal) {
                echo "<tr><td>$animal</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    include "./components/footer.php";
    ?>
</body>

</html>