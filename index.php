<!Doctype html:5>
<html>
<head>
<title> Convert Html To Json String </title> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" >
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = htmlspecialchars($_POST['htmltext']);
    echo "Data =".json_encode($data);
}
?>
</div>


<div class="container">
<div class="row">
  <form action="" method="POST">
    <div class="form-group">
      <label for="Html">Enter Your Html Here </label>
      <textarea class="form-control" rows="20" id="Html" placeholder="Enter Html" name="htmltext"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</body>
</html>
