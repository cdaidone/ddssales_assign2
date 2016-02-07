<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title> DDS Sales Tracker - Edit </title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/table.css">
</head>
<body>
<div id="container">

<h1>DDS Sales Tracker: Confirm Record to Edit</h1>

<div id="inner_content">
<?php

function sanitizeMySQL($conn, $var) {
  $var = strip_tags($var);
  $var = mysqli_real_escape_string($conn, $var);
  return $var;
}

if ( isset($_POST['id']) ) {
?>
  <table>
      <tr>
          <th>Name</th>
          <th>School</th>
          <th>Grade</th>
          <th>Plan</th>
          <th>Quantity</th>
          <th>Price</th>
      </tr>
      <tr>

<?php
    $id = sanitizeMySQL($conn, $_POST['id']);

    $query = "SELECT * FROM sales WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $query)) {

      mysqli_stmt_bind_param($stmt, 'i', $id);

      mysqli_stmt_execute($stmt);

      mysqli_stmt_bind_result($stmt, $id, $name, $school, $grade, $plan, $quantity, $price);

      while (mysqli_stmt_fetch($stmt)) {

        printf ("<td>%s</td>", stripslashes($name));
        printf ("<td>%s</td>", $school);
        printf ("<td>%s</td>", $grade);
        printf ("<td>%s</td>", $plan);
        printf ("<td>%s</td>", $quantity);
        printf ("<td>%.02f</td>", $price);
      }

?>
      </tr>
      </table>

      <form id="salesedit" class="smallform" method="post" action="sales_update.php" autocomplete="off">
            <p>Do you want to:
            <label>
            <input type="radio" name="choice" id="delete" value="delete" required> Delete this record</label>

            <label>
            <input type="radio" name="choice" id="update" value="update" required> Update this record</label>
            </p>

            <!-- pass all values to the next script -->
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="school" value="<?php echo $style ?>">
            <input type="hidden" name="grade" value="<?php echo $grade ?>">
            <input type="hidden" name="plan" value="<?php echo $plan ?>">
            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
            <input type="hidden" name="price" value="<?php echo $price ?>">

            <input type="submit" id="submit" value="Submit">
        </form>

<?php
        mysqli_stmt_close($stmt);
    }
      mysqli_close($conn);

} else {

?>

    <p class='announce'>No record was selected!</p>

<?php
}
 ?>

</div>

<div class="row">
    <div class="col-md-6">
        <p class="middle"><a href="inventory_update.php">View All Sales</a></p>
    </div>
    <div class="col-md-6">
        <p class="middle"><a href="enter_new_record.php">Add a New Sale</a></p>
    </div>
</div>
</body>
</html>
