<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test</title>
</head>

<body>
  <form method="post">
    <div>
      <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
      <input type="text" name="email" placeholder="Email" />
    </div>
    <div>
      <input type="password" name="password" placeholder="Password" />
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>


</body>

</html>

<?php
$conn = new mysqli("localhost", "root", "", "d1");
if ($conn->connect_errno) {
  die("error");
}

$sql = $conn->query("SELECT * FROM `users`");
?>

<p class="add">
  <?PHP
  echo $sql->num_rows
  ?>
</p>


<script src="js/jquery-compressed.js"></script>
<script src="js/form.js"></script>