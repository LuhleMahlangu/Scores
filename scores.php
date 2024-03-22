<?php

$scores = array();


if (isset($_POST['scores'])) {

    foreach ($_POST['scores'] as $score) {
        if ($score > 0) {
            $scores[] = $score;
        }
    }

    
    $max = max($scores);
    $min = min($scores);

   
    sort($scores);

    
    foreach ($scores as $score) {
        echo $score . " ";
    }
    echo "<br>";
    echo "Maximum: " . $max . "<br>";
    echo "Minimum: " . $min . "<br>";
}
?>

<form method="post">
    Scores: <input type="text" name="scores[]"><br>
    Scores: <input type="text" name="scores[]"><br>
    Scores: <input type="text" name="scores[]"><br>
    <input type="submit" value="Submit">
</form>
