<?php
include './db/conn.php';

$message = "";
if (!$conn) {
  die("<div class='alert alert-danger text-center'>Database connection failed!</div>");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $client_id = $_POST['client_id'];

  
  $sql = "DELETE FROM client_info WHERE client_id = $client_id";

  if ($conn->query($sql) === TRUE) {
    $message = "<div class='alert alert-success text-center'>Record deleted successfully!</div>";
  } else {
    $message = "<div class='alert alert-danger text-center'>Error deleting record: " . $conn->error . "</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete a Record</title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">Delete a Record</h2>

  <?php echo $message; ?>

  <form method="POST" class="p-4 bg-white rounded shadow-sm">
    <div class="mb-3">
      <label for="client_id" class="form-label">Enter Primary Key (Client ID):</label>
      <input type="number" name="client_id" id="client_id" class="form-control" required>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger">Delete Record</button>
      <a href="index.php" class="btn btn-secondary">Back</a>
    </div>
  </form>
</div>

</body>
</html>
