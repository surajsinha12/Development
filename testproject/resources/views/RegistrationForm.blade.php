<!DOCTYPE html>
<html lang="en">
<head>
  <title>Responsive Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>New Registration form</h2>
  <form>
    <div class="form-group">
      <label for="fnuser">First Name:</label>
      <input type="text" class="form-control" id="fnuser" placeholder="Enter your first name">
    </div>
    <div class="form-group">
      <label for="lnuser">Last Name:</label>
      <input type="text" class="form-control" id="lnuser" placeholder="Enter your last name">
    </div>
    <div class="form-group">
      <label for="ns">Name of the School:</label>
      <input type="text" class="form-control" id="ns" placeholder="Enter your school name">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
