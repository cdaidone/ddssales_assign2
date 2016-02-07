<?php include 'database.php';?>

<?php

if (isset($_POST['name']) && isset($_POST['school'])) {

  $name = sanitizeMySQL($conn, $_POST['name']);
  $school = sanitizeMySQL($conn, $_POST['school']);
  $grade = sanitizeMySQL($conn, $_POST['grade']);
  $plan = sanitizeMySQL($conn, $_POST['plan']);
  $quantity = sanitizeMySQL($conn, $_POST['quantity']);
  $price = sanitizeMySQL($conn, $_POST['price']);

  $query = "INSERT INTO sales (name, school, grade, plan, quantity, price) VALUES (?, ?, ?, ?, ?, ?)";

  if ( $stmt = mysqli_prepare($conn, $query) ) {

    mysqli_stmt_bind_param($stmt, 'ssssid',
    $name,
    $school,
    $grade,
    $plan,
    $quantity,
    $price
    );

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    mysqli_close($conn);

  }

} else {
    echo "Failed to enter!";
}

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}


?>
