<?php
$title = "Delete Record";
require_once './includes/header.php';
require_once './db/conn.php';
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Delete Record</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $client_id = $_POST['client_id'];

  
  $sql = "DELETE FROM client_info WHERE client_id = $client_id";

  if (mysqli_query($conn, $sql)) {
    echo "<div class='alert alert-success text-center'>Record deleted successfully!</div>";
  } else {
    echo "<div class='alert alert-danger text-center'>Error deleting record: " . mysqli_error($conn) . "</div>";
  }
}
?>

  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
  </div>
</div>

<?php require_once './includes/footer.php'; ?>
