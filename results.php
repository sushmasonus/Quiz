<?php

include 'data/data.php';
$category = $_POST['category'];
$category_question = $questions[$category];

$results = $_POST['q'];

$mark = $ogmark = 0;

foreach ($results as $question => $option) {
    if($category_question[$question]['a'] == $option){
        $mark = $mark + 5;
    }
    $ogmark = $ogmark + 5;
}
echo $mark.'/'.$ogmark;
