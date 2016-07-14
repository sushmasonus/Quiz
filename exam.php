<?php
include 'data/data.php';

$category = $_POST['category'];

if (isset($questions[$category])) {
	$category_question = $questions[$category];
} else {
	header('location:../index.php?error=unknown category');
}

?>

[
                    [   'q' => 'Which is the largest country in the world ?',
                        'o' => [
                            1 => 'Russia' ,
                            2 => 'China',
                            3=>'Canada'
                        ],
                        'a' => 1
                    ],
                    [   'q' => 'Which is the smallest country in the world?',
                        'o' => [
                            1 => 'Vatican city',
                            2 => 'Monaco',
                            3 => 'Singapore',
                        ],
                        'a' =>1
                    ],
                    [
                        'q' => 'Which is the most populated country in the world?',
                        'o' => [
                            1 => 'China' ,
                            2 => 'Russia',
                            3=>'Canada'
                        ],
                        'a' => 1
                    ],

                ]
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exam Started</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="form-horizontal" action="results.php" method="post">
        <input type="hidden" name="category" value="<?php echo $category;?>">
        <fieldset>
        <!-- Form Name -->
        <legend>Answer the questions</legend>
        <?php foreach ($category_question as $question_key => $question): ?>
        <!-- Question -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios"><?php echo $question['q'];?></label>
          <div class="col-md-4">
            <?php foreach ($question['o'] as $option_key => $option): ?>
            <div class="radio">
                <label for="radios-<?php echo $question_key;?>">
                  <input type="radio" name="q[<?php echo $question_key;?>]" id="radios-<?php echo $question_key;?>" value="<?php echo $option_key;?>" checked="checked">
                  <?php echo $option;?>
                </label>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <?php endforeach;?>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Next</button>
          </div>
        </div>

        </fieldset>
        </form>

    </div>
</body>
</html>
