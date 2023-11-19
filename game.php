<?php
session_start();

$prev_value = 0;
$_SESSION['dice'] = '0';

// Function to roll dice and return a number
function throw_dice()
{
    $dice = rand(1, 6);
    $_SESSION['dice'] = $dice;
    return $dice;
}

$player_turn = isset($_POST["player_turn"]) ? $_POST["player_turn"] : 1;

$is_initial_load = true;

if (isset($_POST["user_guess"])) {

    if ($player_turn == 1) {
        $player_turn = 2;

        $players  = [
            ["name" => $_POST["player_1_name"], "score" => throw_dice() + $_SESSION['players'][0]["score"]],
            ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"]]
        ];
        if ($players[0]["score"] > 100) {
            $players  = [
                ["name" => $_POST["player_1_name"], "score" => +$_SESSION['players'][0]["score"]],
                ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"]]
            ];
        }

        $_SESSION['players'] = $players;
    } else {
        $player_turn = 1;

        $players  = [
            ["name" => $_POST["player_1_name"], "score" => $_SESSION['players'][0]["score"]],
            ["name" => $_POST["player_2_name"], "score" => throw_dice() + $_SESSION['players'][1]["score"]],
        ];
        if ($players[1]["score"] > 100) {
            $players  = [
                ["name" => $_POST["player_1_name"], "score" => +$_SESSION['players'][0]["score"]],
                ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"]]
            ];
        }
        $_SESSION['players'] = $players;
    }


    $is_initial_load = false;
} else  if (isset($players)) {

    $players[$player_turn - 1]["score"] += $players[$player_turn - 1]["score"];
} else
     if (isset($_GET["start"])) {
    $players           = [
        ["name" => $_GET["player_1_name"], "score" => 0],
        ["name" => $_GET["player_2_name"], "score" => 0],
    ];
    $is_initial_load   = false;
    $_SESSION['players'] = $players;
    //print_r( $_SESSION['players']);

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Game of Throws</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/index1.css" />
</head>

<body>

    <div class="headingDiv">
        <marquee behavior="scroll" direction="right">DICE ROLL </marquee>
    </div>

    <div class="headingDiv2">
        <img class="imgB1" src="images/dice.png" />
        <div class="links">
            <a href="http://www.twitter.com" target="_blank">
                <img class="headingDiv2IMG" alt="T" src="images/t.png" />
            </a>

            <a href="http://www.facebook.com" target="_blank">
                <img class="headingDiv2IMG" alt="T" src="images/f.png" />
            </a>

            <a href="http://www.youtube.com" target="_blank">
                <img class="headingDiv2IMG" alt="T" src="images/y.png" />
            </a>

            <a href="http://www.pinterest.com" target="_blank">
                <img class="headingDiv2IMG" alt="T" src="images/p.png" />
            </a>



            <div class="logout-btn">
                <a href="logout.php" class="">Logout</a>
            </div>

        </div>




        <div class="got">
            <img class="gotimg" alt="Title" src="images/title.jpeg" />
        </div>




    </div>



    <?php if (!$is_initial_load) : ?>





        <form id="main_game_form" action="game.php" method="post">

            <!-- Player 1 component -->
            <div id="player_1_gui">
                <?php
                $player_being_configured = 1;
                include "player_gui.php" ?>
            </div>

            <div class="game-board">
                <!-- Game board and dice image and score section -->


                <div class="container">

                    <?php if (isset($_SESSION['dice']) && $_SESSION['dice'] != 0) { ?>
                        <div class="dice-container">
                            <img src="images/dice-<?php echo $_SESSION['dice']; ?>.png" alt="Dice" class="dice-image" id="dice">
                            <div class="dice-roll"></div>
                        </div>



                        <h1 id="show">
                            <center> <?php if (isset($_SESSION['dice']))
                                             echo "You Rolled " . $_SESSION['dice'];
                                           
                                        ?></center>
                        </h1>




                    <?php } else { ?>
                        <div class="dice-container" style="display: none;">
                            <img src="images/dice.png" alt="Dice" class="dice-image" id="dice">
                            <div class="dice-roll"></div>
                        </div>
                        <h1 id="show" style="display: none;">
                            <center>You haven't rolled yet.</center>
                        </h1>
                    <?php } ?>
                </div>

                <div id="conatiner">
                    <?php
                    $rows = 10; // define number of rows
                    $cols = 10; // define number of columns
                    $count = 100;
                    echo "<table>";

                    for ($tr = 1; $tr <= $rows; $tr++) {

                        echo "<tr >";
                        for ($td = 1; $td <= $cols; $td++) {


                            if ($count % 8 == 0) {
                                echo "<td  id='snake'>" . $count . "</td>";
                                if ($count == $_SESSION['players'][0]["score"]) {

                                    $players  = [
                                        ["name" => $_POST["player_1_name"], "score" => $_SESSION['players'][0]["score"] - 5],
                                        ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"]]
                                    ];
                                    $_SESSION['players'] = $players;
                                    $_SESSION['dice'] = $_SESSION['dice'] . " ," . $players[0]["name"] . " score was reduced by 5 positions since your score was " . $count;
                                }
                                if ($count == $_SESSION['players'][1]["score"]) {
                                    $players  = [
                                        ["name" => $_POST["player_1_name"], "score" => $_SESSION['players'][0]["score"]],
                                        ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"] - 5]
                                    ];
                                    $_SESSION['players'] = $players;
                                    $_SESSION['dice'] = $_SESSION['dice'] . " ," . $players[1]["name"] . " score was reduced by 5 positions since your score was " . $count;
                                }
                            } else if ($count % 13 == 0) {


                                echo "<td  id='ladder'>" . $count . "</td>";
                                if ($count == $_SESSION['players'][0]["score"]) {

                                    $players  = [
                                        ["name" => $_POST["player_1_name"], "score" => $_SESSION['players'][0]["score"] + 5],
                                        ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"]]
                                    ];
                                    $_SESSION['players'] = $players;
                                    $_SESSION['dice'] = $_SESSION['dice'] . " ," . $players[0]["name"] . " score was increased by 5 positions since your score was " . $count;
                                }
                                if ($count == $_SESSION['players'][1]["score"]) {
                                    $players  = [
                                        ["name" => $_POST["player_1_name"], "score" => $_SESSION['players'][0]["score"]],
                                        ["name" => $_POST["player_2_name"], "score" => $_SESSION['players'][1]["score"] + 5]
                                    ];
                                    $_SESSION['players'] = $players;
                                    $_SESSION['dice'] = $_SESSION['dice'] . " ," . $players[1]["name"] . " score was increased by 5 positions since your score was " . $count;
                                }
                            } else {

                                if ($count == $_SESSION['players'][0]["score"] && $count == $_SESSION['players'][1]["score"])
                                    echo "<td  id='player01'>" . $_SESSION['players'][0]["name"] . "\n" . $_SESSION['players'][1]["name"] . "</td>";
                                //  echo "<td width='80px' height='40px' align='center' bgcolor='Gray'>" . $_SESSION['players'][0]["name"] . "\n" . $_SESSION['players'][1]["name"] . "</td>";

                                else  if ($count == $_SESSION['players'][0]["score"]) {
                                    if ($count == 100) {
                                        $_SESSION['dice'] = $_SESSION['dice'] . " ," . $_SESSION['players'][0]["name"] . "  Won";
                                    }
                                    echo "<td  id='player0'>" . $_SESSION['players'][0]["name"] . "</td>";
                                } else if ($count == $_SESSION['players'][1]["score"]) {
                                    if ($count == 100) {
                                        $_SESSION['dice'] .= " ," . $_SESSION['players'][1]["name"] . "  Won";
                                    }

                                    echo "<td  id='player1'>" . $_SESSION['players'][1]["name"] . "</td>";
                                } else
                                    echo "<td width='80px' height='40px' align='center'>" . $count . "</td>";
                            }
                            $count--;
                        }
                        echo "</tr>";
                    }



                    echo "</table>";
                    ?>
                </div>

                <!-- <h1 id="show">
                            <center> <?php if (isset($_SESSION['dice']))
                                            echo "You Rolled " . $_SESSION['dice'];
                                        ?></center>
                        </h1> -->
            </div>



            <?php

            if (isset($players)) {
                echo "<input hidden name=\"player_1_name\" type=\"text\" value=\"" . $players[0]["name"] . "\">";
                echo "<input hidden name=\"player_2_name\" type=\"text\" value=\"" . $players[1]["name"] . "\">";
                echo "<input hidden name=\"player_1_score\" type=\"text\" value=\"" . $players[0]["score"] . "\">";
                echo "<input hidden name=\"player_2_score\" type=\"text\" value=\"" . $players[1]["score"] . "\">";
            }

            echo "<input hidden name=\"player_turn\" type=\"text\" value=\"$player_turn\">";
            ?>



            <!-- Player 2 component -->

            <div id="player_2_gui">
                <?php
                $player_being_configured = 2;
                include "player_gui.php" ?>
            </div>




        </form>



    <?php else : ?>

        <div id="start-form-wrapper">

            <form id="start-form" action="game.php" method="get">

                <h1 class="blink">DICE ROLL</h1>

                <div id="playernames">
                    <input type="text" required name="player_1_name" placeholder="Player 1 Name" />
                    <input type="text" required name="player_2_name" placeholder="Player 2 Name" />
                </div>
                <br>
                <br>
                <input type="submit" value="Start" name="start">

            </form>
        </div>


    <?php endif; ?>

</body>

</html>