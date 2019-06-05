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
include __DIR__ . '/tpl/body_start.php';

?>

    <div id="info-messages">
        <?php
        if(isset($_GET['n'])){
            $name = isset($_GET['n']) ? $_GET['n']: "";
            if ($name !== "") {
            echo("<h1 class=\"alert alert-info\" align='center' style=color:dodgerblue>Welcome {$name}!</h1>");
        };
        };
        ?>

        <p>
        <?php $place = isset($_GET['p']) ? $_GET['p']:'';
        if ($place !== "") {
            if ($place == "Amsterdam" or $place == "amsterdam") {
                echo ("<p class=\"alert alert-info\" align='center' style=color:dodgerblue>You're from the capital of the Netherlands!</p>");
            } else {
                echo("<p class=\"alert alert-info\" align='center' style=color:dodgerblue>You're from {$place}!</p>");
            };
            echo("<p  align='center' id='img'><img src=\"https://cdn.pixabay.com/photo/2018/10/23/13/11/house-3767839_960_720.jpg\" style=width=200px; height=250px;/></p>");


        };
        ?>
        </p>
    </div>


    <div class="row wp-row">
        <div class="col-md-6">
            <form action="simple_form.php" method="GET" id="my_form">
                <div class="form-group">
                    <label for="name"><b>name:</b></label>
                    <input type="text" class="form-control" id="sf-name" name="n">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Enter a valid name
                    </div>
                    <label for="place"><b>place:</b></label>
                    <input type="text" id="sf-place" class="form-control" name="p">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Enter a valid place
                    </div>
                </div>
                <button id="sf-sub" class="btn btn-primary btn-lg button">Send</button>
            </form>
        </div>
    </div>




<?php
include __DIR__ . '/tpl/body_end.php';
?>