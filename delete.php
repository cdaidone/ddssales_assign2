<?php include 'database.php';?>

<?php

if ( isset($_POST['id']) ) {

    $id = sanitizeMySQL($conn, $_POST['id']);

    $query = "DELETE FROM sales WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $query)) {

      mysqli_stmt_bind_param($stmt, 'i', $id);

      mysqli_stmt_execute($stmt);

      mysqli_stmt_close($stmt);

      mysqli_close($conn);
    }
} else {
  echo "Failed to delete!";
}

function sanitizeMySQL($conn, $var) {
  $var = strip_tags($var);
  $var = mysqli_real_escape_string($conn, $var);
  return $var;
}

?>
