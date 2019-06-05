<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/WP19/assignment_3/index.php',
        'Add news item' => '/WP19/assignment_3/news_add.php',
        'Leap Year' => '/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';

?>
<div id="usr">
            <?php
            $rows = 2; // amout of tr
            $cols = 5;// amjount of td
            function drawTable1($rows, $cols)
            {
                if (isset($_POST['submit'])) {
                    $name = isset($_POST['n']) ? $_POST['n'] : "";
                    $age = isset($_POST['a']) ? $_POST['a'] : "";
                    $place = isset($_POST['p']) ? $_POST['p'] : "";
                    $email = isset($_POST['e']) ? $_POST['e'] : "";

                    echo "<table align='center' id=\"tl\" style=border-width = 3%; width =20%; background-color= lB0C4DEe;>";

                    $ly_1 = $age + 5;
                    $ly_2 = $ly_1 + 4;
                    $ly_3 = $ly_2 + 4;
                    $ly_4 = $ly_3 + 4;
                    $ly_5 = $ly_4 + 8;

                    echo "<tr><th colspan=\"2\"><p align='center'>User input</p></th></tr>";

                    echo "<tr><td align='center'>Name</td><td align='center'>$name</td></tr>";
                    echo "<tr><td align='center'>Age</td><td align='center'>$age</td></tr>";
                    echo "<tr><td align='center'>Place</td><td align='center'>$place</td></tr>";
                    echo "<tr><td align='center'>E-mail</td><td align='center'>$email</td></tr>";

                }

                echo "</table>";
            };
            drawTable1(2, 5);

            ?>
</div>

<?php
include __DIR__ . '/tpl/body_start.php';

?>





<div id="info-messages">

            <?php

            if(isset($_POST['n'])){
                $name = isset($_POST['n']) ? $_POST['n']: "";
                if ($name !== "") {
                    echo("<h1  class=\"alert alert-info\"  align='center'>Welcome $name!</h1>");
                };
            };
            ?>


            <?php $place = isset($_POST['p']) ? $_POST['p']:'';
            if ($place !== "") {
                if ($place == "Groningen") {
                    echo("<p class=\"alert alert-info\" align='center'>You're also from $place!</p>");
                    echo("<p  align='center' id='img'><img src=\"https://media2.giphy.com/media/f9G7Mgnme7tmgI4gPM/giphy.gif?cid=790b76115cf72d5365433958638555fd&rid=giphy.gif\" /></p>");
                };
            };

            ?>
</div>


<div id="ly-table">
    <?php
    $rows = 2; // amout of tr
    $cols = 6;// amjount of td
    function drawTable($rows, $cols)
    {
        if (isset($_POST['submit'])) {
            $age = isset($_POST['a']) ? $_POST['a'] : "";

            echo "<table  align='center' id=\"tl\" style=border-width = 3%; width =30%; background-color= lB0C4DEe;>";

            $ly_1 = $age + 5;
            $ly_2 = $ly_1 + 4;
            $ly_3 = $ly_2 + 4;
            $ly_4 = $ly_3 + 4;
            $ly_5 = $ly_4 + 8;

            echo("<p class=\"alert alert-info\" align='center;'>The next five leap years this will be your age:</p>");

            echo "<tr><th align='center'><p  align='center'>Leapyear</p></th><th><p align='center'>Your age</p></th></tr>";

            echo "<tr><td align='center'>2024</td><td align='center'>$ly_1</td></tr>";
            echo "<tr><td align='center'>2028</td><td align='center'>$ly_2</td></tr>";
            echo "<tr><td align='center'>2032</td><td align='center'>$ly_3</td></tr>";
            echo "<tr><td align='center'>2036</td><td align='center'>$ly_4</td></tr>";
            echo "<tr><td align='center'>2044</td><td align='center'>$ly_5</td></tr>";

            }

            echo "</table>";
    };
    drawTable(2, 6);


?>

</div>
<div id="na" class="alert alert-danger" role="alert">
    Please enter a correct name!
</div>

<div id="ag" class="alert alert-danger" role="alert">
    Please make use of numbers to declare age!
</div>

<div id="pl" class="alert alert-danger" role="alert">
    Please enter a correct place!
</div>

<div id="em" class="alert alert-danger" role="alert">
    please enter a valid e-mail!
</div>

    <div class="row wp-row center">
                <div class="col-md-6">
                    <form action="leapyear.php" method="POST" id="my_form_ly">
                        <div class="form-group">
                            <label for="name"><strong>name:</strong></label>
                            <input type="text" class="form-control" id="name" name="n">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid name
                            </div>
                        </div>

                        <div class="form-group">
                            <label id="a" for="age"><strong>age:</strong></label>
                            <input type="number" id="age" class="form-control" name="a">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid age
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="place"><strong>place:</strong></label>
                            <input type="text" id="place" class="form-control" name="p">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid place
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"><strong>email:</strong></label>
                            <input type="email" id="email" class="form-control" name="e">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid email
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="sub" class="btn btn-primary btn-lg button"> Show me! </div>
                            <button id="button" name="submit"  type="submit" class="btn btn-primary btn-lg button">button</button>
                        </div>
                    </form>
                </div>
            </div>


<?php
include __DIR__ . '/tpl/body_end.php';
?>

