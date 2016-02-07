<?php include 'database.php'; ?>

<?php

if ( isset($_POST['id']) && isset($_POST['name']) ) {

  $id = sanitizeMySQL($conn, $_POST['id']);
  $name = sanitizeMySQL($conn, $_POST['name']);
  $school = sanitizeMySQL($conn, $_POST['school']);
  $grade = sanitizeMySQL($conn, $_POST['grade']);
  $plan = sanitizeMySQL($conn, $_POST['plan']);
  $quantity = sanitizeMySQL($conn, $_POST['quantity']);
  $price = sanitizeMySQL($conn, $_POST['price']);

  $query = "UPDATE sales SET name = ?,
        school = ?,
        grade = ?,
        plan = ?,
        quantity = ?,
        price = ?
    WHERE id = ?";

    if ( $stmt = mysqli_prepare($conn, $query) ) {
      mysqli_stmt_bind_param($stmt, 'sssssdi',
      $name,
      $school,
      $grade,
      $plan,
      $quantity,
      $price,
      $id
      );

      mysqli_stmt_execute($stmt);

      mysqli_stmt_close($stmt);

      mysqli_close($conn);
    }
} else {
  echo "Failed to update!";
}

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
