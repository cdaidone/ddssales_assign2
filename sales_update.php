<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title> DDS Sales Tracker - Update </title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
  <script src="js/update.js"></script>
</head>

<body>
<div id="container">

<h1>DDS Sales Tracker: Update Existing Record</h1>

<div id="inner_content">

<?php

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

if ( isset($_POST['choice']) ) {
    $choice = $_POST['choice'];

    if ($choice == "delete") {

    $id = sanitizeMySQL($conn, $_POST['id']);
?>

      <form id="salesdelete" class="smallform" method="post"  action="inventory_update.php" autocomplete="off">
            <p>Are you sure you want to DELETE this record?</p>

            <p><label>
            <input type="radio" name="destroy" id="yes" value="yes"> Yes, delete this record</label></p>

            <p><label>
            <input type="radio" name="destroy" id="no" value="no"> No, do not delete it</label></p>

            <!-- pass _id_ value to the next script -->
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">

            <input type="submit" id="submit" value="Submit">
        </form>

<?php

  } else if ($choice == "update") {
    $id = sanitizeMySQL($conn, $_POST['id']);

        $name = $_POST['name'];
        $school = $_POST['school'];
        $grade = $_POST['grade'];
        $plan = $_POST['plan'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
?>

<p class="middle">Make changes in one or more fields. Then
      click the Update Record button.</p>

      <div id="sales">

      <form id="salesupdate" method="post" action="inventory_update.php" autocomplete="off">

      <input type="hidden" name="id" value="<?php echo $id ?>">

      <label for="name">Name </label>
      <input type="text" name="name" id="name" maxlength="25" required value="<?php echo stripslashes($name) ?>">

      <label for="school">School </label>
      <select name="school" id="school" selected="<?php echo $school ?>" required>
             <option value="" <?php echo $school == "" ? " selected" : ""; ?>></option>
             <option value="BRCS" <?php echo $school == "BRCS" ? " selected" : ""; ?>>Boca Raton Christian School</option>
             <option value="SRCS" <?php echo $school == "SRCS" ? "selected" : ""; ?>>Spanish River Christian School</option>
             <option value="St. Paul" <?php echo $school == "St. Paul" ? "selected" : ""; ?>>St. Paul Lutheran School</option>
             <option value="Abundent" <?php echo $school == "Abundent" ? "selected" : ""; ?>>Abundent Life Lutheran School</option>
             <option value="Evert" <?php echo $school == "Evert" ? "selected" : ""; ?>>Evert Tennis Academy</option>
             <option value="Harid" <?php echo $school == "Harid" ? "selected" : ""; ?>>Harid Conservatory</option>
      </select>

      <label for="grade">Grade </label>
      <input type="text" name="grade" id="grade" maxlength="5" required value="<?php echo $grade ?>">

      <label for="plan">Plan </label>
      <select name="plan" id="plan" required value="<?php echo $plan ?>">
          <option value=""></option>
          <option value="Pre-Paid">Pre-Paid</option>
          <option value="Tickets">Lunch Tickets</option>
      </select>

      <label for="quantity">Quantity </label>
      <input type="number" name="quantity" id="quantity" max="10" required value="<?php echo $quantity ?>">

      <label for="price">Price </label>
      <input type="number" name="price" id="price" max="9999.99" step="0.01" required value="<?php echo $price ?>">

      <input type="submit" id="submit" value="Update Record">
      </form>
     </div>

  <?php
      }
} else {

  ?>

  <p class='announce'>No record was selected!</p>


<?php

}
?>
</div>

<p class="middle"><a href="inventory_update.php">View All Sales</a></p>

</div>
</body>
</html>
