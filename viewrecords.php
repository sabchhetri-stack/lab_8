<?php
$title = "View Records";
require_once './includes/header.php';
require_once './db/conn.php';
?>

<h1 class="text-center mb-4">Client Records</h1>

<?php
$sql = "SELECT * FROM client_info";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead><tr>
                <th>ID</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Postal Code</th>
              </tr></thead><tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['client_id']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['province']}</td>
                    <td>{$row['postal_code']}</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p class='text-muted text-center'>No records found.</p>";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

require_once './includes/footer.php';
?>
