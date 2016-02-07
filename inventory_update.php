<?php include 'database.php'; ?>
<?php
    $query = "SELECT * FROM sales ORDER BY school";
    $sales = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> DDS Sales Tracker </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">

</head>

<body>
<div id="container">

<h1>DDS Sales Tracker</h1>

<p class="middle"><a href="enter_new_record.php">Add a New Sale</a></p>

<p class="middle">To update or delete a row, select it below and then click the Submit button at the bottom of the table.</p>

<form class="smallform" method="post" action="sales_edit.php" autocomplete="off">
<table>
  <tr>
    <th>Select</th>
    <th>Name</th>
    <th>School</th>
    <th>Grade</th>
    <th>Plan</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>

  <?php while( $row = mysqli_fetch_assoc($sales) ) : ?>

  <tr>
    <td><input type="radio" name="id" id="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"> </td>

    <td><?php echo stripslashes($row['name']); ?></td>
    <td><?php echo $row['school']; ?></td>
    <td><?php echo $row['grade']; ?></td>
    <td><?php echo $row['plan']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['price']; ?></td>
  </tr>

  <?php endwhile; ?>

  </table>

  <input type="submit" id="submit" value="Submit One Row for Editing">
  </form>

  </div>
  </body>
  </html>
