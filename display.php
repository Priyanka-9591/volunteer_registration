<?php
include 'php/dbconnect.php';

$sql = "SELECT * FROM volunteers ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Volunteers List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
  <h2>Registered Volunteers</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Skills</th>
        <th>Availability</th>
        <th>ID Photo</th>
        <th>Registered At</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['phone']); ?></td>
        <td><?php echo htmlspecialchars($row['skills']); ?></td>
        <td><?php echo htmlspecialchars($row['availability']); ?></td>
        <td><img src="<?php echo htmlspecialchars($row['file_path']); ?>" alt="ID Photo" width="100" /></td>
        <td><?php echo $row['created_at']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>
