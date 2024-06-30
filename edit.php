<?php

include 'config.php';

?>

<?php

if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT * FROM results WHERE id=$id";
$singleData = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($singleData);

$id      = $data['id'];
$name    = $data['name'];
$roll    = $data['roll'];
$subject = $data['subject'];
$marks   = $data['marks'];
$grade   = $data['grade'];

}

?>

<?php

if(isset($_POST['submit'])){

  $name    = $_POST['name'];
  $roll    = $_POST['roll'];
  $subject = $_POST['subject'];
  $marks   = $_POST['marks'];
  $grade   = $_POST['grade'];

  $query = "UPDATE results SET name='$name', roll='$roll', subject='$subject', marks='$marks', grade='$grade' WHERE id= $id";
  $updateData = mysqli_query($connection, $query);

if($updateData){
  // echo 'Create the Data';
  header('location:index.php');

}
else{
  echo 'Failed to Update data';
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Insert Result</a>
        </li>
    </div>
  </div>
  </nav>
</section>

<section class="container mt-5">
<form action="" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="name" required>
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll</label>
    <input type="text" class="form-control" name="roll" value="<?php echo $roll ?>" id="roll" required>
  </div>
  <div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" class="form-control" name="subject" value="<?php echo $subject ?>" id="subject" required>
  </div>
  <div class="mb-3">
    <label for="marks" class="form-label">Marks</label>
    <input type="text" class="form-control" name="marks" value="<?php echo $marks ?>" id="marks" required>
  </div>
  <div class="mb-3">
    <label for="grade" class="form-label">Grade</label>
    <input type="text" class="form-control" name="grade" value="<?php echo $grade ?>" id="grade" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>