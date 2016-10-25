<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Car Models</title>
  </head>
  <body>
      <form class="" action="check.php" method="get">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <select name="select" id="select" class="form-control">
                <?php
                include 'controlArr.php';

                foreach ($models as $key => $modelss) { ?>

                  <option><?=$modelss['name']?></option>

                <?php } ?>
              </select>
              <input class="btn btn-sm btn-info btn-block" type="submit" name="submit" value="Submit">
            </div>
          </div>
        </div>
      </form>
  </body>
</html>
