<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Exam</title>
</head>
<body>
    <div class="container col">
        <?php
if (isset($_REQUEST['error'])):
?>
        <div class="alert alert-danger">
              <?php echo "Error Message : " . ucwords($_REQUEST['error']);?>
        </div>
        <?php
endif;
?>
    <form class="form-horizontal" action="exam.php" method="post">
        <fieldset>

        <!-- Form Name -->
        <legend>Select Your Category</legend>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Category</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="radios-0">
              <input type="radio" name="category" id="radios-0" value="1" checked="checked">
              General 1
            </label>
            </div>
          <div class="radio">
            <label for="radios-1">
              <input type="radio" name="category" id="radios-1" value="2">
              General 2
            </label>
            </div>

          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Start Exam</button>
          </div>
        </div>

        </fieldset>
    </form>
    </div>
</body>
</html>
