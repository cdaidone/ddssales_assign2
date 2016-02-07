<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> DDS Sales Tracker Form </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Enter New Student</h1>

<p class="middle"><a href="inventory_update.php">View All Sales</a> &nbsp; | &nbsp; <a href="index.html">Home</a></p>

<div id="sales">

<form id="salesform" method="post" autocomplete="off">

    <label for="name">Student Name</label>
    <input type="text" name="name" id="name" maxlength="25" placeholder="Last Name, First Name" required>

    <label for="school">School</label>
    <select name="school" id="school" required>
        <option value=""></option>
        <option value="BRCS">Boca Raton Christian School</option>
        <option value="SRCS">Spanish River Christian School</option>
        <option value="St. Paul">St. Paul Lutheran School</option>
        <option value="Abundent">Abundent Life Lutheran School</option>
        <option value="Evert">Evert Tennis Academy</option>
        <option value="Harid">Harid Conservatory</option>
    </select>

    <label for="grade">Grade </label>
    <input type="text" name="grade" id="grade" maxlength="20" placeholder="Examples: 1A, 2B, 5A, 11A etc."required>

    <label for="plan">Plan</label>
    <select name="plan" id="plan" required>
        <option value=""></option>
        <option value="Pre-Paid">Pre-Paid</option>
        <option value="Tickets">Lunch Tickets</option>
    </select>

    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" id="quantity" maxlength="10" required>

    <label for="price">Price</label>
    <input type="number" name="price" id="price" max="9999.99" step="0.01" placeholder="PP: $375|$425|$500 Tickets: $37.50|$45|$50" required value="<?php echo $price ?>">

    <input type="submit" id="submit" value="Submit">

  </form>

  </div>

  <div id="response">
        <p class="announce">Form Submitted</p>
        <p class="middle"><a href="enter_new_record.php">Add a New Sale</a></p>
  </div>
  </body>
  </html>
